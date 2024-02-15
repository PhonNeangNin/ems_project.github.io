<?php

    $classid = $_GET['class_id'];
    echo "$classid";

    if ($classid) {

        include "../connection/connection_db.php";

        // check if the section already exists
                $sql = "DELETE FROM classes WHERE class_id =?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$classid]);
                $sm = "New classes created successfully";
                header("Location: ../classes.php?error=$sm");
                exit;

    } else {
        $em = "Invald classes Or ClassStatus";
        header("Location: ../classes.php?error=$em");
	    exit;
    }

?>