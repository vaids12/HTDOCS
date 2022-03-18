<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cars";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT * FROM cars");
  $stmt->execute();

  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $result = $stmt->fetchAll();
  ?>
  <a href="car_create.php">Pridėti automobilį</a>
  <table> 
  <?php
  foreach($result as $v) {
    echo '<tr><td>'. $v['maker']. '</td><td>'. $v['model'] . '</td><td>'. $v['release_year']. '</td><td>'. $v['color'] . '</td><td>' . 
    $v['car_no'] . '</td><td>' . $v['type']. '</td>
    <td>
        <a href="car_edit.php?id='.$v['id'].'">Atnaujinti</a>
    </td>
    <td>
    <form action="car_delete.php" method="post">
        <input type="hidden" name="id" value="'.$v['id'].'">
        <input type="submit" name="submit" value="Ištrinti">
    </form>
    </td></tr>';
  
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>
  </table>