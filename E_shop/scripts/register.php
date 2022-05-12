<?php
session_start();
require_once("../db_connection.php");

$_SESSION['reg_errors']=[];


if(!$_POST){
    header("Location: ../views/register.php");
}
    
    $nickname=$_POST['nickname'];
    $first_name=$_POST['fname'];
    $last_name=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmPassword=$_POST['confirmPassword'];

    // Check if typed all fields and check format:


    if(( $nickname=="" || $first_name=="" || $last_name=="" || $email=="" || $password=="" || $confirmPassword=="")){    
        array_push($_SESSION['reg_errors'], "Please fill all fields!");
    }

    if(strlen($nickname)>50){
        array_push($_SESSION['reg_errors'], "Nickname is too long. MAX 50 symbols");
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
    


// Check if typed password is the same in two inputs:

if($password==$confirmPassword){

    // encrypt the password:

    $password=password_hash($password,PASSWORD_BCRYPT);
}else{
    array_push($_SESSION['reg_errors'], "Passwords do not match!");
}

if(!empty($_SESSION['reg_errors'])){
    header("Location: ../views/register.php");
   die;
}

// create a new user into database:

try{
    $sql ="INSERT INTO users (nickname, first_name, last_name, email, password ) VALUES ('$nickname','$first_name','$last_name','$email', '$password')";
    $query=$conn->prepare($sql);
    $query->execute(); 
    header("Location: ../");
}catch(PDOExeption $e){
    echo "Insert failed: ".$e->getMassage();
}




?>