<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div>
    <select>
    <form action="<?php echo $_SERVER['php_self'];?>" method="post">
    name: <input type="text" name="name" class="form-central">
    email: <input type="email" name="email" class="form-central">
    gender: <input type="gender" name="gender" class="form-central">
         <option VALUE="male">male</option>
         <option VALUE="female">female</option>
    </select>
     <input type="submit" value="save" class="btn btn-primary form-central">
    </form>
</div>
</body>
</html>
<?php
    if($_SERVER["request_method"]=="post"){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $gender=$_POST['gender'];

        $sql="INSERT INTO student (name, email, gender)VALUES ('$name', '$email', '$gender')"
        if(mysqli_query($con, $sql)){
            echo "data Added";
            header("location view.php");
        }
        else{
            echo "error ".$sql."<br>".mysqli_error($con);
        }
    }
?>