<?php
include "connect.php";

$userId = $_POST['userId'];

$sql = "DELETE FROM accounts WHERE signupID = $userId";



if ($conn->query($sql) === TRUE) {
  echo "User deleted successfully";
} else {
  echo "Error deleting user: " . $conn->error;
}

// Close the database connection
$conn->close();



?>