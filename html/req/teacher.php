<?php

    $username     = $_POST['username'];
    $password     = $_POST['password'];
    $fname   = $_POST['firstname'];
    $lname   = $_POST['lastname'];
    $gender   = $_POST['gender'];
    $address   = $_POST['address'];
    $phone_number   = $_POST['phone_number'];
    $email_address = $_POST['emailaddress'];
    $date_of_birth = $_POST['date_of_birth'];
    $teachers_id = $_POST['teachers_id'];

    $classes = "";
    foreach ($_POST['class'] as $class) {
    	// $classes .=$class;
        $classes .= "  $class";
    }

    $subjects = "";
    foreach ($_POST['subjects'] as $subject) {
    	// $subjects .= $subject;
    	$subjects .= "   $subject";
    }
    echo "$fname ,$lname, $gender,$classes,$subjects, $address, $phone_number, $date_of_birth";

    if ($fname && $lname && $gender && $classes && $subjects && $address && $phone_number && $date_of_birth) {

        include "../connection/connection_db.php";

        $password = password_hash($password, PASSWORD_DEFAULT);

        //check if the user already exists
        if ($username != null && $password != null) {

            $sql_check = "SELECT * FROM teachers WHERE username = ? AND password =?";
            $stmt_check = $conn->prepare($sql_check);
            $stmt_check->execute([$username, $password]);
    
            if ($stmt_check->rowCount() > 0) {
                $em  = "The teacher already exists";
                header("Location: ../teachers.php?error=$em");
                exit;
            }
        }

        if($teachers_id != NULL){
            $sql = "UPDATE teachers SET class =? , fname =?
            ,lname =? , subjects =? , address =?
            ,date_of_birth =? , phone_number =? , gender =?
            , email_address =? WHERE teachers_id =?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$class ,$fname, $lname,$subjects,$address, $date_of_birth, $phone_number, $gender,$email_address,$teachers_id]);
            $sm = "New teacher created successfully";
            header("Location: ../teachers.php?error=$sm");
            exit;
        } else {
           $sql  = "INSERT INTO teachers( username, password, class
           , fname, lname, subjects, address,
            date_of_birth, phone_number, gender, email_address) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
           $stmt = $conn->prepare($sql);
           $stmt->execute([$username ,$password, $class ,$fname, $lname,$subjects,$address, $date_of_birth, $phone_number,$gender, $email_address]);

           $sql  = "INSERT INTO
                 users(firstname, lastname, email, username, phone_number, pwd, roles, gender)
                 VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$fname, $lname, '', 
                         $username, $phone_number, $password, 
                         'teachers', $gender]);
            $sm = "New teacher created successfully";
            header("Location: ../teachers.php?error=$sm");
            exit;
        }
    
    } else {
        $em = "Invald SubjectName Or SubjectStatus";
        header("Location: ../teachers.php?error=$em");
	    exit;
    }

?>