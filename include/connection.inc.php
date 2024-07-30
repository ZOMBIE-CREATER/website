<?php

$dsn = "mysql:host=localhost;dbname=website";
$dbusername = "root";
$dbpassword = "";

try{
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e){
    echo "connection failde " . $se->getMessage();
}

/*
$servername ="localhost";
$username ="root";
$password = "";

$connect = new mysqli($servername ,$username , $password);

// CHECK CONNECTION 

if($connect-> connect_error){
    die ("DATABASE CONNECTION FAILED :". $connect->connect_error);
}


*/
  
 
?>