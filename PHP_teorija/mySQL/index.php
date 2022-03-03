<!-- <pre> -->
<?php

//MySQLi
//Pdject-oriented
//Procedural



//PDO

$serverName="localhost";
$userName="root";
$password="";
$dbname="sakila";

try {
 $conn = new PDO("mysql:host=$serverName;dbname=$dbname",$userName, $password);
 $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// echo "Connected to datebase";
} catch(PDOException $e) {
    echo " Connection failed: ".$e->getMessage();
}


///// Create Query

$firstName="JOHN";
$lastName="WILLIS";


$sql1= "INSERT  INTO actor(first_name, last_name) VALUES ('$firstName', '$lastName')";
$query=$conn->prepare($sql1);

$query->execute();





///Read Query
//$sql = $conn ->prepare("SELECT * FROM actor WHERE actor_id = 1");
$sql = $conn ->prepare("SELECT * FROM actor ");
$sql -> execute();

//var_dump($sql);

$result = $sql->fetchAll(); //jei daugiau nei vienas rezultatas

// $result = $sql->fetch(); //jei vienas irasas, bet jei masyva naudoti tai su All,dvimatis masyvas

//print_r($result);

//echo $result['first_name'];

///Update 

$id=1;
$newName="Vardas";

$sql4="UPDATE actor SET first_name='$newName' WHERE actor_id=$id";

$query=$conn->prepare($sql4);
$query->execute();




//// Delete Query


$id= 212;

$sql3="DELETE FROM actor WHERE actor_id=$id";
$query=$conn ->prepare($sql3);
$query->execute();


?>

<table>
    <tr>
        <th>Name</th>
        <th>Last Name</th>
    </tr>
    <?php
    foreach ($result as $actor){
        echo "<tr><td>".$actor['first_name']."</td><td>".$actor['last_name']."</td></tr>";
    }
    ?>
</table>