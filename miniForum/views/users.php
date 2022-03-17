<?php 
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
include '../layout/header1.php';
require_once("../db_conection.php");

try{
    $sql ="SELECT * FROM users";
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
                 Hello, <?php echo $_SESSION['username'] ?>
                </div>
                <div class= "card-body">
                    <h5 class="card-title">Users list</h5>
                     
                        <table class="table table-striped">
                            <tr>
                                <th>Nickname</th>
                                <th>Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th>Action</th>
                            </tr>
                            <?php
                            foreach($result as $user){
                                if($_SESSION['username']===$user['nickname']){
                                echo"<tr><td>".$user['nickname']."</td><td>".$user['first_name']."</td><td>".$user['last_name']."</td><td>".$user['email']."</td><td>".$user['created']."</td><td>".$user['updated']."</td><td><a class='btn btn-warning' href='user_edit.php?userid=".$user['id']."'>Edit</a>&nbsp&nbsp<a class='btn btn-danger' href='../scripts/user_delete.php?userid=".$user['id']."'>Delete</a></td><tr>";
                                }else{
                                    echo"<tr><td>".$user['nickname']."</td><td>".$user['first_name']."</td><td>".$user['last_name']."</td><td>".$user['email']."</td><td>".$user['created']."</td><td>".$user['updated']."</td><tr>"; 
                                }
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