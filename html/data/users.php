<?php
    function getTeacherIDByOneUFL($username, $fname, $lname, $conn){
        $key = preg_replace('/(?<!\\\)([%_])/', '\\\$1',$username);
        $key1 = preg_replace('/(?<!\\\)([%_])/', '\\\$1',$fname);
        $key2 = preg_replace('/(?<!\\\)([%_])/', '\\\$1',$lname);
      
        $sql = "SELECT * FROM users WHERE username = ? AND firstname = ? AND lastname = ?"; 
        $stmt = $conn->prepare($sql);
        $stmt->execute([$key,$key1,$key2]);
        
        if ($stmt->rowCount() == 1) {
          $teacher = $stmt->fetch();
          return $teacher;
        }else {
         return 0;
        }
    }

    function getAdminByOneUFL($username, $fname, $lname, $conn){
        $key = preg_replace('/(?<!\\\)([%_])/', '\\\$1',$username);
        $key1 = preg_replace('/(?<!\\\)([%_])/', '\\\$1',$fname);
        $key2 = preg_replace('/(?<!\\\)([%_])/', '\\\$1',$lname);
      
        $sql = "SELECT * FROM users WHERE username = ? AND firstname = ? AND lastname = ?"; 
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