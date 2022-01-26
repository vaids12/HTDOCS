<?php

   

 
     $countArray = count($_POST);
    echo  'Buvo pažymėta '.$countArray.' checkbox.<br>'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST' ){
    echo '<body style = "background-color : white; color:black">';
    echo '<form style= "visibility : hidden">';

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

<body style = "background-color: black; color:white">

<form action="" method = "POST" >
    <?php 
        $raides=['A','B','C','D','E','F','G', 'H', 'I', 'J'];
        $ilgis= rand(3,10);
        for($i=0; $i<$ilgis; $i++){
        echo "$raides[$i]<td><input type='checkbox'  name= $i></td><br>";
        }
    ?>
    <input type="submit"  value = "submit" >
  
</form>
    
</body>
</html>