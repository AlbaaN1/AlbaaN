<?php
$servername = "localhost";
$username = "root";
$password = "";

try{
    $conn  = new  PDO("mysql:host=$servername;dbname=shkolla1",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "connceted successfully";
}
catch(PDOExeption $e)  {
    echo "connection failed:" . $e->getMessage();
}
?>