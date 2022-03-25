<?php
include'../layout/header.php';

require_once("../db_conection.php");



if($_GET){
     $car_id=$_GET['id'];
    $sql="SELECT owner_id FROM cars WHERE id=$car_id";
    $query = $conn->prepare($sql);
    $query->execute();
    $owner=$query->fetch();  
    $owner_id=$owner['owner_id'];
 


    try{
       
        $sql="DELETE FROM cars WHERE id='$car_id'";
        $query=$conn->prepare($sql);
        $result= $query->execute();
        if($result){
            header("Location: ../views/cars.php?id= $owner_id");
        }
    }catch(PDOException $e){
        echo "Delete failed: ">$e->getMessage();
    }




}else{

    header("Location: ../");
}



?>