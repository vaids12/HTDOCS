<?php

include 'layout/header.php';




require_once("db_conection.php");

try{
    $sql ="SELECT * FROM owners";
 $query=$conn->prepare($sql);
 $query->execute(); 
$result=$query->fetchAll();
 }catch(PDOExeption $e){
     echo"Insert failed: ".$e->getMassage();
 }



?>

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card text-center">
                <div class="card-header">
                    <h1>Cars owners</h1> 
                </div>
                <div class= "card-body">
                   
                     
                        <table class="table table-striped">
                            <tr>
                               
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Date of driving license</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th>Action</th>
                            </tr>
                            <?php
                            foreach($result as $owner){
                               
                                echo"<tr><td><a  href='views/cars.php?id=".$owner['id']."'>".$owner['first_name']."</a></td><td>".$owner['last_name']."</td><td>".$owner['email']."</td><td>".$owner['date_of_driving_license']."</td><td>".$owner['created']."</td><td>".$owner['updated']."</td><td><a class='btn btn-warning' href='views/owner_edit.php?id=".$owner['id']."'>Edit</a>&nbsp&nbsp<a class='btn btn-danger' href='scripts/owner_delete.php?id=".$owner['id']."'>Delete</a></td><tr>";
                                
                            }
                            
                            ?>
                        </table>                                                                  
                </div>
                
            </div>
        </div>
    </div>
</div>

<?php include'layout/footer.php' ?>

<!-- 1. Sukurti dviej?? lenteli?? duomen?? baze. Pirmoje lentel??je turim savininkus(id, vardas, pavard??, el.pa??tas, teisi?? i??davimo data), kitoje 
automobilius(id, numeris, mark??, modelis, spalva, savininko_id).
2. Sukurti aplikacij??, kuri atvaizduot?? automobili?? savininkus. Turi b??ti galimyb?? prid??ti nauj?? savinink??, redaguoti esam??, trinti savinink??.
3. Paspaudus ant savininko turi perkelti ?? kit?? puslap?? ir jame atvaizduoti visus jo turimus automobilius.
4. Automobili?? puslapyje turi b??ti galimyb?? prid??ti nauj?? automobil?? ir jis automati??kai turi b??ti priskiriamas tam savininkui. 
Taip pat turi b??ti galimyb?? redaguoti ir i??trinti automobilius.
5. Front-end pagal nuo??i??r??. -->