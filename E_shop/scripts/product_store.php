<?php 
session_start();
if(!isset($_SESSION['nickname'])){
    header("Location: ../");
}

require_once("../db_connection.php");

if($_POST){
    try{ 
       
        $category=$_POST['category'];      
        $model=$_POST['model'];
        $brand=$_POST['brand'];
        $warehouse=$_POST['warehouse'];

        // create a new product into database:

        $sql = "INSERT INTO products ( category,  model, brand, warehouse ) 
        VLUES ('$category', '$model', '$brand', '$warehouse')";
        $query= $conn->prepare($sql);
        $result= $query->execute();
        if($result){
            header("Location: ../views/main.php");
        }


    }catch(PDOException $e){
        echo "Update failed: ".$e->getMessage();
    }

}else{
header("Location: ../");
}
  