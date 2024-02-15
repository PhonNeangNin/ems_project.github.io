<?php

    $subject_name     = $_POST['subject_name'];
    $subject_code     = $_POST['subject_code'];
    $grade   = $_POST['grade'];
    $subject_id = $_POST['subject_id'];
    echo "$subject_name ,$subject_code, $grade ,$subject_id";

    if ($subject_name && $subject_code && $grade) {

        include "../connection/connection_db.php";

        // check if the user already exists
        $sql_check = "SELECT * FROM subjects WHERE subject_name = ? AND subject_code =? AND grade = ?";
        $stmt_check = $conn->prepare($sql_check);
        $stmt_check->execute([$subject_name, $subject_code, $grade,]);

        if ($stmt_check->rowCount() > 0) {
            $em  = "The subject already exists";
            header("Location: ../subjects.php?error=$em");
            exit;
        }else {
            if($subject_id != NULL){
                $sql = "UPDATE subjects SET subject_name =? , subject_code =? , grade =?  WHERE subject_id =?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$subject_name, $subject_code,$grade ,$subject_id]);
                $sm = "New section created successfully";
                header("Location: ../subjects.php?error=$sm");
                exit;
         }else {
           $sql  = "INSERT INTO subjects(subject_name, subject_code, grade) VALUES(?,?,?)";
           $stmt = $conn->prepare($sql);
           $stmt->execute([$subject_name,$subject_code,$grade]);
           $sm = "New subject created successfully";
           header("Location: ../subjects.php?error=$sm");
           exit;
         }
        }

    } else {
        $em = "Invald SubjectName Or SubjectStatus";
        header("Location: ../subjects.php?error=$em");
	    exit;
    }

?>