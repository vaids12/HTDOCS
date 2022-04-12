<?php

$title="Home";
include "layout/header.php";

require_once "config/Database.php";
require "app/controller/User.php";

$database=new Database;
$db=$database->getConnection();

$users= User::index($db);
?>

<ul>
    <li><a href="views/user.create.php">User create</a></li>
</ul>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
       
    </tr>
    <tr>
        <?php
        foreach($users as $user){
        echo "<tr><td>".$user['name']."</td><td>".$user['email']."</td><td><a href='views/user.edit.php/?id=".$user['id']."'>Update</a><a href='app/controller/User.delete.php/?id=".$user['id']."'>Delete</a></td></tr>";
        }
        ?>
    </tr>
  
</table>


<?php
include"layout/footer.php";
?>