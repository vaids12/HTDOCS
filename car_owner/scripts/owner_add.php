<?php



require_once("../db_conection.php");

if($_SERVER['REQUEST_METHOD']=="POST"){

    $firstName=$_POST['fname'];
    $lastName=$_POST['lname'];
    $email=$_POST['email'];
    $dateOfLicense=$_POST['dateOfLicense'];  


    try{
        $sql ="INSERT INTO owners ( first_name, last_name, email, date_of_driving_license ) VALUES ('$firstName','$lastName','$email','$dateOfLicense')";
        $query=$conn->prepare($sql);
        $query->execute(); 
        header("Location: ../index.php");
    }catch(PDOExeption $e){
        echo "Insert failed: ".$e->getMassage();
    }




}else{
    header("Location: ../");
    die;
}




 ?>



