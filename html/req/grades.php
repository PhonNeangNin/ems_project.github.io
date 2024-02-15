<?php

    $grade_code     = $_POST['grade_code'];
    $grade   = $_POST['grade'];
    $grade_id = $_POST['grade_id'];
    echo "$grade_code , $grade";

    if ($grade_code && ($grade)) {

        include "../connection/connection_db.php";

        // check if the grades already exists
        $sql_check = "SELECT * FROM grades WHERE grades_code = ? AND grade = ?";
        $stmt_check = $conn->prepare($sql_check);
        $stmt_check->execute([$grade_code, $grade]);

        if ($stmt_check->rowCount() > 0) {
            $em  = "The grades already exists";
            header("Location: ../grades.php?error=$em");
            exit;
         }else {
            if($grade_id != NULL){
                $sql = "UPDATE grades SET grades_code =? , grade =? WHERE grades_id =?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$grade_code, $grade, $grade_id]);
                $sm = "New grades created successfully";
                header("Location: ../grades.php?error=$sm");
                exit;
            }else{
           $sql  = "INSERT INTO grades(grades_code, grade) VALUES(?, ?)";
           $stmt = $conn->prepare($sql);
           $stmt->execute([$grade_code, $grade]);
           $sm = "New grades created successfully";
           header("Location: ../grades.php?error=$sm");
           exit;
            }
         }

    } else {
        $em = "Invald grades Or ClassStatus";
        header("Location: ../grades.php?error=$em");
	    exit;
    }

?>