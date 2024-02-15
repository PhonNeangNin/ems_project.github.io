<?php

    $id = $_GET['student_id'];
    $username = $_GET['username'];
    $password = $_GET['password'];
    echo "$id, $username ,$password";

    if ($id) {

        include "../connection/connection_db.php";

        // check if the grades already exists
        $sql = "DELETE FROM students WHERE student_id =?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);

        $sql = "DELETE FROM users WHERE username =?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$username]);
        $sm = "New student created successfully";
        header("Location: ../students.php?error=$sm");
        exit;

    } else {
        $em = "Invald student Or ClassStatus";
        header("Location: ../students.php?error=$em");
	    exit;
    }

?>