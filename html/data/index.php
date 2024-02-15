<?php

// All Subject
function getAllUsers($conn){
    $sql = "SELECT * FROM users";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
 
    if ($stmt->rowCount() >= 1) {
      $subject = $stmt->fetchAll();
      return $subject;
    }else {
     return 0;
    }
}

function getCountStudents($conn){
    $sql = "SELECT COUNT(student_id) AS item FROM students";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
 
    if ($stmt->rowCount() >= 1) {
      $subject = $stmt->fetch();
      return $subject;
    }else {
     return 0;
    }
}


function getCountTeacher($conn){
    $sql = "SELECT COUNT(teachers_id) AS item FROM teachers";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
 
    if ($stmt->rowCount() >= 1) {
      $subject = $stmt->fetch();
      return $subject;
    }else {
     return 0;
    }
}


function getCountClass($conn){
    $sql = "SELECT COUNT(class_id) AS item FROM classes";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
 
    if ($stmt->rowCount() >= 1) {
      $subject = $stmt->fetch();
      return $subject;
    }else {
     return 0;
    }
}


function getCountSubject($conn){
    $sql = "SELECT COUNT(subject_id) AS item FROM subjects";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
 
    if ($stmt->rowCount() >= 1) {
      $subject = $stmt->fetch();
      return $subject;
    }else {
     return 0;
    }
}






?>