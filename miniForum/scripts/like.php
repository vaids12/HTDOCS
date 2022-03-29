<?php 
session_start();
if(!isset($_SESSION['nickname'])){
    header("Location: login.php");
}
include '../layout/header1.php';

require_once("../db_conection.php");

if($_GET){

    try{  
        
       $chatid=$_GET['id'];
       $userid=  $_SESSION['user_id'];
      
       $sql ="SELECT * FROM likes
       WHERE userid='$userid' AND chatid='$chatid'";
        $query = $conn->prepare($sql);
        $query->execute();
        $result=$query->fetch(); 
     
           
      
        if( $result){
            $id=$result['id'];         
            $sql="DELETE FROM likes WHERE id='$id'";
            $query=$conn->prepare($sql);
           $query->execute();
            header("Location: ../views/chat.php");
            die;
        }

        $sql="SELECT userid
        FROM  chat    
        WHERE id='$chatid'";
        $query = $conn->prepare($sql);
        $query->execute();
        $result1=$query->fetch(); 
       
        if($result1['userid']===$userid){
            header("Location: ../views/chat.php");
        }else{
             $sql ="INSERT INTO likes ( chatid,  userid) VALUES ('$chatid','$userid')";
                    $query= $conn->prepare($sql);
                     $result2= $query->execute(); 
       
                        if($result2){
                        header("Location: ../views/chat.php");
                         }
        }
        
        
        
    }catch(PDOException $e){
        echo "Selected failed:".$e->getMessage();
    }

  
}else{
    header("Location: ../");

}




?>