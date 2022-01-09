<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice 1</title>
</head>
<body>
  <!-- 1 uzdavinys -->
<!-- Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos
metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų
amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)" -->
<?php
$name = 'Vaidas';
$lastName = 'Jonaitis';
$birthDate = 1990;
$date = date('Y');

$age = $date-$birthDate;

echo "As esu $name $lastName . Man yra $age metai(ų)"

?>
<br>
<!-- 2 uzdavinys -->
<!-- Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand()
jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš
mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio -->
<!-- <br>


//$num1 = rand(0,4);
//$num2 = rand(0,4);


// if($num1 >$num2 && $num2 !=0){
    Echo round(($sum = $num1/ $num2),2);
//}else if($num2 >$num1 && $num1 !=0){
    Echo round(($sum = $num2/ $num1),2);
//}else if($num1==0 || $num2==0){
   echo  'Kazkuris is skaiciu lygus 0';
//}else {
    echo   'skaičiai vienodi';
//}





<br> -->
<!-- 3 uzdavinys
Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand()
jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį
turintį vidurinę reikšmę -->
<?php

$n1 = rand(0,25);
$n2 = rand(0,25);
$n3= rand(0,25);
echo $n1.'<br>';
echo $n2.'<br>';
echo $n3.'<br>';



   
  if (( $n1 <= $n3 && $n3 <= $n2)||( $n2 <= $n3 && $n3 <= $n1)) {
    echo $n3;
    }else if (( $n2 <= $n1 && $n1 <= $n3) ||( $n3 <= $n1 && $n1 <= $n2)) {
    echo $n1;
    }
    else  {
    echo $n2;
    }






?>
<br>
<br>
<!-- 4. Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite rand() funkcija nuo 1
iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą
atspausdintų. -->
<?php
$a=rand(1,10);
$b=rand(1,10);
$c=rand(1,10);
echo $a.'<br>';
echo $b.'<br>';
echo $c.'<br>';

if(($a+$b)<$c || ($a+$c)<$b ||($b+$c)<$a) {
    echo 'Negalima sudaryti trikampį';  
}else{
    echo 'Galima sudaryti trikampį';
}


?>
<br>
<br>

<!-- 
5. Sukurkite keturis kintamuosius ir rand() funkcija sugeneruokite jiems
reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui
masyvo nenaudoti). -->

<?php
$num1 = rand(0,2);
 $num2 = rand(0,2);
 $num3 = rand(0,2);
 $num4 = rand(0,2);
 echo $num1.'<br>';
 echo $num2.'<br>';
 echo $num3.'<br>';
 echo $num4.'<br>';
 $nulis=0;
 $vienas = 0;
 $du = 0;

    if ($num1 ===0){
        $nulis++;
    }else if ($num1 === 1){
        $vienas ++;
    }else{
        $du++;
    }

    if ($num2 ===0){
        $nulis++;
    }else if ($num2 ===1){
        $vienas ++;
    }else{
        $du++;
    }

    if ($num3 ===0){
        $nulis++;
    }else if ($num3 === 1){
        $vienas ++;
    }else{
        $du++;
    }

    if ($num4 ===0){
        $nulis++;
    }else if ($num4 === 1){
        $vienas ++;
    }else{
        $du++;
    }

    echo " Nuliu yra $nulis ,vienetu yra- $vienas , dvejetu yra $du"
?>

<!-- 6. Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite
atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3> -->
<?php

$number = rand(1,6);

echo " <h$number>$number</h$number>";

?>
<br>
<br>
<!-- 7. Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už
0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni -->

<?php
$number1 = rand(-10,10);
$number2 = rand(-10,10);
$number3 = rand(-10,10);

echo 'Number1 is '.$number1.'<br>';
echo 'Number2 is '.$number2.'<br>';
echo  'Number3 is '.$number3.'<br>';
echo '<br>';

if ($number1<0){
    echo "<span style='color: green'> $number1</span>" ;
}else if ($number1>0){
    echo "<span style='color: blue'> $number1</span>" ;
}else{
    echo "<span style='color: red'> $number1</span>" ;
}

if ($number2<0){
    echo "<span style='color: green'> $number2</span>" ;
}else if ($number2>0){
    echo "<span style='color: blue'> $number2</span>" ;
}else{
    echo "<span style='color: red'> $number2</span>" ;
}

