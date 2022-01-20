<?php
    if(isset($_GET['link']) && $_GET['link'] == 2){
        header("location: http://localhost/practice/practice0119/blue.php ");
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
<body style= "background-color:red">
<a href="http://localhost/practice/practice0119/red.php/?link=2" style= "color:white" >Link</a>





</body>
</html>