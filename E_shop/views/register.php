<?php
include'../layout/header.php';

// session_start();
if(isset($_SESSION['reg_errors'])){
   foreach($_SESSION['reg_errors'] as $error){
    echo "<p>$error</p>"; 
    }

    $_SESSION['reg_errors']=[];  
}

$nickname=$first_name=$last_name=$email="";

if(isset($_SESSION['nickname']) && isset($_SESSION['first_name']) && isset($_SESSION['last_name']) &&  isset($_SESSION['email'])){
    $nickname=$_SESSION['nickname'];
    $first_name=$_SESSION['first_name'];
    $last_name=$_SESSION['last_name'];
    $email=$_SESSION['email'];
}
?>

<!-- register form -->

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-light mb-8">
                <div class="card-header">Register</div>
                <div class="card-body">
                    <form action="..\scripts\register.php" method= "POST" enctype="multipart/form-data">
                        <div class= "mb-2 ">
                            <input type="text" class="form-control" placeholder="Nickname" name="nickname" value="<?php echo $nickname;?>">
                        </div>
                        <div class= "mb-2">
                            <input type="text" class="form-control" placeholder="First Name" name="fname" value="<?php echo $first_name;?>">                              
                        </div>
                        <div class= "mb-2">
                            <input type="text" class="form-control" placeholder="Last Name" name="lname"value="<?php echo $last_name;?>" >
                        </div>
                        <div class= "mb-2">
                            <input type="email" class="form-control" placeholder="your@email.com" name="email" value="<?php echo $email;?>">
                        </div>
                        <div class= "mb-2">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <div class= "mb-3">
                            <input type="password" class="form-control" placeholder="Confirm Password" name="confirmPassword">
                        </div>                     
                        <button type = "submit" class="btn btn-primary ">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include'../layout/footer.php';
?>