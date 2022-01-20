<?php
include 'layout/header.php';//warning,jei yra klaidu
//require'';// fatal error ,ji yra klaidu
if($_GET){
    echo "Welcome ".$_GET['username']."!";
}


?>


<?php include'layout/footer.php'?>