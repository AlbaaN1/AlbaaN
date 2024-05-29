<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .empty {color: red;}
    </style>
<body>
    <?php
    $empUsername = "";
    $empPassword = "";
    $empEmail = "";
    if($_SERVER['REQUEST_METHOD']== 'POST')
    {
        $username = $_POST['Username'];
        $password = $_POST['Password'];
        $email = $_POST['Email'];
        if(empty($username)|| empty($password)|| empty($email))
        {
            $empUsername ="username is required";
            $empPassword ="password is required";
            $empEmail ="Emeil is required";
            echo '<script>alert("Required!")</script>';
        }
        else
        {
            echo '<script>alert("Register succesfull!")</script>';

        }
    }
    ?>
<p><span class="empty">* Required</span></p>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
			Email: <input type="email" name="Email">
			<span class="empty">*<?php echo $empEmail;?></span><br><br>
			Username: <input type="text" name="Username">
			<span class="empty">*<?php echo $empUsername;?></span><br><br>
			Password: <input type="password" name="Password">
			<span class="empty">*<?php echo $empPassword;?></span><br><br>
			
			<input type="submit" value="Sign Up">
			<input type="reset" value="Cancel">
		</form>
    
</body>
</html>