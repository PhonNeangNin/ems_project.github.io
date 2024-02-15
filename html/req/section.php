<?php

    $section  = $_POST['section'];
    $section_id = $_POST['section_id'];
    echo "$section";

    if ($section) {

        include "../connection/connection_db.php";

        // check if the grades already exists
        $sql_check = "SELECT * FROM section WHERE section =? ";
        $stmt_check = $conn->prepare($sql_check);
        $stmt_check->execute([$section]);

        if ($stmt_check->rowCount() > 0) {
            $em  = "The section already exists";
            header("Location: ../section.php?error=$em");
            exit;
         }else {
            if($section_id != NULL){
                $sql = "UPDATE section SET section =?  WHERE section_id =?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$section, $section_id]);
                $sm = "New section created successfully";
                header("Location: ../section.php?error=$sm");
                exit;
            }else{
                $sql  = "INSERT INTO section(section) VALUES(?)";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$section]);
                $sm = "New section created successfully";
                header("Location: ../section.php?error=$sm");
                exit;
            }
        }

    } else {
        $em = "Invald section Or ClassStatus";
        header("Location: ../section.php?error=$em");
	    exit;
    }

?>