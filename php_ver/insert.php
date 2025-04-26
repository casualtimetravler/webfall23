<?php
    include "connect.php";

    $course_code = $_POST['course_code'];
    $title = $_POST['title'];
    $discription = $_POST['discription'];
    $prerequisites = $_POST['prerequisites'];
    $credits = $_POST['credits'];
    $department = $_POST['department'];
    $instructor = $_POST['instructor'];


    $query = "INSERT INTO `courses` (`course_code`, `title`, `discription`, `prerequisites`, `credits`, `department`, `instructor`) VALUES ('$coursecode', '$coursename', '$coursedisc', '$prereq', '$credit', '$departments', '$instructor')";
    if ($conn->query($query) === TRUE) {
        echo "New record created successfully";
      } else { 
        echo "Error: " . $query . "<br>" . $conn->error;
      }
    
    header("Location: Books.php");
?>