<?php 
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
include '../layout/header1.php';

require_once("../db_conection.php");

if($_GET){

    try{  
        
       $chatid=$_GET['id'];
       $nickname=$_SESSION['username'];
      

       $sql ="SELECT * FROM likes
       WHERE nickname='$nickname' AND chatid='$chatid'";
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
       
        if($result1['userid']===$_SESSION['id']){
            header("Location: ../views/chat.php");
        }else{
             $sql ="INSERT INTO likes ( chatid,  nickname) VALUES ('$chatid','$nickname')";
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