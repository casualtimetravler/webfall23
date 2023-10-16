<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="post.php">
      name: <input type="text" name="fname">
    <input type="submit">
    </form>
    <br>
    <hr>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
      Name: <input type="text" name="fname">
      <input type="submit">
    </form>
    <br>
    <hr>
    <a href="get.php?course=WebProgramming&week=6">Test </a>
    <?php


    ?>

    <?php
    // echo $_SERVER['PHP_SELF'];
    // echo $_SERVER['REQUEST_METHOD'];
    // echo $_SERVER['HTTP_HOST'];
    // echo $_SERVER['HTTP_USER_AGENT'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['fname'];
        if (empty($name)) {
        echo "Name is empty";
        } else {
        echo $name;
        }
    }

    ?>
</body>
</html>