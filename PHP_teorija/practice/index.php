<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Sugeneruoti stringa i html su dviem kintamaisiais-->
    <!-- Rezultatas paragrafe "Mano vardas Marius ir aš esu iš miesto Klaipėdos" -->
<?php
$name ="Jonas";
$city = "Klaipeda";
echo "<br>";
// sugeneruoti visa paragrafa

echo " <p> Mano vardas ".$name." ir aš esu iš miesto ".$city. "</p>";


?>
    <p>Mano vardas <?php echo $name ?> ir as esu is miesto <?php echo $city?> </p>
<!-- Panaudoti pavadinima "PHP practice"  kaip kintamaji ir ji ideti i h1 taga ir i a taga-->
<?php
$title = "PHP practice";
?>

    <h1><?php echo $title; ?></h1>
    <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident iusto aliquid blanditiis quo quas minus laudantium sit soluta, similique sequi facilis repellat voluptas cum maiores magni doloremque distinctio, expedita sed. <a href="#"><?php echo $title; ?></a></p>
   
    <?php
    
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ipAddress = $_SERVER ['HTTP_CLIENT_IP'];
    }else if (!empty($_SERVER['HTTP_X_FORWARDER_FOR'])){
        $ipAddress =$_SERVER['HTTP_X_FORWARDER_FOR'];
    }else{
        $ipAddress =$_SERVER['REMOTE_ADDR'];
    }
    $browser=  $_SERVER['HTTP_USER_AGENT'];

   
    ?>
    <h3><?php echo $ipAddress; ?></h3>
    <h3><?php echo $browser; ?></h3>
<?php
 echo $abc;
 print_r(error_get_last());// rodo klaidas

?>
 
<h1>Elektros sąskaita</h1>

<ul>
    <li>For first 50 units- 3,5 Eur/Unit</li>
    <li>For next 100 units- 4 Eur/Unit</li>
    <li>For next 100 units- 5,2 Eur/Unit</li>
    <li>For units above 250 units- 6,50 Eur/Unit</li>
</ul>
<?php

$units = 15623;
$result = calculateBill($units);
$resultStr = "total amount of ".$units."-".$result." EUR";

function calculateBill($units){
    $firstCost= 3.5;
    $secondCost = 4;
    $thirdCost = 5.2;
    $fourthCost = 6.5;

    if($units<=50){
        $bill = $units* $firstCost;
    }else if ($units>50 && $units<= 150){
        $temp = 50* $firstCost;
        $remainingUnits = $units-50;
        $bill = $temp + ($remainingUnits*$secondCost);
    } else if ($units>150 && $units <=250){
        $temp = (50*$firstCost)+(100*$secondCost);
        $remainingUnits  = $units-150;
        $bill = $temp + ($remainingUnits*$thirdCost);

    }else{
        $temp = (50*$firstCost)+(100*$secondCost)+(100* $thirdCost);
        $remainingUnits = $units-250;
        $bill =  $temp + ($remainingUnits*$fourthCost);
    }
    return  number_format((float)$bill,2,",",' ');

}
//Salyga. Reikia parasyti i paragrafa, ar asmuo gali balsuoti ar ne. Asmuo turi tureti varda ir amziu. Balsuoti gali turi 18 metu

  





?>
<?php
 $name = "Jonas";
$age = 18;
$rezult;


 

if($age >=18){
$rezult = "$name"." gali balsuoti , nes jis  turi " .$age." metus";
}else{
$rezult = "$name "." negali balsuoti, nes jis  turi " .$age." metus";
} 



?>

<p><?php echo $resultStr ?></p>
<br>

<p><?php echo $rezult ?></p>
<h3>Palindromas</h3>
<?php
$word = "stalas";

$wordReverse = strrev($word);
$text;

if ($word == $wordReverse){
    $text = "zodis ".$word." yra Palindromas";
}else{
    $text = "zodis ".$word." nera Palindromas";
}


?>
<p><?php echo $text ;?></p>
</body>
</html>