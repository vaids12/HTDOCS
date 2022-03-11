<?php 
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
require_once("../db_conection.php");

include'../layout/header1.php';


    try{  
        $nickname= $_SESSION['username'];
       
        // $sql="SELECT id FROM users WHERE nickname='echo $_SESSION['username']'";
        $sql="SELECT id FROM users WHERE nickname='$nickname'";
        $query = $conn->prepare($sql);
        $query->execute();
        $result=$query->fetch();       
    }catch(PDOException $e){
        echo "Selected failed:".$e->getMessage();
    }



?>

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-light mb-8">
                <div class="card-header">Message</div>
                <div class="card-body">
                    <form action="..\scripts\chat_post.php" method= "POST" enctype="multipart/form-data">
                    <div class= "mb-2 ">
                        <textarea name="message" id="" cols="30" rows="10" ></textarea>
                                <!-- <input type="text" class="form-control" placeholder="message" name="message"> -->
                        </div>
                        <input type="hidden" name="userid" value="<?php echo $result['id'];?>">
                      
                        <button type = "submit" class="btn btn-primary ">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>








<?php
include'../layout/footer.php';
?>