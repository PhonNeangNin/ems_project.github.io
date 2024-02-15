<?php

    $id = $_GET['grade_id'];
    echo "$id";

    if ($id) {

        include "../connection/connection_db.php";

        // check if the grades already exists
                $sql = "DELETE FROM grades WHERE grades_id =?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$id]);
                $sm = "New grades created successfully";
                header("Location: ../grades.php?error=$sm");
                exit;

    } else {
        $em = "Invald grades Or ClassStatus";
        header("Location: ../grades.php?error=$em");
	    exit;
    }

?>