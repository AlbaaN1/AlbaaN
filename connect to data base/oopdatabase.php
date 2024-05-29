<?php
$server = "localhost";
$username = "root";
$password ="";

$conn = new mysqli($server,$username,$password);
if ($conn->connect_error) {
    die("connection failed:" .$conn->connect_error);
} 
else{
    echo "connected successfully";
    $sql = "CREATE DATABASE test123";
    if ($conn->query($sql) === TRUE) {
        echo "database created successfully";
    } else {
        echo "Error creting database:" . $conn->error;
    }
}
$conn-close();
?>