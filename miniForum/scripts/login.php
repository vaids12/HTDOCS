<?php

require_once("../db_conection.php");
 include'../layout/header.php';



if($_POST ){

    $nickname=$_POST['nickname'];
    $password=$_POST['password'];
}else{
    header("Location:../views/login.php");
  
}


try {
    $sql="SELECT * FROM users WHERE nickname='$nickname'";
    $query= $conn->prepare($sql);
    $query->execute();
    $result=$query->fetch();
}catch(PDOExceptionm $e){
    echo "Select failed: ".$e->getMessage();
}



if ($result){
    session_start();

  
    $dbPasswordHash=$result['password'];   
//tikriname slaptazodi

    if(password_verify($password, $dbPasswordHash)){
        $_SESSION['username']= $result['nickname'];
        $_SESSION['id']=$result['id'];

        echo "Login successful";
        header("Location:../views/users.php");
    }else{
        echo "Password is incorrect";
    }
}else{
    echo "Nickname does  not exist";
}







?>