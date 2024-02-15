<?php

    $grade     = $_POST['grade'];
    $section   = $_POST['section'];
    $class_id = $_POST['class_id'];
    echo "$grade , $section , $class_id";

    if ($grade && $section) {

        include "../connection/connection_db.php";

        // check if the user already exists
        $sql_check = "SELECT * FROM classes WHERE grade = ? AND section = ?";
        $stmt_check = $conn->prepare($sql_check);
        $stmt_check->execute([$grade, $section]);

        if ($stmt_check->rowCount() > 0) {
            $em  = "The class already exists";
            header("Location: ../classes.php?error=$em");
            exit;
        }else {
            if($class_id != NULL){
                $sql = "UPDATE classes SET grade =? , section =?  WHERE class_id =?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$grade, $section,$class_id]);
                $sm = "New section created successfully";
                header("Location: ../classes.php?error=$sm");
                exit;
         }else {
           $sql  = "INSERT INTO classes(grade, section) VALUES(?, ?)";
           $stmt = $conn->prepare($sql);
           $stmt->execute([$grade, $section]);
           $sm = "New class created successfully";
           header("Location: ../classes.php?error=$sm");
           exit;
         }
        }

    } else {
        $em = "Invald ClassName Or ClassStatus";
        header("Location: ../classes.php?error=$em");
	    exit;
    }

?>