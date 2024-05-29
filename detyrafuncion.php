<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
function f($c)
{
    $f=(9/5)*$c+32;

    return $f;
}

    echo f(50)



 ?>   
 <br>
<?php
function c($c)
{
    $c=($c-32)*5/9;

    return $c;
}

    echo c(50);
?>
<br>
<?php
        function m($km)
        {
            $m=$km*1000;

            return $m;
        }
        echo m(32)
    ?>
    <br>
    <?php
        function km($m)
        {
            $km=$m/1000;

            return $km;
        }
        echo km(3200)
    ?>
<br>


<?php
function p($p1,$p2,$p3,$p4,$p5)
{
   $p=($p1+$p2+$p3+$p4+$p5)/5;
    return $p;
}

    echo p(32,50,43,77,98);
?>

</body>
</html>