<?php 
session_start();
if(!isset($_SESSION['nickname'])){
    header("Location: login.php");
}
require_once("../db_conection.php");

include'../layout/header1.php';

if($_GET){
    try{
        $userid=$_GET['userid'];
        $sql="SELECT * FROM users WHERE id='$userid'";
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
                    <form action="..\scripts\user_edit.php" method= "POST" enctype="multipart/form-data">
                    <div class= "form-group">
                                <input type="text" class="form-control"  name="nickname" value="<?php echo $result['nickname']?>">
                        </div>
                        <div class= "form-group">
                                <input type="text" class="form-control"  name="fname" value="<?php echo $result['first_name']?>">
                        </div>
                        <div class= "form-group">
                                <input type="text" class="form-control"  name="lname" value="<?php echo $result['last_name']?>">
                        </div>
                        <div class= "form-group">
                                <input type="email" class="form-control"  name="email" value="<?php echo $result['email']?>">
                        </div>
                      
                     <input type="hidden" name="userid" value="<?php echo $result['id']?>">

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