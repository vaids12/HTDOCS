<?php 
session_start();
if(!isset($_SESSION['nickname'])){
    header("Location: login.php");
}
require_once("../db_connection.php");

include'../layout/header.php';




?>
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-light mb-8">
                <div class="card-header">Product create</div>
                <div class="card-body">
                    <form action="..\scripts\product_store.php" method= "POST" enctype="multipart/form-data">
                    <div class= "form-group">
                                <input type="text" class="form-control"  name="category" placeholder="category" >
                        </div>
                        <div class= "form-group">
                                <input type="text" class="form-control"  name="model" placeholder="model">
                        </div>
                        <div class= "form-group">
                                <input type="text" class="form-control"  name="brand" placeholder="brand">
                        </div>
                        <div class= "form-group">
                                <input type="text" class="form-control"  name="warehouse" placeholder="warehouse">
                        </div>                

                        <button type = "submit" class="btn btn-primary">Create</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>







<?php
include'../layout/footer.php';
?>