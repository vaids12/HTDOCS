<?php

require_once("../db_conection.php");

//susirenkam login info is formos


if($_POST && !empty($_POST['nickname']) && !empty($_POST['password'])){
    $nickname=$_POST['nickname'];
    $password=$_POST['password'];
}else{
    header("./views/login.php");
}


try {
    $sql="SELECT * FROM users WHERE nickname='$nickname'";
    $query= $conn->prepare($sql);
    $query->execute();
    $result=$query->fetch();
}catch(PDOExceptionm $e){
    echo "Select failed: ".$e->getMessage();
}

// pasitikrinam as yra toks email 

if ($result){
    session_start();
  
    $dbPasswordHash=$result['password'];   
//tikriname slaptazodi

    if(password_verify($password, $dbPasswordHash)){
        $_SESSION['username']= $result['nickname'];
        echo "Login successful";
        header("Location:../views/chat.php");
    }else{
        echo "Password is incorrect";
    }
}else{
    echo "Nickname does  not exist";
}

// var_dump($result);





?>