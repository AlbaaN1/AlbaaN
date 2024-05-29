<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>$GLOBALS</P>
    <?php
    $a = 50;
    $b = 20;
    ?>
    <?php
    $x = 75;
    $y = 25;

    
    function vlera()
    {
        //$z + $y; // kjo metod nuk funksionon.
        //$GLOBALS['Z'] = 10 + 2;0
        $GLOBALS['z'] = $GLOBALS['a'] + $GLOBALS['B'];
    }
    vlera();
    echo $z;
    ?>
    <p>$_SERVER</p>
		<?php
			
			echo $_SERVER['PHP_SELF']; //tregon vendndodhjen e file qe jemi.
			echo "<br>";
 			echo $_SERVER['SERVER_NAME']; //tregon emrin e serverit ku gjendet file i yne.
			echo "<br>";
			echo $_SERVER['HTTP_HOST']; //tregon hostin ku ndodhet(ne rastin ton e tregon portin)
			echo "<br>";
			echo $_SERVER['HTTP_REFERER']; //tregon linkun se si te qasemi tek file qe gjendemi.
			echo "<br>";
			echo $_SERVER['SCRIPT_NAME']; //Tregon emrin e scriptes qe jemi duke punuar.
			echo "<br>";
			echo $_SERVER['SERVER_SOFTWARE'];//Tregon me qfare server jeni duke punuar.
			echo "<br>";
			echo $_SERVER['SERVER_PROTOCOL'];//Tregon qfare protokolli ka serveri.
			echo "<br>";
			echo $_SERVER['REQUEST_METHOD']; //Kthen metodën e kërkesës së përdorur për të hyrë në faqe(siç është POST)
			
		?>
        <p>$_REQUEST</p>
		
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			Username: <input type="text" name="Username">
			<input type="submit" value="Log in">
		</form>
		<?php
			
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				
				// Mbledh apo merr vleren e inputit.
				$x = $_REQUEST['Username'];
				if (empty($x)) {
					echo "<script>window.alert('Email is empty');</script>";
				} 
				else {
					echo $x;
				}
			}else{
				echo "<script>window.alert('Method is get');</script>";
			}
		?>

<p>$_REQUEST</p>
		
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			Email: <input type="email" name="Email">
			<input type="submit" value="Log in">
		</form>
		<?php
			
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				
				// Mbledh apo merr vleren e inputit.
				$y = $_POST['Email'];
				if (empty($y)) {
					echo "<script>window.alert('Email is empty');</script>";
				} 
				else {
					echo $y;
				}
			}else{
				echo "<script>window.alert('Method is get');</script>";
			}
		?>
</body>
</html>