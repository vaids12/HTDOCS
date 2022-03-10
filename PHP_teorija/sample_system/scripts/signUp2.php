<?php

// jungiame duomenu baze

require_once("../db_connection.php");

//Gauname duomenis is formos ir sukeliam i kintamuosius
if($_POST){
    $firstName=$_POST['fname'];
    $lastName=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmPassword=$_POST['confirmPassword'];
  
}else{
    header("Location: ../");
    die;
}

// sukeliame duomenis i duomenu baze

// uzsifruojam passworda

if($password==$confirmPassword){
    $password=password_hash($password,PASSWORD_BCRYPT);
}else{
    header("Location: ../");
    die;
}


try{
   $sql ="INSERT INTO users (first_name, last_name, email, password ) VALUES ('$firstName','$lastName','$email', '$password')";
$query=$conn->prepare($sql);
$query->execute(); 
header("Location: ../views/login.php");
}catch(PDOExeption $e){
    echo"Insert failed: ".$e->getMassage();
}




?>