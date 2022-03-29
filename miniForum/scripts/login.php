<?php

session_start();
$_SESSION['auth_errors']=[];

require_once("../db_conection.php");



try {
    $sql="SELECT * FROM users ";
    $query= $conn->prepare($sql);
    $query->execute();
    $users=$query->fetchAll();
}catch(PDOExceptionm $e){
    echo "Select  for users failed: ".$e->getMessage();
}


if(!$_POST ){
    header("Location:../views/login.php");  

}


if(!isset($_POST['nickname']) || !isset($_POST['password']) ){
    echo "Something went wrong, please contact your admin!";
}


$nickname=$_POST['nickname'];
$password=$_POST['password'];

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
    

foreach ($users as $user) {
    if ($user['nickname']==$nickname){
        if(password_verify($password,$user['password'])){
            $_SESSION['nickname']=$user['nickname'];
            $_SESSION['user_id']=$user['id'];
            header("Location: ../views/users.php");
            die;
        }else{
            $_SESSION['login_count'] +=1;
            if( $_SESSION['login_count']===3){
                array_push($_SESSION['auth_errors'], "Login locked");
            }else{
                array_push($_SESSION['auth_errors'], " Please check your password");
            }
            
        }
    }
}



if(!empty($_SESSION ['auth_errors'])){
    header("Location: ../views/login.php");
  
   
}


?>