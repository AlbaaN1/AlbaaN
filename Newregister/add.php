<?php

include_once('connect.php');

$errors = array();

if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $email = $_POST['email'];


    if (empty($username)) {
        array_push($errors, "username is required");

    }elseif(!preg_match("/^[a-zA-Zë ]*$/", $username)){
        array_push($errors , "Only letters and white space are allowed");
    }

    if(empty($email)){
        array_push($errors, "emailis required");

    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        array_push($errors, "invalid email format");
    }

    if (empty($password)){
        array_push($errors, "password is required");
    }
    if($password !=$confirmPassword){
        array_push(errors, "passwordnuk eshte i njet");
    }

    $query = "SELECT * FROM users WHERE username=:username OR email=:email";
    $checkQuery = $conn->prepare($query);
    $checkQuery->bindparam(':username', $username);
    $checkQuery->bindparam(':email', $email);
    $checkQuery->execute();
    $result = $checkQuery->fetchAll();

    foreach($result as $row){
        if ($row['username']==$username){
            array_push($errors, "username alredy exist");
        }
    }

    if (count($errors)== 0){
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (username, password , email)VALUES(:username, :password, :email)";
        $sqlQuery = $conn->prepare($sql);

        $sqlQuery->bindparam(':username', $username);
        $sqlQuery->bindparam(':password', $hashedPassword);
        $sqlQuery->bindparam(':email', $email);


        $sqlQuery->execute();
         
        echo "<script>alert('Register succesfully!')</script>";

    }

}
?>