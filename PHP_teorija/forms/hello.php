<?php
$usrNameErr= $emailErr = $webErr= $noteErr= $genderErr="";

$userName = $email = $web = $note = $gender ="";



if($_SERVER['REQUEST_METHOD']== "POST"){

    if(empty($_POST['userName'])){
        $usrNameErr= "Username is required";
    }else{
         $userName = testInput($_POST['userName']);
         if(!preg_match("/^[a-zA-Z-' ]*$/", $userName)){
             $usrNameErr="Only letters and spaces allowed";
         }
    }
    if(empty($_POST['email'])){
        $emailErr= "Email is required";
    }else{
        $email = testInput($_POST['email']);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Email format is not valid";
        }
    }   
    if(empty($_POST['web'])){
        $webErr= "Web is required";
    }else{
        $web= testInput($_POST['web']);
        if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%?=~_|]/i", $web)){
            $webErr = " URL is invalid";
        }
    }    
    if(empty($_POST['note'])){
      $note = "";
    }else{
        $note= testInput($_POST['note']);
    }
    if(empty($_POST['gender'])){
        $genderErr= "Gender is required";
    }else{
         $gender= testInput($_POST['gender']);
    }   
  
}

//keliame arba ne i duomenu baze

function testInput($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
</head>
<body>
    <!-- <h1>Hello, <?php echo $_POST['userName']; ?></h1> -->

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method ="POST">

    <label for="userName">Username*</label>
<br>
<input type="text" name="userName" value ="<?php echo $userName?>">
<span style = "color:red ">  <?php echo $usrNameErr; ?> </span>
<br>
<label for= "email" >Email*</label>
<br>
<input type="text" name= "email"value ="<?php echo $email?>" >
<span style = "color:red ">  <?php echo $emailErr; ?> </span>
<br>
<label for="web">Website*</label>
<br>
<input type="text" name= "web" value ="<?php echo $web?>">
<span style = "color:red ">  <?php echo $webErr; ?> </span>
<br>
<label for="note">Note</label>
<br>
<textarea name="note" id="" cols="30" rows="10"value ="<?php echo $note?>"></textarea >
<span style = "color:red ">  <?php echo $noteErr; ?> </span>
<br>
<span>Gender*:</span>

<br>
<label for="gender">Male</label>
<input type="radio" name= "gender" value="male" <?php 
if(isset($gender) && $gender == "male"){
    echo "checked";
}
?>>
<br>
<label for="gender">Female</label>
<input type="radio" name="gender" value ="female"<?php 
if(isset($gender) && $gender == "female"){
    echo "checked";
}
?>>
<br>
<label for="gender">Undefined</label>
<input type="radio" name= "gender" value= "undefined"<?php 
if(isset($gender) && $gender == "undefined"){
    echo "checked";
}
?>>
<span style = "color:red ">  <?php echo $genderErr; ?> </span>
<br>
<input type="submit">
<span>* Field are required</span>



</form>

<table>
   <tr>
       <th>Username</th>
       <th>Email</th>
       <th>Website</th>
       <th>Gender</th>
       <th>Note</th>
   </tr>
   <tr>
       <td>  $userName;</td>
       <td> $email;</td>
       <td> $web;</td>
       <td>  $gender;</td>
       <td> echo $note;</td>
   </tr>
</table>


</body>
</html>