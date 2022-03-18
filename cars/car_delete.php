<?php

if($_POST) {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cars";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $id = $_POST['id'];
  
  $sql = "DELETE FROM cars WHERE id=$id";

  
  $conn->exec($sql);
  header('location: index.php');
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

} else {
    header('location: index.php');
}