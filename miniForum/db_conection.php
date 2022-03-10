<?php

$servername="localhost";
$username="root";
$password="";
$database="mini_forum";

try {
    $conn= new PDO("mysql:host=$servername;dbname=$database",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // echo"Connected to DB";
}catch(PDOException $e){
    echo"Connection failed: ".$e->getMassage();
}



?>