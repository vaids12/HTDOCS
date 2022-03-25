<?php



require_once("../db_conection.php");


if($_GET){

    try{
        $id=$_GET['id'];
        $sql="DELETE FROM owners WHERE id='$id'";
        $query=$conn->prepare($sql);
        $result= $query->execute();
        if($result){
            header("Location: ../index.php");
        }
    }catch(PDOException $e){
        echo "Delete failed: ">$e->getMessage();
    }




}else{
    header("Location: ../");
}



?>