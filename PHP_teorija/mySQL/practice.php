<?php
$serverName="localhost";
$userName="root";
$password="";
$dbname="classicmodels";

try {
 $conn = new PDO("mysql:host=$serverName;dbname=$dbname",$userName, $password);
 $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// echo "Connected to datebase";
} catch(PDOException $e) {
    echo " Connection failed: ".$e->getMessage();
}


$sql = $conn ->prepare("SELECT employeeNumber, firstName, lastName FROM employees; ");

$sql -> execute();

$result = $sql->fetchAll();

?>

<table>
    <tr>
        <th>NO</th>
        <th>First Name</th>
        <th>Last Name</th>
    </tr>
    <?php
    foreach ($result as $employees){
        echo "<tr><td>".$employees['employeeNumber']."</td><td>".$employees['firstName']."</td><td>".$employees['lastName']."</td></tr>";
    }
    ?>
</table>