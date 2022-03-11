<?php 
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
include '../layout/header1.php';

require_once("../db_conection.php");

try{
    // $sql = "SELECT * FROM mini_forum.chat";
    $sql ="SELECT c.message, u.nickname, c.created, c.updated FROM chat AS c JOIN users AS u ON  c.userid=u.id";
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
                    <h5 class="card-title">CHAT</h5>
                     
                        <table class="table table-striped">
                            <tr>
                               
                                <th style="width:60%; ">Message</th>
                                <th>Nickname</th>
                                <th>Created</th>
                                <th>Updated</th>
                               
                            </tr>
                            <?php
                            foreach($result as $user){
                                echo"<tr><td style='border:1px solid grey;''  >".$user['message']."</td><td>".$user['nickname']."</td><td>".$user['created']."</td><td>".$user['updated']."</td><tr>";
                            }
                             
                            ?>
                           
                        </table>  
                       
                  <a href="chat_post.php?=" class='btn btn-warning'>POST</a>
                 
                </div>
                
            </div>
        </div>
    </div>
</div>


<?php
include '../layout/footer.php';
?>