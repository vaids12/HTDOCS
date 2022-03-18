<?php

if($_POST) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cars";
    $id = $_POST['id'];
    $maker = $_POST['maker'];
    $model = $_POST['model'];
    $release_year = $_POST['release_year'];
    $color = $_POST['color'];
    $car_no = $_POST['car_no'];
    $type = $_POST['type'];
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE cars SET maker='$maker', model='$model', release_year='$release_year', color='$color', 
    car_no='$car_no', type='$type' WHERE id=$id";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    
    header('location: index.php');
    } else {
        header('location: index.php');
    }