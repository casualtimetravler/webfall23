<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "sql.php";

    $sql = "INSERT INTO students (name, email, gender, date_Of_Birth) VALUES ('ara', 'ara@gmail.com', 'male', '2023-10-22')";

    if (mysqli_query($con, $sql)) {
        echo "New record created successfully";
        } else {
        echo mysqli_error($con);
        }
        mysqli_close($con);
 //if (mysqli_query($con, $sql)) {
    //    echo "New record created successfully";
     //   } else {
     //   echo mysqli_error($con);
     //   }
     //   mysqli_close($con);
    
    $sql= "SELECT * from students limit 1, 2";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo " - Name: ".$row["name"]."<br>";
            }
     } 
    else {
           echo "No records";
    }
    $sql = "DELETE FROM students WHERE id=3";

    if (mysqli_query($con, $sql)) {
        echo "Record deleted successfully";
    }
    else {
        echo mysqli_error($con);
    }
 
    mysqli_close($con);

    //$sql = "UPDATE students SET name='lanya' WHERE id=2";

    //if (mysqli_query($con, $sql)) {
    // echo "Record updated successfully";
    //} 
    //else {
    //  echo mysqli_error($con);
    // }
    ?>
</body>
</html>
