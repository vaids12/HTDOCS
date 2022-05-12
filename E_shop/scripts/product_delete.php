<?php

session_start();
if(!isset($_SESSION['nickname'])){
    header("Location: ../");
}

require_once("../db_connection.php");

if($_POST){ 

    try{
        $product_id=$_POST['id'];  

        // delete product from database:

        $sql="DELETE FROM products WHERE id='$product_id'";
        $query=$conn->prepare($sql);
        $query->execute();
        header("Location: ../views/main.php");
    
    }catch(PDOException $e){
        echo "Delete failed: ">$e->getMessage();
    }




}else{
    header("Location: ../");
}



?>