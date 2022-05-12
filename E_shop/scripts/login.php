<?php

session_start();
$_SESSION['auth_errors']=[];

require_once("../db_connection.php");

// get information about the users from database:

try {
    $sql="SELECT * FROM users  ";
    $query= $conn->prepare($sql);
    $query->execute();
    $users=$query->fetchAll();
}catch(PDOExceptionm $e){
    echo "Select  for users failed: ".$e->getMessage();
}

if(!$_POST ){
    header("Location:../");  
}

if(!isset($_POST['nickname']) || !isset($_POST['password']) ){
    echo "Something went wrong, please contact your admin!";
}

$nickname=$_POST['nickname'];
$password=$_POST['password'];

// Check if typed all fields and check nickname :

if($nickname==''){
    array_push($_SESSION['auth_errors'], "Please enter your nickname");
}

if($password==''){
    array_push($_SESSION['auth_errors'], "Please enter your password");
}

$nickname_exists=0;

foreach($users as $user){
    if (array_search($nickname, $user)){
        $nickname_exists+=1;
    }
}

if ($nickname_exists===0){
    array_push($_SESSION['auth_errors'], " Nickname does not exist");
}

// check if there is the user, is the password was correct and set the session:

foreach ($users as $user) {
    if ($user['nickname']===$nickname){
        if(password_verify($password,$user['password'])){
            $_SESSION['nickname']=$user['nickname'];
            $_SESSION['user_id']=$user['id'];
            $_SESSION['role_id']=$user['role_id'];
            header("Location: ../views/main.php");
            die;
        }else{ 
            array_push($_SESSION['auth_errors'], " Please check your password");            
        }
    }
}

if(!empty($_SESSION ['auth_errors'])){
    header("Location: ../");  
}


?>