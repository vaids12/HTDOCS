<?php 
session_start();
include'layout/header.php';

if (isset($_SESSION['auth_errors'])){
    $errors=$_SESSION['auth_errors'];
    $_SESSION['auth_errors']=[];
    foreach($errors as $error){
        echo "<p>$error</p>";
    }
}
?>

<!-- index page for log in : -->

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-light mb-8">
                <div class="card-header">LOGIN IN</div>
                <div class="card-body">
                    <form action="scripts/login.php" method= "POST" enctype="multipart/form-data">
                        <div class= "mb-2">                     
                            <input type="text" class="form-control" placeholder="Nickname" name="nickname">
                        </div>
                        <div class= "mb-3">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                            <input type="submit" class="btn btn-primary" value="Log in">                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include'layout/footer.php';
?>