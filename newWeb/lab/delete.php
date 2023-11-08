<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    
    <form action="<?php echo $_SERVER['PHP_SELF'].'?id='.$id;?>" method="post">
    are you sure you want to delete this record?
    <input type="submit" value="save" class="btn btn-primary form-central">
    <a href="view.php" class="btn btn-primary form-central">cancel</a>
    </form>
</div>
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"]=="POST"){

        $sql ="DELETE FROM students WHERE id=$id";
        if(mysqli_query($con, $sql)){
            echo "data Added";
            header("location view.php");
        }
        else{
            echo "error ".$sql."<br>".mysqli_error($con);
        }
    }