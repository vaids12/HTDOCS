<?php

session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}

require_once("../db_conection.php");
var_dump($_GET);
if($_GET){

    try{
        $id=$_GET['id'];
        $sql="DELETE FROM chat WHERE id='$id'";
        $query=$conn->prepare($sql);
        $result= $query->execute();
        if($result){
           
            header("Location: ../views/chat.php");
        }
    }catch(PDOException $e){
        echo "Delete failed: ">$e->getMessage();
    }




}else{
    header("Location: ../");
}



?>