<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";
$con = mysqli_connect($servername, $username, $password, $dbname);
if (!$con){
    die("connection faild: ".mysql_connect_error());
}else{
    echo "sucsess";
}
?>