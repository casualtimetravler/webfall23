<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'library';
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die('Failed '.mysqli_connect_error());
        
    } else {
        
    }
?>