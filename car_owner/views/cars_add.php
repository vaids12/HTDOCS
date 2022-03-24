<?php 
session_start();
if(!isset($_SESSION['email'])){
    header("Location: login.php");
}
include'../layout/header1.php'
?>
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-light mb-8">
                <div class="card-header">Car add</div>
                <div class="card-body">
                    <form action="..\scripts\cars_add.php" method= "POST" enctype="multipart/form-data">
                   
                        <div class= "mb-2">
                                <input type="text" class="form-control" placeholder="car number" name="car_no">
                        </div>
                        <div class= "mb-2">
                                <input type="text" class="form-control" placeholder="brand" name="brand">
                        </div>
                        
                        <div class= "mb-2">
                                <input type="text" class="form-control" placeholder="model" name="model">
                        </div>
                        <div class= "mb-2">
                                <input type="text" class="form-control" placeholder="color" name="color">
                        </div>
                       
                      
                        <button type = "submit" class="btn btn-primary ">ADD</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>







<?php
include'../layout/footer.php';
?>