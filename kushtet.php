<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
        //Shembulli 1
			//Te tregohet nese 5 eshte me i vogel se 10 permes kushteve
			$x = 1;
			
			if($x < 10)
			{
				echo "$x eshte me i voges se 10";
			}
			else
			{
				echo "$x eshte me i madh se 10";
			}
		?>
        <br>
		<?php
            //Shembulli 2
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
			$a = 50; $b= 70;  $c =60;
			
			if($a > $b && $a > $c){
				echo "A eshte me e madhe";
			}
			else if($b > $a && $b > $c){
				echo "B eshte me e madhe";
			}
			else{
				echo "C eshte me e madhe";
			}

			?>
<br>
<?php

            $a = 100; $b =130; $c  =80;

            if($a>$b){
                if($a > $c){
                    echo "a shte me e madhe";

                }
                else{
                    echo "c eshte me madhe";
                }
            }
            else{
                if($b > $c){
                    echo "b eshte me madhe";
                }
                else{
                    echo "c eshte me madhe";
                }
            }
            ?>
    
</body>
</html>