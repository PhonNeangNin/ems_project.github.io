<?php
    session_start();
    $role = $_SESSION['role'];
    
    $username     = $_POST['username'];
    $password     = $_POST['password'];
    $fname   = $_POST['firstname'];
    $lname   = $_POST['lastname'];
    $address   = $_POST['address'];
    $email_address = $_POST['emailaddress'];
    $id = $_POST['id'];
    $user_id = $_POST['user_id'];
    

    echo "$username ,$password, $fname ,$lname, $address, $email_address , $id , $role, $user_id";

    if ($user_id) {

        include "../connection/connection_db.php";

        $password = password_hash($password, PASSWORD_DEFAULT);

        //check if the user already exists

        if ($role == "teachers") {
            $option = "teachers";
            $option_id = "teachers_id";
        } else if ($role == "students") {
            $option = "students";
            $option_id = "student_id";
        } else {
            $option = "users";
            $option_id = "id";
        }
    
        $sql_check = "SELECT * FROM $option WHERE $option_id = ?";
        $stmt_check = $conn->prepare($sql_check);
        $stmt_check->execute([$id]);

        if ($stmt_check->rowCount() > 0) {

            if ($id != null && ($role == "teachers" || $role == "students") ) {
                $sql = "UPDATE $option SET username =? , password =? , fname =?
                ,lname =? , address =?, email_address = ? WHERE $option_id =?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$username ,$password,$fname, $lname, $address, $email_address, $id]);
            }
           
            $sql = "UPDATE users SET username =? , pwd =? , firstname =?
            ,lastname =?  WHERE id =?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$username ,$password,$fname, $lname,$user_id]);
            
            
            $sm = "Update accounts successfully";
            header("Location: ../accounts.php?error=$sm");
            exit;

        }else {

            $em = "Not exit";
            header("Location: ../accounts.php?error=$em");
            exit;
        }
    
    
    } else {
        $em = "Invald SubjectName Or SubjectStatus";
        header("Location: ../accounts.php?error=$em");
	    exit;
    }

?>