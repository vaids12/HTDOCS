<?php 
include '../layout/header.php';
$metr= $kilometr= $mylia= $jurmylia = 0;

if(isset($_POST['submit']) && ($_POST['number1'] !==0 || $_POST['number2'] !==0 || $_POST['number3'] !==0 || $_POST['number4'] !==0) ){  
    if($_POST['number1'] >0 || $_POST['number2'] >0 || $_POST['number3'] >0 || $_POST['number4'] >0){

    }
    $metr = $_POST['number1'];  
   $kilometr = $_POST['number2'];  
   $mylia = $_POST['number3'];  
   $jurmylia = $_POST['number4'];
 


   if ($metr>0){
       $kilometr = $metr/1000;
       $mylia = $metr/1609.344;
       $jurmylia = $metr/1852; 
     
   }elseif ($kilometr>0){
    $metr = $kilometr *1000;
    $mylia = $kilometr/1.609344 ;
    $jurmylia =$kilometr/1.852 ;
  
    }elseif ($mylia>0){
        $metr = $mylia*1609.344;
        $kilometr =$mylia*1609.344/1000;
        $jurmylia =$mylia*1609.344/1852;  
      
    }else if ( $jurmylia>0){
        $metr = $jurmylia*1852;
        $kilometr = $jurmylia*1852/1000;
        $mylia= $jurmylia*1852/1609;
       
    } 

   

} 
?>
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header">
                   <h5>Atstumų skaičiuotuvas</h5>
                </div>
                <div class= "card-body">
                    
                    <form method="POST" enctype="multipart/form-data" >  
                       Atstumas metrais: 
                        <input type="number" name="number1"  value ="<?php echo $metr;?>"><br><br>  
 
                        Atstumas kilometrais:
                        <input type="number" name="number2"  value ="<?php echo $kilometr;?>"><br><br>  
                        Atstumas myliomis: 
                        <input type="number" name="number3" value ="<?php echo $mylia;?>" ><br><br> 
                        Atstumas jūrmylėmis: 
                        <input type="number" name="number4"  value ="<?php echo $jurmylia;?>"><br><br> 
                        <input  type="submit" name="submit" value="Skaičiuoti"> <br><br> 
                     </form> 
                        
                    
                </div>
                
            </div>
        </div>
    </div>
</div>




<?php
include '../layout/footer.php';
?>