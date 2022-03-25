<?php 


require_once("../db_conection.php");
 
if(!$_POST){
   
      header("Location: ../");
    die;
       

}else{   
  
    
    $car_no=$_POST['car_no'];
    $brand=$_POST['brand'];
    $model=$_POST['model'];
    $color=$_POST['color'];
   $car_id=$_POST['id'];
   $owner_id=$_POST['owner_id'];

 

      try{
        $sql = "UPDATE cars SET  car_no='$car_no', brand='$brand', model='$model', color='$color'  WHERE id='$car_id'";
        $query= $conn->prepare($sql);
       $result= $query->execute();
       if($result){
           header("Location: ../views/cars.php?id= $owner_id");
       }


    }catch(PDOException $e){
        echo "Update failed: ".$e->getMessage();
    }

}
?>