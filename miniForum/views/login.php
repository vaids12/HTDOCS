<?php include'../layout/header.php'?>
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-light mb-8">
                <div class="card-header">LOGIN</div>
                <div class="card-body">
                    <form action="..\scripts\login.php" method= "POST" enctype="multipart/form-data">
                        <div class= "mb-2">
                      
                                <input type="nickname" class="form-control" placeholder="Nickname" name="nickname">
                        </div>
                        <div class= "mb-3">
                                <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <button type = "submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>







<?php
include'../layout/footer.php';
?>