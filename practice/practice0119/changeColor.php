<?php
   
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // $color = "yellow";
        header("location:../practice0119/changeColor.php ");
    }
    if ($_SERVER['REQUEST_METHOD'] === 'GET'){
        $color = "green";
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

<body style= "background-color:<?php echo $color ;?>">

<form action="http://localhost/practice/practice0119/changeColor.php" method = "GET">
    <input type="submit"  value = "GET">
</form>
<br>
<form action="http://localhost/practice/practice0119/changeColor.php" method = "POST">
    <input type="submit"  value = "POST">
</form>
  
</body>
</html>