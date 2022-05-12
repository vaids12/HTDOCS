<?php 
session_start();
if(!isset($_SESSION['nickname'])){
    header("Location: login.php");
}
include '../layout/header.php';
require_once("../db_connection.php");

try{
    $sql ="SELECT * FROM products";
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
                 Hello, <?php echo $_SESSION['nickname'] ?>
                </div>
                <div class= "card-body">
                    <h5 class="card-title">Products list</h5> 
                    <div>
                    <?php
                     if($_SESSION['role_id']=='1'){
                         
                         echo"  
                         <a class='btn btn-success'  href='product_create.php' style='margin:0 0 10px -1000px;'>Create Product</a>
                         ";                               
                     }
                   
                    ?> 
                                             
                        <table class="table table-striped">                             
                                 <tr>
                                    <th>ID</th>
                                    <th>Prekės kategorija</th>
                                    <th>Modelis</th>
                                    <th>Gamintojas</th>
                                    <th>Sandėlį</th> 
                                    <?php
                                 if($_SESSION['role_id']=='1'){
                                     echo"
                                    <th>Update</th>
                                    <th>Delete</th>";
                                }
                               
                                ?>                            
                                   
                                </tr>
                                  <?php
                                    foreach($result as $product){
                                        if($_SESSION['role_id']=='1'){
                                            echo"<tr><td>".$product['id']."</td><td>".$product['category']."</td><td>".$product['model']."</td><td>".$product['brand']."</td><td>".$product['warehouse']."</td><td><a class='btn btn-warning' href='product_edit.php?product_id=".$product['id']."'>Edit</a></td>
                                            <td>
                                      
                                            <form action='../scripts/product_delete.php' method='POST'>
                                            <input type='hidden' name='id' value=".$product['id'].">
                                               <input type='submit' class='btn btn-danger'  name='submit' value='Delete'>
                                           </form>
                                            </td><tr>";
                                        } else{  
                                                echo"<tr><td>".$product['id']."</td><td>".$product['category']."</td><td>".$product['model']."</td><td>".$product['brand']."</td><td>".$product['warehouse'];                              
                                        } 
                                    }                                                                        
                                    ?>
                               
                            
                                
                         </table>                                                                  
                    </div>
                            
                           
                 </div>     
                
            </div>
        </div>
    </div>
</div>




<?php
include '../layout/footer.php';
?>