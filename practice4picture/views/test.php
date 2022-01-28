<?php 
include '../layout/header.php';
$answer1=$answer2="";

?>
<div class="container py-4 ">
    <div class="row justify-content-center ">
        <div class="col-md-8 ">
            <div class="card bg-light mb-8 " >
            <div class="card-header  ">TESTAS</div>
                <div class= "card-body">

               
               
<form action="http://localhost/practice4picture/scripts/testScript.php" method="POST">
<div>
1. Ilgiausia Lietuvos upė :
</div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="question1" id="A1" value="A" >
        <label class="form-check-label" for="A1">
        Neris
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="question1" id="B1" value="B" >
        <label class="form-check-label" for="B1">
        Nemunas
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="question1" id="C1" value="C" >
        <label class="form-check-label" for="C1">
        Venta
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="question1" id="D1" value="D" >
        <label class="form-check-label" for="D1">
       Merkys
        </label>
    </div>
    <br>
    <div>
    2. Gilausias  Lietuvos ežeras :
</div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="question2" id="A2" value="A" >
        <label class="form-check-label" for="A2">
        Tauragnas
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="question2" id="B2" value="B" >
        <label class="form-check-label" for="B2">
        Asveja
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="question2" id="C2" value="C" >
        <label class="form-check-label" for="C2">
        Vištytis
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="question2" id="D2" value="D" >
        <label class="form-check-label" for="D2">
       Platelių
        </label>
        </div>
        <br>
        <div>
    3. Didžiausias  Lietuvos ežeras :
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="question3" id="A3" value="A" >
        <label class="form-check-label" for="A3">
       Dysna
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="question3" id="B3" value="B" >
        <label class="form-check-label" for="B3">
        Sartai
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="question3" id="C3" value="C" >
        <label class="form-check-label" for="C3">
        Drūkšiai
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="question3" id="D3" value="D" >
        <label class="form-check-label" for="D3">
     Dusia
        </label>
        <br>
        <br>
        
    </div>



        <button class="btn btn-primary " type="submit">Pateikti atsakymus</button>
    </form>
  

    </div>
            </div>
        </div>
    </div>
</div>
 

<?php
include '../layout/footer.php';
?>