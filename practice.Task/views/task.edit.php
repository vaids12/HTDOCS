<?php
$id = isset($_GET['id']) ? $_GET['id'] : die("ERROR: no User id");
$title="Task Edit";
include "../layout/header.php";
require "../config/Database.php";
require "../app/Controller/Task.php";

$database= new Database;
$db = $database-> getConnection();

$task = new Task($db);
$task->id=$id;
$task->getOne();



if($_POST){
    $task->title=$_POST['title'];
    $task->description=$_POST['description'];
    $task->deadline=$_POST['deadline'];


    if($task->update()){
        echo "Task update";
    }else{
        echo "Update failed";
    }
}


?>



<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]."?id={$id}");?>" method="POST">
<input type="text"  name="title" value="<?php echo $task->title;?>">
<input type="text"  name="description" value="<?php echo $task->description;?>" >
<input type="datetime"  name="deadline" value="<?php echo $task->deadline;?>" >
<input type="submit" value="Update Task" >
</form>



<?php
include "../layout/footer.php";
?>