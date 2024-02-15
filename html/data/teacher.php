<?php
// All Teacher
function getAllTeacher($conn){
    $sql = "SELECT * FROM teachers";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
 
    if ($stmt->rowCount() >= 1) {
      $subject = $stmt->fetchAll();
      return $subject;
    }else {
     return 0;
    }
 }

 // Get Teacher By class 
function getTeacherByClass($class, $conn){
  $key = preg_replace('/(?<!\\\)([%_])/', '\\\$1',$class);
  $sql = "SELECT * FROM teachers WHERE class = ?"; 
          // OR fname LIKE ?
          // OR grade LIKE ?
          // OR lname LIKE ?
          // OR username LIKE ?";
  $stmt = $conn->prepare($sql);
  $stmt->execute([$key]);
  
    if ($stmt->rowCount() >= 1) {
      $student = $stmt->fetchAll();
      return $student;
    }else {
     return 0;
    }
} 

// // Get Student By Grade 
// function getStudentByGrade($grade, $section, $conn){
//   $key = preg_replace('/(?<!\\\)([%_])/', '\\\$1',$grade,$section);
//   $sql = "SELECT * FROM students WHERE grade = ? AND section = ?"; 
//   $stmt = $conn->prepare($sql);
//   $stmt->execute([$key]);
  
//     if ($stmt->rowCount() >= 1) {
//       $student = $stmt->fetchAll();
//       return $student;
//     }else {
//      return 0;
//     }
// } 

function getTeacherByUFL($username, $fname, $lname, $conn){
  $key = preg_replace('/(?<!\\\)([%_])/', '\\\$1',$username);
  $key1 = preg_replace('/(?<!\\\)([%_])/', '\\\$1',$fname);
  $key2 = preg_replace('/(?<!\\\)([%_])/', '\\\$1',$lname);

  $sql = "SELECT * FROM teachers WHERE username = ? AND fname = ? AND lname = ?"; 
  $stmt = $conn->prepare($sql);
  $stmt->execute([$key,$key1,$key2]);
  
    if ($stmt->rowCount() >= 1) {
      $student = $stmt->fetchAll();
      return $student;
    }else {
     return 0;
    }
} 

function getTeacherByOneUFL($username, $fname, $lname, $conn){
  $key = preg_replace('/(?<!\\\)([%_])/', '\\\$1',$username);
  $key1 = preg_replace('/(?<!\\\)([%_])/', '\\\$1',$fname);
  $key2 = preg_replace('/(?<!\\\)([%_])/', '\\\$1',$lname);

  $sql = "SELECT * FROM teachers WHERE username = ? AND fname = ? AND lname = ?"; 
  $stmt = $conn->prepare($sql);
  $stmt->execute([$key,$key1,$key2]);
  
  if ($stmt->rowCount() == 1) {
    $teacher = $stmt->fetch();
    return $teacher;
  }else {
   return 0;
  }
} 
?>