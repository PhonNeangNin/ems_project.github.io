<?php

    $id = $_GET['section_id'];
    echo "$id";

    if ($id) {

        include "../connection/connection_db.php";

        // check if the section already exists
                $sql = "DELETE FROM section WHERE section_id =?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$id]);
                $sm = "New section created successfully";
                header("Location: ../section.php?error=$sm");
                exit;

    } else {
        $em = "Invald grades Or ClassStatus";
        header("Location: ../section.php?error=$em");
	    exit;
    }

?>