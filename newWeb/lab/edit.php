<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    
    <form action="<?php echo $'?id='.$id;?>" method="post">
    name: <input type="text" name="name" value="<?php echo $name_selsect?>">
    email: <input type="email" name="email" value="<?php echo $email_select?>">
    gender: <select type="gender" class="form-central">
        <option VALUE="male"
        <?php if($gender_select==male){?>
            selected="selected"
        <?php }?>
        >male</option>
        <option VALUE="female">female</option>
    </select>
    <input type="submit" value="save" class="btn btn-primary form-central">
    </form>
</div>
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $gender=$_POST['gender'];

        $sql ="UPDATE students SET name='$name', email='$email', gender='$gender' WHERE id=$id";
        if(mysqli_query($con, $sql)){
            echo "data Added";
            header("location view.php");
        }
        else{
            echo "error ".$sql."<br>".mysqli_error($con);
        }
    }
