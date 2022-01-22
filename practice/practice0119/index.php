<?php




if(isset($_GET['color'])){
    $color = $_GET['color']; 
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB mechanika</title>

    <style>
        body{
            background-color:#<?php echo $color ?>;
        }
    </style>
</head>
<body >

<form action="" method="GET">
<input type="text" name= "color" >
<br>
<br>
<input type="submit">
</form>

    

</body>
</html>