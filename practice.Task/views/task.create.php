<?php
$title="Task Create";
include "../layout/header.php";
require "../config/Database.php";
require "../app/Controller/Task.php";

$database= new Database;
$db = $database-> getConnection();

$task = new Task($db);



if($_POST){
    
    $task->title= $_POST['title'];
    $task->description=$_POST['description'];
    $task->deadline=$_POST['deadline'];

    if($task->create()){
        echo "Task created";
    }else{
        echo "Something went wrong";
    }

}




?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
<input type="text" placeholder ="Title" name="title">
<input type="text" placeholder= "Description"  name="description">
<input type="datetime-local" placeholder= "Deadline"  name="deadline">
<input type="submit" >

</form>



<?php
include "../layout/footer.php";
?>