<?php
$usernameValue = $emailvalue = $passError="";
if($_GET){
    $usernameValue=$_GET ['username'];
    $emailvalue =$_GET['email'];
    $passError =$_GET['error'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="text-center container">
    <h2>Please fill registration form!</h2>
    <form action="register.php" method="POST">
        <div class="form-floating ">
            <input type="text" name="username" class="form-control" requeired  value = <?php echo $usernameValue?>>
            <label for="username">Username</label>
        </div>
        <div class="form-floating">
            <input type="email" class="form-control" name="email" requeired  value= <?php echo $emailvalue?>>
            <label for="email">Email</label>
        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control"requeired >
            <label for="password">Password</label>
        </div>
        <div class="form-floating">
        

            <input type="password" name="confirmPassword" class="form-control" requeired>
            <span class="badge bg-danger"><?php echo $passError ?></span>
            <label for="confirmPassword">Confirm Password</label>
        </div>
        <button type="submit" class="btn btn-lg btn-primary"> Register</button>

    </form>
 




<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>