<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$arr = Array("id1"=>001, "id2"=>002, "id3"=>003);
			krsort($arr);
			foreach($arr as $x => $x_value)
			{
				echo $x.$x_value;
				echo "<br>";
			}
            ?>

<?php
            
			$y = 16;
			
			if($y <= 10)
			{
				echo "$y eshte me i vogel se 10";
			}
			else if($y >= 20)
			{
				echo "$y eshte me i madh ose i barabart me 20";
			}
			else
			{
				echo "$y eshte ne mes te 10 dhe 20";
			}
		?>
    <br>
        <?php
        $y = 60;

        if ($y >= 50 && $y <= 59)
        {
            echo " nota eshte 6";
        }
        else if($y >= 60&& $y <= 69)
        {
            echo "nota eshte 7";
        }
        else if($y >= 70&& $y <= 79)
        {
            echo "nota eshte 8";
        }
        else if($y >= 80&& $y <= 89)
        {
            echo "nota eshte 9";
        }
        else if($y >= 90&& $y <= 100)
        {
            echo "nota eshte 10";
        }
        else{
           echo "nota eshte 5";
         }
        ?>
<br>
<?php
        $number=56;

        if($number % 2){
            echo "$number eshte numer tek";
        }
        else{
            echo "$number eshte numer qift";
        }
    ?>

    <?php
    
   
    b
    
    
</body>
</html> 