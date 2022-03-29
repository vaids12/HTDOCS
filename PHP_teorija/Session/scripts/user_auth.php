<?php

session_start();
$_SESSION['auth_errors']=[];

require_once("../database/db_connect.php");
try{
    $sql="SELECT * FROM users";
    $query= $conn->prepare($sql);
    $query->execute();
    $users=$query->fetchAll();

}catch(PDOExceptionm $e){
    echo "Select for users failed: ".$e->getMessage();
}



if(!$_POST){
    header("Location: ../views/login.php");
}

if(!isset($_POST['email']) || !isset($_POST['password']) ){
    echo "Something went wrong, please contact yuo admin!";
}

$email=$_POST['email'];
$password=$_POST['password'];



if($email==''){
    array_push($_SESSION['auth_errors'], "Please enter your email");
}

if($password==''){
    array_push($_SESSION['auth_errors'], "Please enter your password");
}

$email_exists=0;

foreach($users as $user){
    if (array_search($email, $user)){
        $email_exists+=1;
    }
}

if ($email_exists===0){
    array_push($_SESSION['auth_errors'], " Email does not exist");
}

foreach ($users as $user) {
    if ($user['email']==$email){
        if(password_verify($password,$user['password'])){
            $_SESSION['username']=$user['first_name'];
            $_SESSION['user_id']=$user['id'];
            header("Location: ../");
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