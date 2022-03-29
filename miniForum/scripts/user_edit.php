
<?php 
session_start();
if(!isset($_SESSION['nickname'])){
    header("Location: login.php");
}

require_once("../db_conection.php");

if($_POST){
    try{
        $nickname=$_POST['nickname'];
        $userid =$_POST['userid'];
        $firstName=$_POST['fname'];
        $lastName=$_POST['lname'];
        $email=$_POST['email'];

        $sql = "UPDATE users SET nickname='$nickname', first_name='$firstName', last_name='$lastName', email='$email' WHERE id='$userid'";
        $query= $conn->prepare($sql);
       $result= $query->execute();
       if($result){
           header("Location: ../views/users.php");
       }


    }catch(PDOException $e){
        echo "Update failed: ".$e->getMessage();
    }

}else{
header("Location: ../");
}

?>