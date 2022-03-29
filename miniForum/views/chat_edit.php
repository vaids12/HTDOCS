<?php 
session_start();
if(!isset($_SESSION['nickname'])){
    header("Location: login.php");
}
require_once("../db_conection.php");

include'../layout/header1.php';

if($_GET){
    try{
        $id=$_GET['id'];
        $sql="SELECT * FROM chat WHERE id='$id'";
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
                    <form action="..\scripts\chat_edit.php" method= "POST" enctype="multipart/form-data">
                        <div class= "form-group">                              
                            <textarea name="message" class="form-control" cols="30" rows="10"  value=""><?php echo $result['message']?></textarea>                               
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