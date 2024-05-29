<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        $x = 0;

        while($x <= 10)
        {
            echo $x."<br>";
            $x++;
            if($x==6)
            {
                continue;
            }
        }
        ?>
    <p>do while loops</p>
        <?php
    $y = 11;
    do{
        echo $y . '<br>';
        $y++;     
        if($y==6)
        {
            break;
        }
    }
    while($y <= 10)
    ?>

    <?php
    $txt = array(1,28,3,4,5,6,7,90);
    sort($txt);
    foreach($txt as $x)
    {
        echo " $x <br>";

    }
    ?>
    <br>
    <?php
    $text = array(2,3,4,22,11,6,3,5);
    sort($text);

    

    $txt = count($text);
    for($x=0; $x<$txt; $x++)
    {
        echo $text[$x].'<br>';
        
    }
    ?>

    <?php


for($x=1;$x<=5;$x++){
    for($y=1;$y<=5;$y++){
        echo $y. "";
    }
    echo "<br>";
}
?>
<br>


<?php


for($x=1;$x<=5;$x++){
    for($y=1;$y<=5;$y++){
        echo $x. "";
    }
    echo "<br>";
}
?>
<br>
<?php

$z = 1;
for($x=1;$x<=5;$x++){
    for($y=1;$y<=5;$y++){
        echo $z++. "";
    }
    $z = $x+1;
    echo "<br>";
}
?>
<br>
<?php


for($x=1;$x<=5;$x++){
    for($y=1;$y<=$x;$y++){
        echo"*";
    }
    echo "<br>";
}
?>
<br>
<?php


for($x=0;$x<=4;$x++){
    for($y=4;$y>=$x;$y--){
        echo"*";
    }
    echo "<br>";
}
?>

<?php


for($x=0;$x<=4;$x++){
    for($y=4;$y>=$x;$y--){
        echo"*";
    }
    echo "<br>";
}
?>

<?php


for($x=0;$x<=4;$x++){
    for($y=4;$y>=$x;$y--){
        echo"X 0";
    }
    echo "<br>";
}
?>
<br>
<?php
        for ($x=5;$x>=1;$x--){
            for($y=1;$y<=5;$y++){
               if($x == $y){
                echo "X"."";
               }
               else{
                echo "0".""; 
               }
            }

            echo "<br>";
        }
    ?>

<?php
        for ($x=1;$x>=5;$x++){
            for($y=1;$y<=5;$y++){
               if($x == $y){
                echo "X"."";
               }
               else{
                echo "0".""; 
               }
            }

            echo "<br>";
        }
    ?>



</body>
</html>