<?php

    $username     = $_POST['username'];
    $password     = $_POST['password'];
    $fname   = $_POST['firstname'];
    $lname   = $_POST['lastname'];
    $grade   = $_POST['grade'];
    $section   = $_POST['section'];
    $address   = $_POST['address'];
    $gender   = $_POST['gender'];
    $email_address = $_POST['emailaddress'];
    $date_of_birth = $_POST['date_of_birth'];
    $student_id = $_POST['studentid'];

    echo "$username ,$password, $fname ,$lname
        ,$grade,$section, $address, $gender
        ,$email_address, $date_of_birth ,$student_id";

    if ($fname && $lname &&$grade && $section && $address && $gender && $email_address && $date_of_birth) {

        include "../connection/connection_db.php";

        $password = password_hash($password, PASSWORD_DEFAULT);

        // check if the user already exists

        if ($username != null && $password != null) {
            $sql_check = "SELECT * FROM students WHERE username = ? AND password =?";
            $stmt_check = $conn->prepare($sql_check);
            $stmt_check->execute([$username, $password]);

            if ($stmt_check->rowCount() > 0) {
                $em  = "The student already exists";
                header("Location: ../students.php?error=$em");
                exit;
            }

        }

        if($student_id != NULL){
            $sql = "UPDATE students SET fname =? , lname =?
            , grade =? , section =? , address =? , gender =? ,email_address =? , date_of_birth = ? WHERE student_id =?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$fname ,$lname,$grade,$section, $address, $gender, $email_address, $date_of_birth, $student_id]);
            $sm = "New student created successfully";
            header("Location: ../students.php?error=$sm");
            exit;
        } else {
            $sql  = "INSERT INTO students(username ,password, fname ,lname,grade,section, address, gender, email_address, date_of_birth ) VALUES(?,?,?,?,?,?,?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$username ,$password, $fname ,$lname,$grade,$section, $address, $gender, $email_address, $date_of_birth]);

            $sql  = "INSERT INTO
                    users(firstname, lastname, email, username, phone_number, pwd, roles, gender)
                    VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$fname, $lname, '', 
                        $username,'', $password, 
                        'student', $gender]);
            $sm = "New subject created successfully";
            header("Location: ../students.php?error=$sm");
            exit;
        }


    } else {
        $em = "Invald SubjectName Or SubjectStatus";
        header("Location: ../students.php?error=$em");
	    exit;
    }

?>