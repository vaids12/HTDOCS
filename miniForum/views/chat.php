<?php 
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
include '../layout/header1.php';

require_once("../db_conection.php");

try{
    // $sql = "SELECT * FROM mini_forum.chat";
    // $sql ="SELECT c.message, u.nickname, c.created, c.updated, u.id
      $sql ="SELECT c.message, u.nickname, c.created, c.updated, c.id, c.userid
    FROM users AS u
    JOIN  chat AS c ON  c.userid=u.id";
 $query=$conn->prepare($sql);
 $query->execute(); 
$result=$query->fetchAll();
 }catch(PDOExeption $e){
     echo"Insert failed: ".$e->getMassage();
 }


?>

<div class="container py-4 ">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
                <div class="card-header" style="text-align:center;">
                 Hello, <?php echo $_SESSION['username'] ?>
                </div>
                <div class= "card-body">
                    <h5 class="card-title " style="text-align:center;"  >CHAT</h5>                                                                                                              
                             <?php
                             foreach($result as $user){
                                  echo "<div class='  p-3 mb-3 bg-light'>                                  
                                            <span  style='color:blue;'>".$user['nickname']."</span><span style='font-size:9px;margin-left:10px;' >".$user['created']."</span><p>".$user['message']."</p><a class='btn btn-warning' href='chat_edit.php?userid=".$user['userid']."'>Edit</a><a class='btn btn-danger' href='../scripts/chat_delete.php?id=".$user['id']."'>Delete</a>
                                        </div>";  
                                 } 
                               ?>                                                                                         
                  <a href="chat_post.php?=" class='btn btn-warning'>POST</a>                 
                </div>                          
        </div>
    </div>
</div>

<?php

include '../layout/footer.php';
?>