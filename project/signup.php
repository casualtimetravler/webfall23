<?php
    include "connect.php";

    $name= $_POST['name'];
    $email= $_POST['email'];
    $password = $_POST['password'];
   

    $query = "INSERT INTO `accounts` (`name`, `email`, `password`) VALUES ( '$name', '$email', '$password')";
    if ($conn->query($query) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $query . "<br>" . $conn->error;
      }
       
    header("Location: Account.php");
?>