if ($number3<0){
    echo "<span style='color: green'> $number3</span>" ;
}else if ($number3>0){
    echo "<span style='color: blue'> $number3</span>" ;
}else{
    echo "<span style='color: red'> $number3</span>" ;
}





?>

<br>
<br>

 <!-- 8 Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 %
nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos
žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį
generuokite rand() funkcija nuo 5 iki 3000 -->
<?php
$zvakes = rand(5,3000);
echo $zvakes.'<br>';
$sum;


if ($zvakes <= 1000){
    $sum= $zvakes;
}else if( $zvakes <=2000){
    $sum = ($zvakes-($zvakes *0.03));
}else{
    $sum = ($zvakes-($zvakes *0.04));;
}
echo "$zvakes zvakiu kainuos $sum EUR";
?>

<br>
<br>
<!-- 9. Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki
100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes,
kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite.
Rezultatus apvalinkite iki sveiko skaičiaus -->

<?php
$numb1 = rand(0,100);
$numb2 = rand(0,100);
$numb3 = rand(0,100);
echo $numb1.'<br>';
echo $numb2.'<br>';
echo $numb3.'<br>';

$aver1=( ($numb1+$numb2+$numb3)/3);
$aver1Int = round($aver1);
$sumaSkaiciu = 0;
$skaiciuKiekis = 0;



if ($numb1>=10 && $numb1<=90 ){
    $sumaSkaiciu  +=$numb1;
    $skaiciuKiekis++;
} 
if($numb2>=10 && $numb2<=90 ){
    $sumaSkaiciu  +=$numb2;
    $skaiciuKiekis++;
}
 if( $numb3>=10 && $numb3<=90 ){
    $sumaSkaiciu  +=$numb3;
    $skaiciuKiekis++;
}

if ( $skaiciuKiekis!==0){
    $aritVid=round($sumaSkaiciu/$skaiciuKiekis);
    
}else{
    echo 'Visi skaiciai netenkina salygos';
}



echo "Pirmas vidurkis $aver1Int, antras vidurkis  $aritVid";


?>


<!-- 10. Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom,
minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). Sugeneruokite skaičių
nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko.
Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių -->
<br>
<br>
<?php
$h= rand(0,23);
$min = rand(0,59);
$sek = rand(0,59);
$sekRand= rand(0,300);
echo 'Pridedam '.$sekRand.' sekundziu <br>';
$oldTime= ($sek+($min*60)+($h*3600));
$sumSek=($oldTime+$sekRand);



if($sumSek>86400){
    $sumSek1 =$sumSek-86400;
    $newH= ($sumSek1/3600);
    $newHInt =(int)$newH;
    $newMin=(($sumSek1-($newHInt*3600))/60);
    $newMinInt =(int)$newMin;
    $newSek=$sumSek1-(($newHInt*3600)+($newMinInt*60));
}else if ($sumSek<86400){
    $newH= ($sumSek/3600);
    $newHInt =(int)$newH;
    $newMin=(($sumSek-($newHInt*3600))/60);
    $newMinInt =(int)$newMin;
    $newSek=$sumSek-(($newHInt*3600)+($newMinInt*60));
}else{
    $newHInt=0;
    $newMinInt =0;
    $newSek=0;
}



echo "Senas  laikas $h : $min : $sek".'<br>';
echo "Naujas laikas $newHInt : $newMinInt : $newSek".'<br>';
echo '<br>';
echo '<br>';
$valandos = rand(0,23);
$minutes = rand(0,59);
$sekundes = rand(0,59);

echo "$valandos:$minutes:$sekundes<br>";

$papildSekundes = rand(0,300);

echo "Papildomos sekundės: $papildSekundes<br>";

$sekundes += $papildSekundes % 60;
$minutes += floor($papildSekundes / 60); 

if ($sekundes > 59) {
    $sekundes -= 60;
    $minutes++;
}

if ($minutes > 59) {
    $minutes -= 60;
    $valandos++;
}

if ($valandos > 23) {
    $valandos -= 24;
}

echo "$valandos:$minutes:$sekundes<br>";


?>

</body>
</html>