<?php
    include "connect.php";

    
    $email= $_POST['email'];
    $password = $_POST['password'];
   

    $query = "select * from accounts WHERE email= '$email' AND password = '$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
      echo "Login successful!";
      header("Location: index.php");
  } else {
      echo "Login failed. Check your username and password.";
  }
// Close the database connection
$conn->close();

   
?>