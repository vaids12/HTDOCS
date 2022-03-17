<?php 
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}

require_once("../db_conection.php");


if($_POST){
    try{
       
        $userid=$_POST['userid'];
        $message=$_POST['message'];

       

        $sql ="INSERT INTO chat ( userid,  message) VALUES ('$userid','$message') ";
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