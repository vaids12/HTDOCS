<?php


// $question= ['$question1','$question2','$question3'];

// $question1= "Ilgiausia Lietuvos upė : ";
// $answer11= " Neris";
// $answer12= "Nemunas";
// $answer13= "Venta";
$color1=$color2=$color3='';


// $question2= "Gilausias  Lietuvos ežeras : ";
// $answer21= " Tauragnas";
// $answer22= "Asveja";
// $answer23= "Vištytis";

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if($_POST['question1']=== 'B'){
       $answer1=  " 1 Klausimo atsakymas teisingas";
       $color1= "black";
    }else{
        $answer1=  " 1 Klausimo atsakymas neteisingas";
        $color1= "red";
    }
    if($_POST['question2']=== 'A'){
        $answer2=  " 2 Klausimo atsakymas teisingas";
        $color2= "black";
     }else{
         $answer2=  "2 Klausimo atsakymas neteisingas";
         $color2= "red";
       
     }
     if($_POST['question3']=== 'C'){
        $answer3=  " 3 Klausimo atsakymas teisingas";
        $color3= "black";
     }else{
         $answer3=  "3 Klausimo atsakymas neteisingas";
         $color3= "red";
       
     }
     include '../views/test_view.php';

}else{
    include '../views/test.php';
}

?>