<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="login1.php">
    username: <input type="text" name="username"><br><br>
    password: <input type="password" name="password"><br><br>
    <input type="submit" value="log in">
    <input type="reset" value="cancel">
</form>

<?php
if($_SERVER['REQUEST_METHOD']== 'POST')
{
    $a = $_POST['username'];
    $b = $_POST["password"];
    if(empty($a) || empty($b))
    {
        echo '<script>alert("username or password is empty")</script>';

    }
    else if($a === 'arianit' && $b === '044494134')
    {
        echo "<script>alert('welcome!')</script>";     
}
else
{
echo '<script>alert("username nad password is incorrect!")</script>';
}    
}
else
{
    echo '<script>alert("metode nuk eshte POST!")</spript>';
}
?>
</body>
</html>