<?php

require_once("../db_conection.php");
 include'../layout/header.php';



if($_POST ){

    $email=$_POST['email'];
    $password=$_POST['password'];
}else{
    header("Location:../views/login.php");
  
}


try {
    $sql="SELECT * FROM owners WHERE email='$email'";
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
        $_SESSION['email']= $result['email'];
        $_SESSION['first_name']= $result['first_name'];
        $_SESSION['id']=$result['id'];
        $_SESSION['last_name']=$result['last_name'];

        echo "Login successful";
        header("Location:../views/owners.php");
    }else{
        echo "Password is incorrect";
    }
}else{
    echo "Nickname does  not exist";
}




?>