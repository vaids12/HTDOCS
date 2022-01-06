<?php

// Arrays

$array = array();
$array2 = [];

$cars = array("BMW", "Audi", "Skoda", "Opel");

$trees = ["Berzas", "Liepa", "Azuolas"];

var_dump($cars);
var_dump($trees);

echo "<br>".$cars[1];

// masyvo ilgis (lenght)

echo count($trees);

// Associative Array

$prices = [
    "Pienas"=>1.99,
    "Duona"=>2.99,
    "Sviestas"=>2.59,
];
//pienas =key, kaina = value

function br(){
    echo "<br>";
}

br();

echo "Pienas kainuoja ".$prices['Pienas'];

$prices['Vanduo']= 0.99;
$prices['Pienas']= 2.09;

br();

var_dump($prices);

//Multidimensional Arrays

//2 Dimensiju masyvas

// Vardas | Amzius | Miestas
// Petras |   25   | Kaunas
// ...... |....... |......  


$students = [
    [ "Petras", 25, "Kaunas" ],
    ["Jonas", 30, "Vilnius"],
    [ "Janina", 45 , "Kaunas"],

];

br();

var_dump($students);

br();

echo $students[0][0]." ".$students[0][2];

//Muitidimensiniai asocijuoti masyvai

$participants =[
    "Petras"=>[
        "amzius"=>25,
        "miestas"=> "Kaunas",
        "kursas" => "PHP",
    ],
    "Jonas"=>[
        "amzius"=>30,
        "miestas"=>"Vilnius",
        "kursas"=>"JAVA",
    ],
    "Janina"=>[
        "amzius"=>45,
        "miestas"=>"Kaunas",
        "kursas"=> "PHP",
    ],

];

br();
echo $participants['Petras']['amzius'];

//Ciklai - Loops

//while - ciklas vykdomas kol salyga teisinga

//do ... while - kodas vykdomas viena karta, ir tada  tol kol salyga teisinga

// for - tam tikra skaiciu kartu

//foreach - pakartoja kodo bloka kiekvienam masyvo elementui

$a= 0;
while($a<2){
    br();
    echo $a;
   $a++;
}

$b = 20;

do{
br();
echo $b;
$b++;
}while($b<15);

$numbers =[];
for ($i=0; $i<5; $i++){
    br();
    echo "skaitliukas yra ".$i;
    // $numbers[$i] = $i;
    array_push($numbers,$i);
}
br();
var_dump($numbers);

// for($row = 0; $row<=count($students); $row++){
//     $student = $students[$row];
//     for ($col=0; $col<=count($student); $col++){
//         br();
//         echo $student[$col];

//     }
// }


br();


foreach($cars as $value){
    echo $value ;
    br();
}

foreach($prices as $key => $value){
    echo $key." price is ".$value;
    br();
}

foreach($participants as  $name =>$participant){
    echo $name." ". $participant['amzius'];
    br();
}


$z=0;
foreach($students as $student){
    
    echo $student[$z];
    $z++;
    br();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Arrays</h1>
    <ol>
        <li>Index Array - paprastas masyvas</li>
        <li>Associative array - naudojami "keys", kuriems priskiriamos reiksmes</li> 
        <li>Multidimensional array - masyvas masyve</li>
    </ol>

    <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>City</th>
            <th>Course</th>
        </tr>
        <?php
        $z= 0;
        foreach($participants as $name => $participant ){
            if($participant['kursas'] =="PHP"){
                  echo "<tr><td>".$name."</td><td>".$participant['amzius']."</td><td>".$participant['miestas']."</td><td>".$participant['kursas']."</td></tr>";
                  $z++;
            }else{
                unset($participants[$name]);//istrinti 
            }
          
        }
        ?>
    </table>

    <?php
    echo $z;
    br();
    print_r($participants);
    br();
    var_dump($participants);
    br();
    print ("<pre>".print_r($participants, true)."</pre>");
    
    ?>
</body>
</html>