<?php
$server = "localhost";
$user = "root";
$pass ="";
$connect = mysqli_connect($server, $user,$pass);
if(!$connect)
    die("conncetion failed".mysqli_connect_error());
else
$query = "CREATE DATABASE shkolla1";
if (mysqli_query($connect, $query)){
    echo "Database create succwssfully whith name shkolla1";
}else {
    echo "Error creating database:" . mysqli_error($connect);
}
mysqli_close($connect);
?>