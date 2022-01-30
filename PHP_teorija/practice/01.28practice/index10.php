<?php
// 11 uzdavinys
if($_SERVER['REQUEST_METHOD']=="POST" && !empty($_POST['number'])){
    $p= $_POST['number'];
  
    if($p==='1'){
        header("location: ../01.28practice/index1.php");   
    }elseif($p==='2'){
        header("location: ../01.28practice/index2.php"); 
    }else{    
          echo "Įvestas skaičius nėra nei vienetas, nei dvejetas";
          $_POST=['']; 
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Įveskite vienetą arba dvejetą</h3>
    <br>
    <form action="http://localhost/PHP_teorija/practice/01.28practice/index10.php" method="POST">
        <input type="number" name="number">
        <button class= "button"> SEND</button>

    </form>
    <h3>Įveskite slaptažodį</h3>
    <br>
    <form action="http://localhost/PHP_teorija/practice/01.28practice/slaptas.php" method="POST">
        <input type="password" name="password">
        <button class= "button"> SEND</button>

    </form>
   



</body>
</html>