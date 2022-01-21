<?php

include 'layout/header.php';

$usernameValue = $emailvalue = $passError="";
if($_GET){
    $usernameValue=$_GET ['username'];
    $emailvalue =$_GET['email'];
    $passError =$_GET['error'];
}

?>


<div class="container">

    <h2>Please fill registration form!</h2>
    <form action="scripts/register.php" method="POST">
        <div class="form-floating ">
            <input type="text" name="username" class="form-control" requeired  value = <?php echo $usernameValue?>>
            <label for="username">Username</label>
        </div>
        <div class="form-floating">
            <input type="email" class="form-control" name="email" requeired  value= <?php echo $emailvalue?>>
            <label for="email">Email</label>
        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control" requeired >
            <label for="password">Password</label>
        </div>
        <div class="form-floating">
            <input type="password" name="confirmPassword" class="form-control" requeired>
            <span class="badge bg-danger"><?php echo $passError ?></span>
            <label for="confirmPassword">Confirm Password</label>
        </div>
        <button type="submit" class="btn btn-lg btn-primary"> Register</button>

    </form>
    </div>
<?php include'layout/footer.php' ?>




