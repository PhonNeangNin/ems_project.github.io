<?php
    session_start();

    $email_username = $_POST['email-username'];
    $password = $_POST['password'];
    echo "Email OR Username [ $email_username ], password [ $password ]";

    if ($email_username && $password) {

        include "../connection/connection_db.php";
        
        if (preg_match('/^\S+@\S+\.\S+$/', $email_username)) {
            // when user input email
            $sql_query = "SELECT * FROM users WHERE email = ?";
        } else {
            $sql_query = "SELECT * FROM users WHERE username = ?";
        }

        $stmt = $conn->prepare($sql_query);
        $stmt->execute([$email_username]);

        if ($stmt->rowCount() == 1) {

            $user   = $stmt->fetch(); // get data form table users

            $uname  = $user['username'];
            $email  = $user['email'];
            $pwd    = $user['pwd'];
            $role   = $user['roles'];

            $fname  = $user['firstname'];
            $lname  = $user['lastname'];

            echo "$uname, $pwd, $email, $role, $fname, $lname";

            if (password_verify($password, $pwd)) {
                echo " === > Message :: password incorrect";

                $_SESSION['role'] = $role;
                $_SESSION['username'] = $uname;
                $_SESSION['fname'] = $fname;
                $_SESSION['lname'] = $lname;

                header("Location: ../index.php");
                exit;
            }

        } else {
            echo "No Data, [$sql_query]";
            $em = "Email or Username and password Incorrect";
            header("Location: ../auth-login-basic.php?error=$em");
        }

    } else {
        $em = "Email or Username and password not enter";
        header("Location: ../auth-login-basic.php?error=$em");
    }

?>