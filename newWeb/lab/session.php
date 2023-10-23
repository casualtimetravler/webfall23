  <?php session_start();
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  $_SESSION["favcolour"] = "green";
  $_SESSION["favanimal"] = "cat";
  echo "Session variables are set.";
?>
  <?php 
  echo "favorot colour is " . $_SESSION["favcolour"]. "<br>";
  echo "favoret animal is ". $_SESSION["favanimal"]. ".";
  ?>
  </body>
</html>