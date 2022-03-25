<?php 

include'../layout/header.php';

require_once("../db_conection.php");


if($_GET){
   
  
        $car_id=$_GET['id'];
       
        $sql="SELECT * FROM cars WHERE id=$car_id";
        $query = $conn->prepare($sql);
        $query->execute();
        $result=$query->fetch();          
   
}



?>

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-light mb-8">
                <div class="card-header">Car add</div>
                <div class="card-body">
                    <form action="..\scripts\cars_edit.php" method= "POST" enctype="multipart/form-data">
                   
                        <div class= "mb-2">
                                <input type="text" class="form-control" name="car_no"  value=<?php echo $result['car_no']?>>
                        </div>
                        <div class= "mb-2">
                                <input type="text" class="form-control"  name="brand" value=<?php echo $result['brand']?>>
                        </div>
                        
                        <div class= "mb-2">
                                <input type="text" class="form-control"  name="model" value=<?php echo $result['model']?>>
                        </div>
                        <div class= "mb-2">
                                <input type="text" class="form-control"  name="color" value=<?php echo $result['color']?>>
                        </div>
                       
                      <input type="hidden" name="id" value=<?php echo $result['id']?>>
                      <input type="hidden" name="owner_id" value=<?php echo $result['owner_id']?>>
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