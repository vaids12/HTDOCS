<?php
//12 uzdavinys
$confirmPass='slaptas';

if($_SERVER['REQUEST_METHOD']=="POST" &&  !empty($_POST['password'])){
    $password=$_POST['password'];
    if($password===$confirmPass){
        header("location: ../01.28practice/slaptas.php");
    }else{
        header("location: ../01.28practice/index10.php");
    }
}


?>