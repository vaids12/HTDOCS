<?php

$title="Home";
include "layout/header.php";

require_once "config/Database.php";
require "app/controller/Task.php";

$database=new Database;
$db=$database->getConnection();

$tasks= task::index($db);

if($_POST){
    $task = new Task($db);
    $task->id=$_POST['id'];
   $task->delete();
   
   if($task->delete()){
    header("Location: http://localhost/practice.Task/");
    }else{
        echo "Delete failed";
    }

}

?>


<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-12 ">
             <a class='btn btn-secondary ' style="margin:20px;" href="views/task.create.php" style >Task create</a> 
            <div class="card text-center">                
                <div class= "card-body">
                         <table class="table table-striped">   
                            <tr  class="bg-light " >
                                <th>Title</th>
                                <th >Description</th>
                                <th>Deadline</th>
                                <th>Created</th>
                                <th>Modified</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <?php
                         
                                foreach($tasks as $task){
                                    echo "<tr><td>".$task['title']."</td><td style='padding: 0px 100px ;'>".$task['description']."</td>";
                                    echo "<td>".$task['deadline']."</td>";
                                    echo "<td style='font-size:9px;' >".$task['created']."</td><td style='font-size:9px;'  >".$task['modified']."</td>";
                                    echo "<td><a class='btn btn-secondary btn-sm' href='views/task.edit.php/?id=".$task['id']."'>Update</a>";
                                    echo '<form action=""  method="POST">
                                        <input type="hidden" name="id" value='.$task['id'].'>';
                                      echo '<input type="submit" name="submit" value="DELETE" >
                                         </form>
                                    </td></tr>';
                                    }
                                ?>
                            </tr>
                        
                        </table>                                                                 
                </div>
                
            </div>
        </div>
    </div>
</div>



<?php
include"layout/footer.php";
?>