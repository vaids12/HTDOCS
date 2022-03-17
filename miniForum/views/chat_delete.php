<?php 
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
require_once("../db_conection.php");

include'../layout/header1.php';

if($_GET){


        $id=$_GET['id'];
      
           
}  else{
    header("Location: chat.php");
}      
   

?>
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-light mb-8">
                <div class="card-header" style="text-align:center;font-size:25px; ">Do you really want to delete your post?</div>       
             </div>
             <div class= "card-body ">
             <a class='btn btn-warning btn-lg' style='margin-left:350px;' href='chat.php'>NO</a>
             <a class='btn btn-danger btn-lg' style='margin-left:20px;' href='../scripts/chat_delete.php?id=<?php echo $id ?>'>YES</a>  
             </div>
         </div>
    </div>
</div>
       


<?php

include'../layout/footer.php';
?>