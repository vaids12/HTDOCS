<?php
session_start();
require_once("../database/db_connect.php");
$_SESSION['reg_errors']=[];


if(!$_POST){
   header("Location: ../views/register.php");
}



if(!(isset($_POST['fname'])  && isset($_POST['lname'])  && isset($_POST['email'] ) && isset($_POST['password'])  && isset($_POST['confPassword']))){
    echo "Something went wrong, please contact admin";
}

    $first_name=$_POST['fname'];
    $last_name=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $conf_password=$_POST['confPassword'];
  
if(( $first_name=="" || $last_name=="" || $email=="" || $password=="" || $conf_password=="")){    
    array_push($_SESSION['reg_errors'], "Please fill all fields!");
}

if(strlen($first_name)>50){
    array_push($_SESSION['reg_errors'], "First Name is too long. MAX 50 symbols");
}

if(strlen($last_name)>50 ){
    array_push($_SESSION['reg_errors'], "Last name is too long. Max 50 symbols");
}

if(strlen($email)>50 ){
    array_push($_SESSION['reg_errors'], "Email is too long. Max 50 symbols");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    array_push($_SESSION['reg_errors'], "Email format is invalid");
}



if($password==$conf_password){
    $password=password_hash($password,PASSWORD_BCRYPT);
}else{
    array_push($_SESSION['reg_errors'], "Passwords do not match!");
  
}

if(!empty($_SESSION['reg_errors'])){
     header("Location: ../views/register.php");
    die;
}


try{
    $sql ="INSERT INTO users ( first_name, last_name, email, password ) VALUES ('$first_name','$last_name','$email', '$password')";
    $query=$conn->prepare($sql);
    $query->execute(); 
    header("Location: ../views/login.php");
}catch(PDOExeption $e){
    echo "Insert failed: ".$e->getMassage();
}

?>