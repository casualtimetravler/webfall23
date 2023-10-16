
    <?php
    $name =$_POST['fname'];
    if(empty($name)){
        echo "name is empty";
    }
    else {
        echo "name is: ", $name;
    }
    ?>
