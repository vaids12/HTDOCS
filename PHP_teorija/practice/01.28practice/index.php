<?php
// $a=15;
// $b=25;

// echo 'pirmas uzdavinys <br>';

// if($a>$b){
//     echo 'Pirmas skaičius yra didesnis';
// }else if($b>$a){
//     echo 'Antras skaičius yra didesnis';
// }else{
//     echo 'Skaičiai yra lygūs';
// }
// echo "<br>";

// echo 'antras uzdavinys <br>';

// for($i=1;$i<11; $i++){
//     echo $i.',';
// }
// echo "<br>";

// echo '3 uzdavinys <br>';


// for ($i=0;$i<11; $i+=2){
//     echo $i.',';
// }
// echo "<br>";

// echo '4 uzdavinys <br>';

// for ($i=1; $i<6; $i++){
//     $z=rand(1,10);
//     echo $z.',';
// }
// echo "<br>";

// echo '5 uzdavinys <br>';

// $z=0;
// while ($z!==5){
//      $z=rand(1,10);
//      echo $z.',';
// }
// echo "<br>";

// echo '6 uzdavinys <br>';

// $newArray = [];

// for($i=1; $i<31; $i++){
//     $z=rand(5,25);
//     array_push($newArray,$z);
// }
//  var_dump($newArray);

//  echo "<br>";

//  echo '7 uzdavinys <br>';
//  $array = [];
//  $j=rand(20,30);

// for($i=0; $i<$j; $i++){
//     $z=rand(10,30);
//     array_push($array,$z);
// }
//  var_dump($array);
//  $countArray=count($array);
//  $ln=0;
//  for ($n=0; $n<($countArray); $n++){
//      if ($ln<=$array[$n]){
//          $ln=($array[$n]);
//      }
//  }
//  echo "<br>";
//  echo $ln;
//  echo "<br>";

// 9 uzdavinys

function prime($x){
    
    if (is_int($x)){
        if($z<=1){
            return 'Skaičius nėra pirminis';
        }
        for($i=2; $i<$z; $i++){
            if($z%$i==0){
                 return 'Skaičius nėra pirminis';
            }          
        }
        return 'Skaičius yra pirminis';
        
    }else{
        return 'Ivestas ne skaičius'
    }
}




echo '10 uzdavinys <br>';
var_dump($_GET);

if($_SERVER['REQUEST_METHOD']=="GET"){

    if (is_numeric($_GET['number']) && strlen($_GET['number'])==6 ){
        $color='#'.$_GET['number'];
    }
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
<body style="background-color:  <?php echo $color;?>">

    <form action="http://localhost/PHP_teorija/practice/01.28practice/"  method="GET">
        <input type="number" name="number">
         <button type= "submit">SUBMIT</button>
    </form>
 

</body>
</html>



