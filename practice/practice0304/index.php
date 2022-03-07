<!-- Sukurti lentelę knygos. Lentelė turi turėti id, pavadinimą, autorių, išleidimo metus, trumpą ir trumpą aprašymą.
Sukurkite programą, kuri galės atlikti bazines operacijas - atvaizduoti turimas knygas, pridėtį naują knygą, redaguoti ir ištrinti esamą. -->

<?php
$serverName="localhost";
$userName="root";
$password="";
$dbname="books";

try {
 $conn = new PDO("mysql:host=$serverName;dbname=$dbname",$userName, $password);
 $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "Connected to datebase";
} catch(PDOException $e) {
    echo " Connection failed: ".$e->getMessage();
}

$sql=$conn->prepare("SELECT * FROM books;");

$sql->execute();

$result=$sql->fetchAll();




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
<link rel="stylesheet" href="./dist/style.css">   
</head>
<body>
    <div>
    <nav class="navbar navbar-expand-lg navbar-light  bg-secondary shadow-sm">
    <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Register</a>
                </li>
            </ul>
    </div>
    <table>
       
    <tr>
        <th>NUMBER</th>
        <th>TITLE</th>
        <th>AUTHOR</th>
        <th>YEAR OF RELEASE</th>
        <th>DESCRIPTION</th>
    </tr>
    <?php
foreach($result as $book){
    echo "<tr><td>".$book['id']."</td><td>".$book['title']."</td><td>".$book['author']."</td><td>".$book['year_of_release']."</td><td>".$book['short_description']."</td></tr>";

}
  ?>
  <!-- <td>
        <form action="delete.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $book['id'];?>">
        <input type="submit" name="submit" value="Ištrinti">
        </form>
    </td> -->

<a href="./create.php">įdėti knyga</a>

</table>
</body>
</html>

