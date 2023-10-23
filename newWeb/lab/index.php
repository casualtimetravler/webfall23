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
    ?>
</body>
</html>