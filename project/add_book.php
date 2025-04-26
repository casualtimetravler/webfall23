<?php
    include "connect.php";



    
    
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Handle image upload
  $targetDirectory = "Images/"; // specify your desired directory

  $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);

  echo  $targetFile;

  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

  // Check if the image file is a actual image or fake image
  $check = getimagesize($_FILES["image"]["tmp_name"]);
  if ($check === false) {
      echo "File is not an image.";
      $uploadOk = 0;
  }

  // Check if file already exists
  if (file_exists($targetFile)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
  }

  // Check file size (adjust as needed)
  if ($_FILES["image"]["size"] > 5000000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
  }

  // Allow certain file formats
  if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
      echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
      $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
  } else {
      // Upload the file to the specified directory
      if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
          echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded.";

          // Insert data into the database
          // $description = $_POST['description'];
          // $imageURL = $targetFile;

          $name= $_POST['name'];
          $image= $targetFile;
          $author = $_POST['author'];
          $description = $_POST['description'];

          // Establish a connection to the database
 

          // Check the connection
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }

          // Insert data into the database
          $sql = "INSERT INTO `books` ( `image`, `name`, `author`, `description`) VALUES ( '$image' ,'$name', '$author', '$description')";

          if ($conn->query($sql) === TRUE) {
              echo "Record inserted successfully";
          } else {
              echo "Error inserting record: " . $conn->error;
          }

          // Close the database connection
          $conn->close();
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
  }
}
?>