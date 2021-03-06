<?php
$title="Task Create";
include "../layout/header.php";
require "../config/Database.php";
require "../app/Controller/Task.php";

$database= new Database;
$db = $database-> getConnection();

$task = new Task($db);

if ($_POST){
    if(($_POST['title']!=="" && $_POST['description'] !=="" && $_POST['deadline']!=="") ){

    $task->title= $_POST['title'];
    $task->description=$_POST['description'];
    $task->deadline=$_POST['deadline'];

        if($task->create()){
            echo "Task created";
        }else{
            echo "Something went wrong";
        }

    }else{
        $task->title= $_POST['title'];
        $task->description=$_POST['description'];
        $task->deadline=$_POST['deadline'];
        echo "<p style='color:red; '>Please fill all fields!</p>";

    }
}



?>


<div class="container py-4">
         <div class="row justify-content-center">
             <div class="col-md-8">
                 <div class="card bg-light mb-8"  >
                     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" style='padding:20px;' method="POST">
                                <div>
                                    <input type="text" placeholder ="Title" name="title" value="<?php echo $task->title;?>" >
                                    <input type="datetime-local" placeholder= "Deadline"  name="deadline" value="<?php echo $task->deadline;?>">
                                </div>
                                
                                <div style='padding:10px 0 10px;'>
                                    <textarea name="description" id="" cols="30" rows="10" placeholder= "Description..." ><?php echo $task->description;?></textarea>
                                </div>
                                <input type="submit" class='btn btn-secondary'  >

                      </form>
                 </div>
             </div>
        </div>
 </div> 
<?php
include "../layout/footer.php";
?>