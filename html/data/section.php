<?php
// All Section
function getAllsection($conn){
    $sql = "SELECT * FROM section";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
 
    if ($stmt->rowCount() >= 1) {
      $section = $stmt->fetchAll();
      return $section;
    }else {
     return 0;
    }
 }

// Get Section by ID
function getSectioById($section_id, $conn){
  $sql = "SELECT * FROM section
          WHERE section_id=?";
  $stmt = $conn->prepare($sql);
  $stmt->execute([$section_id]);

  if ($stmt->rowCount() == 1) {
    $section = $stmt->fetch();
    return $section;
  }else {
   return 0;
  }
}
?>