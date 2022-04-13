<?php

$title="Home";
include "layout/header.php";

require_once "config/Database.php";
require "app/controller/Task.php";

$database=new Database;
$db=$database->getConnection();

$tasks= task::index($db);
?>


<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="card text-center">
              <a class='btn btn-success' href="views/task.create.php">Task create</a>
                <div class= "card-body">
            
                     
                         <table class="table table-striped">
                            <tr>
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
                                echo "<tr><td>".$task['title']."</td><td style='padding: 0px 100px ;'>".$task['description']."</td><td>".$task['deadline']."</td><td style='font-size:9px;' >".$task['created']."</td><td style='font-size:9px;'  >".$task['modified']."</td><td><a class='btn btn-warning btn-sm' href='views/task.edit.php/?id=".$task['id']."'>Update</a>&nbsp&nbsp<a class='btn btn-danger btn-sm' href='app/controller/Task.delete.php/?id=".$task['id']."'>Delete</a></td></tr>";
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