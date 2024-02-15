<?php
// All Student
function getAllStudent($conn){
    $sql = "SELECT * FROM students";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
 
    if ($stmt->rowCount() >= 1) {
      $subject = $stmt->fetchAll();
      return $subject;
    }else {
     return 0;
    }
 }

 // Get Student By Id 
function getStudentById($id, $conn){
  $sql = "SELECT * FROM students
          WHERE student_id=?";
  $stmt = $conn->prepare($sql);
  $stmt->execute([$id]);

  if ($stmt->rowCount() > 0) {
    $student = $stmt->fetch();
    return $student;
  }else {
   return 0;
  }
}

 // Get Student By Grade 
function getStudentByGrade($grade, $conn){
  $key = preg_replace('/(?<!\\\)([%_])/', '\\\$1',$grade);
  $sql = "SELECT * FROM students WHERE grade = ?"; 
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

function getStudentByClass($class, $conn){

  $class = substr($class, 0, 4);

  $key = preg_replace('/(?<!\\\)([%_])/', '\\\$1',$class);
  $sql = "SELECT * FROM students WHERE grade = ?"; 
  $stmt = $conn->prepare($sql);
  $stmt->execute([$key]);
  
    if ($stmt->rowCount() >= 1) {
      $student = $stmt->fetchAll();
      return $student;
    }else {
     return 0;
    }
} 


function getStudentByOneUFL($username, $fname, $lname, $conn){
  $key = preg_replace('/(?<!\\\)([%_])/', '\\\$1',$username);
  $key1 = preg_replace('/(?<!\\\)([%_])/', '\\\$1',$fname);
  $key2 = preg_replace('/(?<!\\\)([%_])/', '\\\$1',$lname);

  $sql = "SELECT * FROM students WHERE username = ? AND fname = ? AND lname = ?"; 
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