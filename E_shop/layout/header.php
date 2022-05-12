<!-- <?php 
session_start();
?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>

<body  >

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
    <a href="#" class="navbar-brand" style="color:blue; "><i style="margin:5px;" class="fa-solid fa-dragon"></i>E-SHOP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarItems" aria-controls="navbarItems" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarItems">
           
            <!-- Authentication links -->
            <ul class="navbar-nav ms-auto">
                <?php
                

                if(!isset($_SESSION['nickname'])){

                          echo"<li class='nav-item'>
                            <a href='http://localhost/E_shop/views/login.php' class='nav-link' style='color:blue; ' >Login</a>
                            </li>
                            <li class='nav-item'>
                            <a href='http://localhost/E_shop/views/register.php' class='nav-link'  style='color:blue; '>Register</a>
                            </li>";
                    }else{                
                        if($_SESSION['role_id']==1){
                        echo"
                            <li class='nav-item'>
                                <a href='http://localhost/E_shop/views/main.php' class='nav-link' style='color:blue;'>Product List</a>
                            </li>
                            <li class='nav-item'>
                                <a href='http://localhost/E_shop/views/user.php' class='nav-link' style='color:blue;'>User list</a>
                            </li>
                            ";  
                           
                        } 
                         echo"
                            <li class='nav-item'>
                                <a href='http://localhost/E_shop/scripts/logout.php' class='nav-link' style='color:blue;'>Logout</a>
                            </li>"   ;           
               }
                   
                ?>
            
                
                
            </ul>
        </div>
        </div>
    </nav>
    
    </script>