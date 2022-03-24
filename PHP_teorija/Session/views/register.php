<?php
session_start();
if(isset($_SESSION['reg_errors'])){
   foreach($_SESSION['reg_errors'] as $error){
    echo "<p>$error</p>"; 
    }
    $_SESSION['reg_errors']=[];
   
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Account</title>
    <style>
        input{
            display: block;
            margin:5px;
        }
    </style>
</head>
<body>
    <h3>Please register</h3>
    <p><a href="login.php">I already have an account</a></p>
    <form action="../scripts/user_create.php" method="POST">
        <input type="text" placeholder="First name" name="fname">
        <input type="text" placeholder="Last name" name="lname">
        <input type="text"placeholder="email" name="email" >
        <input type="password" placeholder="Password" name="password">
        <input type="password" placeholder="Confirm password" name="confPassword">
        <input type="submit" value="Register">
    </form>
</body>
</html>