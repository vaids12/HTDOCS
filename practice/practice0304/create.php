<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){

$serverName="localhost";
$userName="root";
$password="";
$dbname="books";


 $conn = new PDO("mysql:host=$serverName;dbname=$dbname",$userName, $password);
 $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 
    $title=$_POST['title'];
    $author=$_POST['author'];
    $release=$_POST['release'];
    $description=$_POST['description'];
   




    
    $sql= "INSERT  INTO books (title, author, year_of_release, short_description)
     VALUES ('$title', '$author','$release', '$description')";
    // $query=$conn->prepare($sql);
    
    $conn->exec($sql);
    header("Location: index.php");
}

?>


<form action="" method="POST">
    <div>
       <label for="title">TITLE</label>
        <input type="text" name="title"> 
    </div>
    <div>
        <label for="author">AUTHOR</label>
        <input type="text" name="author">
    </div>
    <div>
        <label for="release">YEAR OF RELEASE</label>
        <input type="text" name="release">
    </div>
    <div>
         <label for="description">DESCRIPTION</label>
         <input type="text" name="description">
    </div>
    <input type="submit" name="submit" value="Įrašyti">
  
</form>
