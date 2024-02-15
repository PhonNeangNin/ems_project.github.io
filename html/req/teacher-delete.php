<?php

    $id = $_GET['teachers_id'];
    $username = $_GET['username'];
    $password = $_GET['password'];
    echo "$id, $username ,$password";

    if ($id) {

        include "../connection/connection_db.php";

        // check if the teacher already exists
        $sql = "DELETE FROM teachers WHERE teachers_id =?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);

        $sql = "DELETE FROM users WHERE username =?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$username]);
        $sm = "New teacher created successfully";
        header("Location: ../teachers.php?error=$sm");
        exit;

    } else {
        $em = "Invald student Or ClassStatus";
        header("Location: ../teachers.php?error=$em");
	    exit;
    }

?>