<?php

var_dump($_POST);

if ($_POST) {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cars";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $maker = $_POST['maker'];
  $model = $_POST['model'];
  $release_year = $_POST['release_year'];
  $color = $_POST['color'];
  $car_no = $_POST['car_no'];
  $type = $_POST['type'];
  $sql = "INSERT INTO cars (maker, model, release_year, color, car_no, type)
  VALUES ('$maker', '$model', '$release_year', '$color', '$car_no', '$type')";
  // use exec() because no results are returned
  $conn->exec($sql);
  header('location: index.php');
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
} else {
    header('location: index.php');
}