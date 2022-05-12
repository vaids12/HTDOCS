<?php

session_start();
if(!isset($_SESSION['nickname'])){
    header("Location: login.php");
}

require_once("../db_connection.php");

if($_POST){

  

    try{
        $userid=$_POST['id'];

   

        $sql="DELETE FROM users WHERE id='$userid'";
        $query=$conn->prepare($sql);
        $query->execute();

     
            header("Location: ../views/user.php");
    
    }catch(PDOException $e){
        echo "Delete failed: ">$e->getMessage();
    }




}else{
    header("Location: ../");
}



?>