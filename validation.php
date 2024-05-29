<html>

<head>
    <style>
    .empty {
        color: red;
    }
    </style>
</head>

<body>
    <?php
			$empUsername = "";	//Duhet te krijohen qe te mund te ju qasemi permes formes.
			$empPassword = "";
			$empEmail = "";
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$username = secure ($_POST)['Username'];
			$password = secure  ($_POST)['Password'];
			$email = secure ($_POST)['Email'];
			
			if(empty($username))
			{
				$empUsername ="Username is required";
			}

            else if (!preg_match("/^[a-zA-ZeE0-9]*$/",$username))
            {
                $empUsername = "only letters and white space allowed";
            }
			if(empty($password)){
				$empPassword ="Password is required";
			}
			if(empty($email)){
				$empEmail ="Email is required";
			}
			if(empty($username) and empty($password) and empty($email))
			{
				$empUsername ="Username is required";
				$empPassword ="Password is required";
				$empEmail ="Email is required";
				// echo '<script>alert("Required!")</script>';
			}
			else if($username !="" and $password != "" and $email != "")
			{
				echo '<script>alert("Register Succesfully!")</script>';
			}
		}
        function secure($x) {
            $x = htmlspecialchars($x);
            $x = trian($x);
            $x = stripcslashes($x);
            return $x;
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