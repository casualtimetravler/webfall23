<?php
    include "connect.php";

    $booktitle= $_POST['booktitle'];
    $author= $_POST['author'];
    $description = $_POST['description'];
   

    $query = "INSERT INTO `suggestion` ( `Title`, `Author`, `Description`) VALUES ( '$booktitle', '$author', '$description')";
    if ($conn->query($query) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $query . "<br>" . $conn->error;
      }
       
    header("Location: Books.php");
?>