<?php
include('connect.php');

$errors = array();

if (isset ($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = htmlspecialchars($username);

    if (empty($username) || empty($password)){
        array_push($errors, "Both username and password and required for login");
    }
    if (count($errors)==0){
        $query = "SELECT * FROM users WHERE username=:username";
        $checkQuery = $conn->prepare($query);
        $checkQuery->bindparam(':username', $username);
        $checkQuery->execute();
        $result = $checkQuery->fetch();
        if($result && password_verify($password, $result['password'])){
            echo "<script>alert('Login successfull')</script";
            echo "<script>window.open('admin.php','_self')</script>";

        }else{
            array_push($errors, "Invalid username or password");
        }
    }
}
?>

This website uses cookies to ensure you get the best experience on our website. Learn more
Got it!


Remove Ads
    SP MO  
<!DOCTYPE html>
<html>

<head>
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="header">
        <h2>Login</h2>
    </div>

    <form method="post">
        <?php  if (count($errors) > 0) { ?>
        <div class="error">
            <?php foreach ($errors as $error) { ?>
            <p><?php echo $error ?></p>
            <?php } ?>
        </div>
        <?php  } ?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="login">Login</button>
        </div>
        <p>
            Not yet a member? <a href="index.php">Sign up</a>
        </p>
    </form>
</body>

</html>
 Editable Link  Share Link
Words: 81 | Chars: 975 | Views: 51
Last Updated: 15 Seconds ago
Privacy  Terms  Contact Us  About Us
