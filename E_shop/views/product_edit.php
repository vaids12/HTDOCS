<?php 
session_start();
if(!isset($_SESSION['nickname'])){
    header("Location: login.php");
}
require_once("../db_connection.php");

include'../layout/header.php';

if($_GET){
    try{
        $product_id=$_GET['product_id'];
        $sql="SELECT * FROM products WHERE id='$product_id'";
        $query = $conn->prepare($sql);
        $query->execute();
        $result=$query->fetch();       
    }catch(PDOException $e){
        echo "Selected failed:".$e->getMessage();
    }
}



?>
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-light mb-8">
                <div class="card-header">User edit</div>
                <div class="card-body">
                    <form action="..\scripts\product_edit.php" method= "POST" enctype="multipart/form-data">
                    <div class= "form-group">
                                <input type="text" class="form-control"  name="category" value="<?php echo $result['category']?>">
                        </div>
                        <div class= "form-group">
                                <input type="text" class="form-control"  name="model" value="<?php echo $result['model']?>">
                        </div>
                        <div class= "form-group">
                                <input type="text" class="form-control"  name="brand" value="<?php echo $result['brand']?>">
                        </div>
                        <div class= "form-group">
                                <input type="text" class="form-control"  name="warehouse" value="<?php echo $result['warehouse']?>">
                        </div>
                        
                      
                     <input type="hidden" name="product_id" value="<?php echo $result['id']?>">

                        <button type = "submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>







<?php
include'../layout/footer.php';
?>