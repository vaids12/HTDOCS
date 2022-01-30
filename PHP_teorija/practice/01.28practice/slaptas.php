<?php
//12 uzdavinys
$confirmPass='slaptas';

   
if($_SERVER['REQUEST_METHOD']=="POST"  &&  !empty($_POST['password'])){
  $password=$_POST['password'];
    if($password===$confirmPass){
        header("location: ../01.28practice/slaptas.php");
    }else{
        header("location: ../01.28practice/index10.php");
    }


}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slaptas</title>
</head>
<body>
    <p>Slaptas puslapis</p>

    
</body>
</html>