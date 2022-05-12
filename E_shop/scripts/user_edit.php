
<?php 
session_start();
if(!isset($_SESSION['nickname'])){
    header("Location: ../");
}

require_once("../db_connection.php");

if($_POST){
    try{
        $userid =$_POST['userid'];
        $nickname=$_POST['nickname'];
        $firstName=$_POST['fname'];
        $lastName=$_POST['lname'];
        $email=$_POST['email'];
        $role_id=$_POST['role_id'];

        // Updade user information to database:

        $sql = "UPDATE users SET nickname='$nickname', first_name='$firstName', last_name='$lastName', email='$email', role_id='$role_id' WHERE id='$userid'";
        $query= $conn->prepare($sql);
        $result= $query->execute();

        if($result){
            header("Location: ../views/user.php");
        }
        
    }catch(PDOException $e){
        echo "Update failed: ".$e->getMessage();
    }

}else{
header("Location: ../");
}

?>