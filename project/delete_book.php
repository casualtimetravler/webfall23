<?php
include "connect.php";

$bookId = $_POST['bookId'];

$sql = "DELETE FROM books WHERE bookID = $bookId";



if ($conn->query($sql) === TRUE) {
  echo "User deleted successfully";
} else {
  echo "Error deleting book: " . $conn->error;
}

// Close the database connection
$conn->close();



?>