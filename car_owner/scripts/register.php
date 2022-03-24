<?php



require_once("../db_conection.php");

if($_SERVER['REQUEST_METHOD']=="POST"){
   
    if(!empty($_POST['fname']) && !empty($_POST['lname']) &&  !empty($_POST['email']) && !empty($_POST['dateOfLicense']) && !empty($_POST['password']) && !empty($_POST['confirmPassword'])){
    
    $firstName=$_POST['fname'];
    $lastName=$_POST['lname'];
    $email=$_POST['email'];
    $dateOfLicense=$_POST['dateOfLicense'];
    $password=$_POST['password'];
    $confirmPassword=$_POST['confirmPassword'];

    }else{
        header("Location: ../");
        die;
    } 

}else{
    header("Location: ../");
    die;
}

try {
    $sql="SELECT email FROM owners WHERE email='$email'  ";
    $query= $conn->prepare($sql);
    $query->execute();
    $result=$query->fetch();
}catch(PDOExceptionm $e){
    echo "Select failed: ".$e->getMessage();
}


if($result){
    header("Location: ../views/regist_err.php");  
    die;

}elseif($password==$confirmPassword){
    $password=password_hash($password,PASSWORD_BCRYPT);
}else{
    header("Location: ../");
    die;
}


try{
    $sql ="INSERT INTO owners ( first_name, last_name, email, date_of_driving_license, password ) VALUES ('$firstName','$lastName','$email','$dateOfLicense', '$password')";
    $query=$conn->prepare($sql);
    $query->execute(); 
    header("Location: ../views/login.php");
}catch(PDOExeption $e){
    echo "Insert failed: ".$e->getMassage();
}
 ?>



