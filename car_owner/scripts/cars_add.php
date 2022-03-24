<?php
session_start();
if(!isset($_SESSION['email'])){
    header("Location: login.php");
}


require_once("../db_conection.php");

if($_SERVER['REQUEST_METHOD']=="POST"){
   
    
    $car_no=$_POST['car_no'];
    $brand=$_POST['brand'];
    $model=$_POST['model'];
    $color=$_POST['color'];
   $owner_id=$_SESSION['id'];

   

}else{
    header("Location: ../");
    die;
}



try{
    $sql ="INSERT INTO cars ( car_no, brand, model, color, owner_id ) VALUES ('$car_no','$brand','$model','$color', '$owner_id')";
    $query=$conn->prepare($sql);
    $query->execute(); 
    header("Location: ../views/cars.php");
}catch(PDOExeption $e){
    echo "Insert failed: ".$e->getMassage();
}
 ?>
