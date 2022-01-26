<?php 
include '../layout/header.php';
$rezult= "Jūsų KMI bus čia!";
$color = "primary";

 $number1 = $number2 = 0;
    if(isset($_POST['submit'])){  
         $number1 = $_POST['number1'];  
        $number2 = $_POST['number2'];  
        $sum = round($number1/(($number2/100)^2),2);  
      
        $rezult= "Jūsų KMI: ".$sum.". Optimalus KMI yra nuo 18,5 iki 25";
            if ( $sum<18.5 ||  $sum>25 ){ 
                $color = "danger" ;
            }else {
                 $color= "success";
            }

    }




?>

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header">
                   <h5>KMI Skaičiavimas</h5>
                </div>
                <div class= "card-body">
                    
                    <form method="POST" enctype="multipart/form-data" >  
                        <p >Įveskite savo svorį kilogramais:</p>
  
                        <input type="number" name="number1" placeholder = " Svoris kilogramais"><br><br>  
 
                        <p >Įveskite savo ūgį centimetrais:</p> 
                        <input type="number" name="number2" placeholder = " Ūgis centimetrais"><br><br>  
                        <input  type="submit" name="submit" value="Skaičiuoti"> <br><br>   
                     </form> 
                        <div class="alert alert-<?php echo $color;?>" role="alert">
                             <?php echo $rezult; ?>
                        </div>      
                    
                </div>
                
            </div>
        </div>
    </div>
</div>


<?php
include '../layout/footer.php';
?>