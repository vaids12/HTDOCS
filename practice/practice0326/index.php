<pre>
<?php

// 1. Sukurti masyvą (piniginę), kurio ilgis yra atsitiktinis nuo 10 iki 30, o reikšmės atsitiktiniai skaičiai nuo 0 iki 10 (pinigai);

echo "1 uzdavinys <br>";
$array=[];

$j=rand(10,30);

for($i=0; $i<$j; $i++){
    array_push($array,(rand(0,10)));
}

var_dump($array);



// 2. Naudojant ciklą apskaičiuoti masyvo iš 1 uždavinio reikšmių (pinigų esančių piniginėje) sumą;

echo " <br> 2 uzdavinys <br>";

$sum=0;
$count=count($array);


for($i=0 ;$i<$count; $i++ ){
    $sum=$sum+$array[$i];
   
}

echo $sum;


// 3. Naudojant ciklą apskaičiuoti masyvo iš 1 uždavinio popierinių pinigų (skaičių didesnių už 2 ) reikšmių sumą;

echo " <br> 3 uzdavinys <br>";

$sum3=0;
$count=count($array);

for($i=0; $i<$count; $i++){
    if($array[$i]>2){
        $sum3=$sum3+$array[$i];     
    }
}

echo $sum3;


// 4. Išleisti visus metalinius pinigus (reikšmes, kurios yra mažesnės arba lygios 2 padaryti lygias 0) iš 1 uždavinio;

echo " <br> 4 uzdavinys <br>";


$count=count($array);

for($i=0; $i<$count; $i++){
    if($array[$i]<3){
      $array[$i]=0;     
    }
}

var_dump($array);

// 5. Surasti didžiausią reikšmę 1 uždavinio masyve ir paskaičiuoti kiek tokių didžiausių reikšmių masyve yra;

echo " <br> 5 uzdavinys <br>";

$max=0;
$rep=0;
$count=count($array);

for($i=0; $i<$count; $i++){
    if($array[$i]>$max){
      $max=$array[$i];
    }
}
for($i=0; $i<$count; $i++){
    if($array[$i]==$max){
        $rep=$rep++;
    }
}

echo "didziausias skaicius yra: ".$max.", jis yra ".$rep." kartu.";

// 6. Visus masyvo elementus, kurie yra lygūs 0, pakeisti į tų elementų indeksų (vietų,numerių) reikšmes;

echo " <br> 6 uzdavinys <br>";
$count=count($array);

for($i=0; $i<$count; $i++){
    if($array[$i]==0){
     $array[$i]=$i;
    }
}

var_dump($array);


// 7. Į 1 uždavinio masyvą pridėti tiek naujų reikšmių (pinigų, atsitiktinių skaičių nuo 0 iki 10),kad masyvo ilgis būtų lygiai 30;

echo " <br> 7 uzdavinys <br>";


$count=count($array);

for($i=0; $i<(30-$count); $i++){
    array_push($array,(rand(0,10)));
}

var_dump($array);


// 8. Naudojant 1 uždavinio masyvą iš jo reikšmių sukurti dar du papildomus masyvus. Į vieną iš 1 uždavinio masyvo pridėti reikšmes mažesnes arba lygias 2 (monetas), o į kitą didesnes nei 2 (popierinius pinigus);

echo " <br> 8 uzdavinys <br>";

$array1=[];
$array2=[];

$count=count($array);

for($i=0; $i<$count; $i++){
    if($array[$i]<3){
       array_push($array1,$array[$i]);   
    }else{
        array_push($array2,$array[$i]); 
    }
}

var_dump($array1);
echo"<br>";
var_dump($array2);

// 9. Sukurti masyvą (piniginę su dviem skyreliais) iš dviejų elementų, kurio pirmas elementas būtų masyvas iš 8 uždavinio su monetom, o antras elementas masyvas iš 8 uždavinio su popieriniais pinigais;

echo " <br> 9 uzdavinys <br>";

$array3=[];
$count1=count($array1);
$count2=count($array2);

for($i=0; $i<$count1; $i++ ){
   $array3[0][$i]=$array1[$i];
}
for($i=0;$i<$count2; $i++ ){
    $array3[1][$i]=$array2[$i];
}

var_dump($array3);


// 10. Į 9 uždavinio masyvą, piniginę su dviem skyreliais, pridėti trečią skyrelį- masyvą su kortelėm: ['KIKA', 'Euro Vaistinė', 'Drogas', 'Ačiū', 'Lietuvos Geležinkeliai', 'Mano RIMI'];

