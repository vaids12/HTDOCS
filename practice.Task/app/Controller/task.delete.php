<?php

$id = isset($_GET['id']) ? $_GET['id'] : die("ERROR: no User id");

require "../../config/Database.php";
require "Task.php";


$database= new Database;
$db = $database-> getConnection();

$task = new Task($db);
$task->id=$id;

if ($task->delete()){
    header("Location: ../../../");
}else{
    echo "Delete failed";
}