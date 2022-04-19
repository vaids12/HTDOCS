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

 <div class="container py-4">
         <div class="row justify-content-center">
             <div class="col-md-8">
                 <div class="card bg-light mb-8"  >
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]."?id={$id}");?>"  style='padding:20px;' method="POST">
                    <input type="text"  name="title" value="<?php echo $task->title;?>">
                    <input type="datetime"  name="deadline" value="<?php echo $task->deadline;?>" >
                    <div style='padding:10px 0 10px;'>
                                    <textarea name="description" id="" cols="60" rows="10"> <?php echo $task->description;?></textarea>
                     </div>
                    <input type="submit" value="Update Task"class='btn btn-secondary' >
                    </form>
                 </div>
             </div>
        </div>
 </div> 


<?php
include "../layout/footer.php";
?>