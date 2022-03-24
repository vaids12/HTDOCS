
<?php 
session_start();
if(!isset($_SESSION['email'])){
    header("Location: login.php");
}
include '../layout/header1.php';

require_once("../db_conection.php");




if($_GET){
   
    try{

        $owner_id=$_GET['id'];
        $sql="SELECT o.first_name, c.car_no, c.brand, c.model, c.color, c.id
        FROM cars as c
        JOIN owners as o on c.owner_id=o.id
         WHERE c.owner_id='$owner_id'";
        $query = $conn->prepare($sql);
        $query->execute();
        $result=$query->fetchAll();       
    }catch(PDOException $e){
        echo "Selected failed:".$e->getMessage();
    }

    if(!$result){
        header("Location:../views/cars_add.php");
        die;
    }

}


?>


<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card text-center">
                <div class="card-header">

                 Hello, <?php echo $result['0']['first_name'] ?>
                </div>
                <div class= "card-body">
                    <h5 class="card-title">Your Cars &nbsp&nbsp<a class='btn btn-success' href='../views/cars_add.php?id=".<?php echo $_SESSION['id']?>."'>Add car</a></h5>
                     
                        <table class="table table-striped">
                            <tr>
                               
                                <th>Car No</th>
                                <th>Brand</th>
                                <th>Model</th>
                                <th>Color</th>
                                <th>Action</th>
                              
                            </tr>
                            <?php
                                
                                foreach($result as $car){
                               
                                 echo"<tr><td>".$car['car_no']."</td><td>".$car['brand']."</td><td>".$car['model']."</td><td>".$car['color']."</td><td><a class='btn btn-warning' href='cars_edit.php?id=".$car['id']."'>Edit</a>&nbsp&nbsp<a class='btn btn-danger' href='../scripts/cars_delete.php?id=".$car['id']."'>Delete</a></td><tr>";
                                }
                       
                            ?>
                        </table>                                                                  
                </div>
                
            </div>
        </div>
    </div>
</div>


}

<?php
include '../layout/footer.php';
?>