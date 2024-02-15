<?php
// All Subject
function getAllSubjects($conn){
    $sql = "SELECT * FROM subjects";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
 
    if ($stmt->rowCount() >= 1) {
      $subject = $stmt->fetchAll();
      return $subject;
    }else {
     return 0;
    }
 }
?>