<?php 

require_once("../db_conection.php");

include'../layout/header.php';

if($_GET){
   
    try{
        $owner_id=$_GET['id'];
        $sql="SELECT * FROM owners WHERE id='$owner_id'";
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
                    <form action="..\scripts\owner_edit.php" method= "POST" enctype="multipart/form-data">
                    <div class= "form-group">
                                <input type="text" class="form-control"  name="first_name" value="<?php echo $result['first_name']?>">
                        </div>
                        <div class= "form-group">
                                <input type="text" class="form-control"  name="last_name" value="<?php echo $result['last_name']?>">
                        </div>
                        <div class= "form-group">
                                <input type="text" class="form-control"  name="email" value="<?php echo $result['email']?>">
                        </div>
                        <div class= "form-group">
                                <input type="text" class="form-control"  name="date_of_driving_license" value="<?php echo $result['date_of_driving_license']?>">
                        </div>
                      
                     <input type="hidden" name="id" value="<?php echo $result['id']?>">

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