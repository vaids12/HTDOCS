<?php 
session_start();
if(!isset($_SESSION['nickname'])){
    header("Location: login.php");
}

require_once("../db_connection.php");

if($_POST){
    try{ 
        $product_id =$_POST['product_id'];
        $category=$_POST['category'];      
        $model=$_POST['model'];
        $brand=$_POST['brand'];
        $warehouse=$_POST['warehouse'];

        $sql = "UPDATE products SET category='$category', model='$model', brand='$brand', warehouse='$warehouse' WHERE id='$product_id'";
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

?>



