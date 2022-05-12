<?php 

session_start();
if(!isset($_SESSION['nickname'])){
    header("Location: /..");
}
include '../layout/header.php';
require_once '../db_connection.php';

// get information about users from database:

try{
    $sql ="SELECT u.nickname, u.first_name, u.last_name, u.email, u.role_id,u.id, r.name 
    FROM users AS u
    INNER JOIN roles as r ON u.role_id=r.id";
    $query=$conn->prepare($sql);
    $query->execute(); 
    $result=$query->fetchAll();
 }catch(PDOExeption $e){
     echo"Insert failed: ".$e->getMassage();
 }
?>

<!-- table with all users  and buttons for admin: -->

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header">
                    Hello, <?php echo $_SESSION['nickname'] ?>
                </div>
                <div class= "card-body">
                    <h5 class="card-title">Users list</h5>                    
                    <table class="table table-striped">
                        <tr>
                            <th>Nickname</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>                               
                            <th>Rolė</th> 
                            <?php
                            if($_SESSION['role_id']=='1'){
                            echo"
                            <th>Update</th>
                            <th>Delete</th>";
                            }?>                                                                                                                                                   
                        </tr>
                        <?php
                        foreach($result as $user){
                            echo "<tr><td>".$user['nickname']."</td><td>".$user['first_name']."</td><td>".$user['last_name']."</td><td>".$user['email']."</td><td>".$user['name']."</td><td><a class='btn btn-warning' href='user_edit.php?userid=".$user['id']."'>Edit</a></td>
                            <td>
                            <form action='../scripts/user_delete.php' method='POST'>
                            <input type='hidden' name='id' value=".$user['id'].">
                            <input type='submit'class='btn btn-danger' name='submit' value='Delete'>
                            </form>
                            </td></tr>";
                        }?>                                               
                    </table>                                                                  
                </div>
                
            </div>
        </div>
    </div>
</div>

<?php
include '../layout/footer.php';
?>