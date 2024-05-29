<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>




<?php
		// Tipi i te dhenave String.
			$x = "Shkolla Digjitale";
			$y = 'Prizren';
            
            echo $x . $y;
			echo "<br>";
			var_dump($x);
		?>
		<h3>Integer</h3>
		<?php
		 // Tipi i te dhenave Integer.
		 //Me Integer mund te shenojme te dhena number, mirepo vetem numra te plot.
		 //Rangu i numrave qe i perfshin integer eshte nga -2^31 deri ne 2^31.
			
            $x = 2323;
			
            echo $x; 
            echo "<br>";
			var_dump($x); //Perveq qe na tregon vleren, na tregon edhe qe eshte integer, pra tipin e te dhenave.
		?>
		
		<br>

        <?php

        $x=123;
        $y='abc';


        echo is_int($x);
        echo "<br>";
        echo is_int($y);
        var_dump(is_int($y));

    ?>
    

<h3>String</h3>
<?php
// Tipi i te dhenave String.
    $x = "Shkolla Digjitale";
    $y = 'Prizren';
    
    echo $x . $y;
    echo "<br>";
    var_dump($x);
?>
<h3>Integer</h3>
<?php
 // Tipi i te dhenave Integer.
 //Me Integer mund te shenojme te dhena number, mirepo vetem numra te plot.
 //Rangu i numrave qe i perfshin integer eshte nga -2^31 deri ne 2^31.
    
    $x = 2323;
    
    echo $x; 
    echo "<br>";
    var_dump($x); //Perveq qe na tregon vleren, na tregon edhe qe eshte integer, pra tipin e te dhenave.
?>

<br>
<?php  
    
    $x=123;  
    $y='abc';
    
    echo is_int($x); //Nese eshte 'Integer' kthen si rezultat 1. 
    echo "<br>";
    echo is_int($y); 
    var_dump(is_int($y));			

?>  
<br>
<?php   
    // Numrat Decimal   baze 10
    $deci1 = 40;    
    $deci2 = 500;    
        
    // Numrat Oktal     baze 8       
        $octal1 = 07;    
        
    // Numrat HeksaDecimal   baze 16
        $heksa = 0x10;    
        $add = $deci1 + $deci2;   
        echo $add."<br>";   
        echo $octal1."<br>";
        echo $heksa."<br>";
    ?>  

<h3>Float</h3>
    <?php
    //Me Float mund te shenojme prap te dhena number, mirepo mund te shenojme te dhena edhe me presje dhjetore.
    
        $x = 10.365;
        echo $x;
        echo "<br>";
        var_dump($x); //Per te na treguar tipin e te dhenave
    ?>


<h3>Boolean</h3>
    <?php
    //Boolean na nxjerr vetem dy vlera 'true' ose 'false'.
        
        $x = true;
        $y = false;
        
        echo $x.'<br>'; //Kur eshte true na kthen si rezultat 1
        echo "asd<br>";
        echo $y; //Ndersa kur eshte false nuk na kthen si rezultat asgje.
        var_dump($y);

        ?>
        <h3>array</h3>
        <?php


        $arr = array(10,20,30);
        $text = array ('shkolla','digjitale','prizren');
        echo $arr;
        print_r($arr);
        echo '<br>';
        echo '<br>';
        var_dump($arr);
        echo '<br>';
        var_dump($text);
        ?>`


    



    
</body>
</html> 