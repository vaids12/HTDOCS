<?php 
session_start();
if(!isset($_SESSION['email'])){
    header("Location: login.php");
}
include '../layout/header1.php';
require_once("../db_conection.php");

try{
    $sql ="SELECT * FROM owners";
 $query=$conn->prepare($sql);
 $query->execute(); 
$result=$query->fetchAll();
 }catch(PDOExeption $e){
     echo"Insert failed: ".$e->getMassage();
 }



?>

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card text-center">
                <div class="card-header">
                    <h1>Cars owners</h1> 
                </div>
                <div class= "card-body">
                   
                     
                        <table class="table table-striped">
                            <tr>
                               
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Date of driving license</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th>Action</th>
                            </tr>
                            <?php
                            foreach($result as $owner){
                                // if($_SESSION['id']===$owner['id']){
                                echo"<tr><td><a  href='cars.php?id=".$owner['id']."'>".$owner['first_name']."</a></td><td>".$owner['last_name']."</td><td>".$owner['email']."</td><td>".$owner['date_of_driving_license']."</td><td>".$owner['created']."</td><td>".$owner['updated']."</td><td><a class='btn btn-warning' href='owners_edit.php?id=".$owner['id']."'>Edit</a>&nbsp&nbsp<a class='btn btn-danger' href='../scripts/owners_delete.php?id=".$owner['id']."'>Delete</a></td><tr>";
                                // }else{
                                //     echo"<tr><td><a  href='cars.php?id=".$owner['id']."'>".$owner['first_name']."</a></td><td>".$owner['last_name']."</td><td>".$owner['email']."</td><td>".$owner['date_of_driving_license']."</td><td>".$owner['created']."</td><td>".$owner['updated']."</td><tr>"; 
                                // }
                            }
                            
                            ?>
                        </table>                                                                  
                </div>
                
            </div>
        </div>
    </div>
</div>




<?php
include '../layout/footer.php';
?>