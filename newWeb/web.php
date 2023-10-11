<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   $cars=array("kia","BMW","Tyota");
    $arrlength=count($cars);

    for($x=0; $x<$arrlength; $x++){
        echo $cars[$x];
        echo "<br>";
    }
    echo "<br>"; 
    $age=array("lanya"=>"21","viya"=>"20","lewan"=>"20");

    foreach($age as $x=>$x_value){
        echo "key=".$x.",value=".$x_value;
        echo "<br>";   
    }
    echo "<br>"; 
    $car=array(array("kia",22,18),
               array("BMW",15,13),
               array("tyota",5,10),
               array("nissan",17,11));

               echo $car[0][0].":in stock:".$car[0][1].":sold:".$car[0][2]."<br>";
               echo $car[1][0].":in stock:".$car[1][1].":sold:".$car[1][2]."<br>";
               echo $car[2][0].":in stock:".$car[2][1].":sold:".$car[2][2]."<br>";
               echo $car[3][0].":in stock:".$car[3][1].":sold:".$car[3][2]."<br>";
               echo "<br>";

               for($row=0;$row<4;$row++){
                echo "<p><b>row number $row</b></p>";
                echo "<ul>";
                for($col=0; $col<3; $col++){
                    echo "<li>".$car[$row][$col]."</li>";
                }
                echo"</ul>";
               }
               echo "<br>";
               ksort($cars);

               $clength=count($cars);
               for($x=0; $x<$clength; $x++){
                echo $cars[$x];
                echo "<br>";
               }


    ?>
</body>
</html>