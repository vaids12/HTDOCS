<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){

 $serverName="localhost";
 $userName="root";
 $password="";
$dbname="books";
    
$conn = new PDO("mysql:host=$serverName;dbname=$dbname",$userName, $password);
$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id=$_POST['id'];


$sql="DELETE FROM books WHERE id=$id";
// $query=$conn ->prepare($sql);
$conn->exec($sql);
header("Location: index.php");
}
?>
