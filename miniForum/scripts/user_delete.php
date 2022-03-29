<?php

session_start();
if(!isset($_SESSION['nickname'])){
    header("Location: login.php");
}

require_once("../db_conection.php");

if($_GET){

    try{
        $userid=$_GET['userid'];

        $sql="DELETE FROM chat WHERE userid='$userid'";
        $query=$conn->prepare($sql);
        $result= $query->execute();

        $sql="DELETE FROM likes WHERE userid='$userid'";
        $query=$conn->prepare($sql);
        $result1= $query->execute();

        $sql="DELETE FROM users WHERE id='$userid'";
        $query=$conn->prepare($sql);
        $result2= $query->execute();

        if($result && $result1 && $result2){
            session_unset();
            session_destroy();
            header("Location: ../views/login.php");
        }
    }catch(PDOException $e){
        echo "Delete failed: ">$e->getMessage();
    }




}else{
    header("Location: ../");
}



?>