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


//$sql = $conn ->prepare("SELECT * FROM actor WHERE actor_id = 1");
$sql = $conn ->prepare("SELECT * FROM actor ");
$sql -> execute();

//var_dump($sql);

$result = $sql->fetchAll(); //jei daugiau nei vienas rezultatas

// $result = $sql->fetch(); //jei vienas irasas, bet jei masyva naudoti tai su All,dvimatis masyvas

//print_r($result);

//echo $result['first_name'];

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