echo " <br> 10 uzdavinys <br>";

$array4=['KIKA', 'Euro Vaistinė', 'Drogas', 'Ačiū', 'Lietuvos Geležinkeliai', 'Mano RIMI'];

$count4=count($array4);

for($i=0; $i<$count4; $i++ ){
    $array3[2][$i]=$array4[$i];
 }

 print_r($array3);

// 11. Korteles skyrelyje sudėlioti (išrūšiuoti) pagal abėcėlę;

echo " <br> 11 uzdavinys <br>";
sort($array3[2]);
print_r($array3);

// 12. Į kortelių skyrelį pridėti mokėjimo kortelių 'MasterCard', 'Visa' (su rand generuokite atsitiktines reikšmes 'MasterCard' arba 'Visa' ir rašykite į masyvą) iš skirtingų bankų tiek,kad skyrelis (masyvo ilgis) pasidarytų lygus 20;

echo " <br> 12 uzdavinys <br>";

$array5=['MasterCard','Visa'];
$count=count($array3[2]);

 while($count<30){
    $array3[2][$count]=$array5[rand(0,1)];
    $count++;
 }
 print_r($array3);

// 13. Paskaičiuokite, kokio tipo kortelių ('MasterCard' arba 'Visa') yra daugiau;

echo " <br> 13 uzdavinys <br>";

$master=0;
$visa=0;
$count=count($array3[2]);

  for($i=0; $i<$count;$i++){
     if ( $array3[2][$i]==="MasterCard"){
         $master++;
     }elseif( $array3[2][$i]==="Visa"){
         $visa++;
     }  
     }               

echo "Visa ".$visa."<br>";
echo "Master ".$master."<br>";

if($master>$visa){
    echo 'MasterCard korteliu daugiau';
}elseif($master<$visa){
     echo 'Visa korteliu daugiau';
}else{
    echo ' Korteliu vienodai';
}



// 14. Sukurkite masyve (piniginėje) ketvirtą elementą (skyrelį) į kurį įdėkite 10 loterijos bilietų,kurių numerius sugeneruokite atsitiktinai su rand funkcija nuo 1000000000 iki9999999999;

echo " <br><br> 14 uzdavinys <br>";

for($i=0; $i<10; $i++ ){
    $array3[3][$i]=rand(1000000000,9999999999);
 }

 print_r($array3);

// 15. Loterijos bilietų masyvą išrūšiuoti nuo didžiausio numerio iki mažiausio;

echo " <br><br> 15 uzdavinys <br>";

sort($array3[3]);
print_r($array3);

// 16. Į piniginės popierinių pinigų skyrelį įdėti bent 500 pinigų mažom kupiūrom ( generuoti atsitiktinius skaičius nuo 3 iki 10 ir dėti kaip naujus elementus, kol įdėta suma bus lygi arba viršys 500);

echo " <br><br> 16 uzdavinys <br>";

$sum=0;
$count=count($array3[1]);

while($sum <= 500){
        $array3[1][$count]=rand(3,10);
        $sum=$sum+($array3[1][$count]);
        $count++;
  
}

echo $sum."<br>";
print_r($array3);

// 17. Patikrinti ar ką nors laimėjote. Bilieto numerius dalinkite iš 777 ir jeigu numeris išsidalinsbe liekanos - jūs laimėjote! Suskaičiuokite, kiek buvo laimingų bilietų.

echo " <br><br> 17 uzdavinys <br>";

$sum=0;
$count=count($array3[3]);

for($i=0; $i<$count; $i++ ){
   If(($array3[3][$i])%777===0){
    $sum++;
   } 
 }

 echo "Laimingu bilietu ".$sum;



// 18. Sukurkite penktą skyrelį ir į jį sudėkite nuotraukas: ['šuo', 'katė', 'automobilis', 'namas','kiemas'] ir jas išrūšiuokite pagal žodžių ilgį taip, kad pirma eitų trumpiausi žodžiai;

echo " <br><br> 18 uzdavinys <br>";

$array6=['šuo', 'katė', 'automobilis', 'namas','kiemas'];
$count=count($array6);

for($i=0; $i<$count; $i++ ){
    $array3[4][$i]=$array6[$i];
 }

 usort($array3[4],function($a,$b){
     return strlen($a)>strlen($b);
 });



 print_r($array3);