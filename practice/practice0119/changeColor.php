<?php
  if(isset($_GET['button1']) && $_GET['button1'] == 1){
   $color = "green";
    exit; 
    }
    if(isset($_POST['button2']) && $_POST['button2'] == 2){
        $color = "yellow";
         exit; 
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

<body style= "background-color:<?php echo $color ?>">

<form action="/?button1=1" method = "GET">
    <input type="button" name ="button1" value = "button 1">
</form>
<form action="/?button2=2" method = "POST">
    <input type="button" name ="button2" value = "button 2">
</form>
  
</body>
</html>