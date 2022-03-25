<?php 


require_once("../db_conection.php");

if($_POST){
   
    try{
        $owner_id =$_POST['id'];
        $firstName=$_POST['first_name'];
        $lastName=$_POST['last_name'];
        $email=$_POST['email'];
        $dateOfLicense=$_POST['date_of_driving_license'];
      
        $sql = "UPDATE owners SET  first_name='$firstName', last_name='$lastName', email='$email', date_of_driving_license='$dateOfLicense'  WHERE id='$owner_id'";
        $query= $conn->prepare($sql);
       $result= $query->execute();
       if($result){
           header("Location: ../index.php");
       }


    }catch(PDOException $e){
        echo "Update failed: ".$e->getMessage();
    }

}else{
header("Location: ../");
}

?>