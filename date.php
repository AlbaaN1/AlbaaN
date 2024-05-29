<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    echo "sot eshte ". date("d/m/y") . "<br>";
    echo "sot eshte ". date("y/m/d") . "<br>";
    echo "sot eshte ". date("y/m/d") . "<br>";
    echo "sot eshte ". date("l");
?>
<br>

&copy; 2010-<?php echo date("y");?>
<br>
<?php
 
 echo "ora eshte" . date("h:i:sa");
 echo "<br>";
 echo "ora eshte" . date("H:i:s");

 ?>
<br>
<?php
   
    echo date("Y-m-d H:i:s");
    ?>
    <br>
    <?php
    $data=mktime(10, 06, 50, 07, 27 ,2004);
    echo date("Y-m-d H:i:s", $date);
    ?>
    

</body>
</html>