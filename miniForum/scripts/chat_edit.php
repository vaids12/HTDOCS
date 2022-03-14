<?php 
// session_start();
// if(!isset($_SESSION['username'])){
//     header("Location: login.php");
// }

require_once("../db_conection.php");



if($_POST){
    try{

        $message=$_POST['message'];
        $id =$_POST['id'];
      
     

        $sql = "UPDATE chat SET message='$message' WHERE id='$id'";
        $query= $conn->prepare($sql);
       $result= $query->execute();
       if($result){
          
           header("Location: ../views/chat.php");
       
       }


    }catch(PDOException $e){
        echo "Update failed: ".$e->getMessage();
    }

}else{
header("Location: ../");

}

?>