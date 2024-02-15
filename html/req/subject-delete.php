<?php

    $id = $_GET['subject_id'];
    echo "$id";

    if ($id) {

        include "../connection/connection_db.php";

        // check if the subject already exists
                $sql = "DELETE FROM subjects WHERE subject_id =?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$id]);
                $sm = "New section created successfully";
                header("Location: ../subjects.php?error=$sm");
                exit;

    } else {
        $em = "Invald grades Or ClassStatus";
        header("Location: ../subjects.php?error=$em");
	    exit;
    }

?>