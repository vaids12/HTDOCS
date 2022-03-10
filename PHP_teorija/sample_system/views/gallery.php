<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
include'../layout/header.php';

?>
<div style=" display:flex ; flex-flow: row nowrap; justify-content: center">
    <div style="margin:10px ">
        <img src="../uploads/nuotrauka.jpg" alt=""  width= "400px"; height= "450px">
    </div>
    <div style="margin:10px  ">
        <img src="../uploads/nuotrauka1.jpg" alt="" width= "400px"; height= "450px" >
    </div>
    <div style="margin:10px  ">
        <img src="../uploads/nuotrauka2.jpg" alt="" width= "400px"; height= "450px" >
    </div>
    <div style="margin:10px  ">   
        <img src="../uploads/nuotrauka3.jpg" alt="" width= "400px"; height= "450px" >
    </div>

</div>


    

<?php
include'../layout/footer.php';
?>