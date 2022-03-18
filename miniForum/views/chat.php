
<?php 
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
include '../layout/header1.php';

require_once("../db_conection.php");

try{
  
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
                            $icon='<i class="fa-solid fa-thumbs-up" style="font-size:20px;"></i>';
                       
                             foreach($result as $post){

                                        $id=$post['id'];
                                        $sql ="SELECT * FROM likes WHERE chatid='$id'";                                                                      
                                        $query=$conn->prepare($sql);
                                        $query->execute(); 
                                        $likes=$query->fetchAll();
                           
                                     if($_SESSION['username']===$post['nickname']){
                                            echo "<div class='  p-3 mb-3 bg-light'> 
                                            <span  style='color:blue;'>".$post['nickname']."</span>
                                            <span style='font-size:9px;margin-left:10px;' >".$post['created']."</span>
                                            <p>".$post['message']."</p>
                                            <a class='btn btn-primary btn-sm'  href='../scripts/like.php?id=".$post['id']."'>LIKE&nbsp".$icon." &nbsp".count($likes)."</a>                                         
                                            <a class='btn btn-warning btn-sm' style='margin-left:1000px;' href='chat_edit.php?id=".$post['id']."'>Edit</a>                                          
                                            <a class='btn btn-danger btn-sm' style='margin-left:20px;' href='../views/chat_delete.php?id=".$post['id']."'>Delete</a>                                                                                                                      
                                            </div>";
                                     }else{
                                            echo "<div class='  p-3 mb-3 bg-light'>                                  
                                            <span  style='color:blue;'>".$post['nickname']."</span>
                                            <span style='font-size:9px;margin-left:10px;' >".$post['created']."</span>
                                            <p>".$post['message']."</p>
                                            <a class='btn btn-primary btn-sm'  href='../scripts/like.php?id=".$post['id']."'>LIKE&nbsp".$icon." &nbsp".count($likes)."</a>
                                                                    
                                            </div>"; 
                                         }                                                                        
                             } 
                                  ?>                                                                                     
                  <a href="chat_post.php?=" class='btn btn-success btn-lg  '>POST</a>                 
                </div>                          
        </div>
    </div>
</div>

<?php

include '../layout/footer.php';
?>