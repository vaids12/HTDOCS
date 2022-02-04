<?php

//  echo ' 1 Uzdavinys <br>';


// for($i=1; $i<5 ; $i++){
//     echo rand(0,100).',';
// }
// echo '<br><br>';
// echo ' 2 Uzdavinys <br>';


// $a=$b=$c=$d=0;
// $a=rand(0,100);
// $b=rand(0,100);
// $c=rand(0,100);
// $d=rand(0,100);

// echo $a.','.$b.','.$c.','.$d;
// echo '<br>';

//     If($a%2!==0){
//        $a=$a*2;
//     }
//     If($b%2!==0){
//         $b=$b*2;
//      }
//      If($c%2!==0){
//         $c=$c*2;
//      }
//      If($d%2!==0){
//         $d=$d*2;
//      }


//  echo $a.','.$b.','.$c.','.$d;

// echo '<br><br>';
// echo ' 3 Uzdavinys <br>';

// $i= rand(1,7);
// echo $i.'<br>';

// if($i ==1){
//     echo 'Pirmadienis';
// }elseif($i==2){
//     echo'Antradienis';
// }elseif($i==3){
//     echo'Trečiadienis';
// }elseif($i==4){
//     echo'Ketvirtadienis';
// }elseif($i==5){
//     echo'Penktadienis';
// }elseif($i==6){
//     echo'Šeštadienis';
// }else{
//     echo'Sekmadienis';
// }
// echo '<br><br>';
// echo ' 4 Uzdavinys <br>';

//  if($i>0 && $i<6){
//     echo'Darbo diena';
//  }else{
//      echo 'Savaitgalis';
//  }

//  echo '<br><br>';
// echo ' 5 Uzdavinys <br>';

// for ($i=1; $i<5 ; $i++){
//     $z5= rand(0,100);
//     if($z5%3==0){
//         echo "<span style='color:green;'>$z5</span> , ";
       
//     } elseif($z5%3==1){
//         echo "<span style='color:yellow;'>$z5</span>, ";
       
//      }elseif($z5%3==2){
//         echo "<span style='color:red;'>$z5</span>, ";
       
//      }
// }


// echo '<br><br>';
// echo ' 6 Uzdavinys <br>';

// For ($i=0; $i<101; $i++){
//     echo $i.',';
// }

// echo '<br><br>';
// echo ' 7 Uzdavinys <br>';

// For ($i=0; $i<201; $i+=2){
//     echo $i.',';
// }

// echo '<br><br>';
// echo ' 8 Uzdavinys <br>';

// For ($i=0; $i<201; $i+=2){
//     if($i%6==0 ){
//         echo "<span style='color:blue;'>$i</span>, ";
//     }else{
//          echo $i.','; 
//     }
  
// }

// echo '<br><br>';
// echo ' 9 Uzdavinys <br>';
// $i=-1;
// while($i%5!==0){
//     $i=rand(1,50);
//     echo $i.',';
// }

// // For ($i=0; $i<1000; $i++){
// //     $z=rand(1,50);
// //     if($z%5==0){
// //         echo $z;
// //         break;
// //     }else{
// //         echo $z.','; 
// //     }
// // }

// echo '<br><br>';
// echo ' 10 Uzdavinys <br>';

// $i=-1;
// while($i%5!==0 && $i%11!==0 ){
//     $i=rand(1,100);
//     echo $i.',';
// }

// // For ($i=0; $i<1000; $i++){
// //     $z=rand(1,50);
// //     if($z%5==0 || $z%11==0){
// //         echo $z;
// //         break;
// //     }else{
// //         echo $z.','; 
// //     }
// // }
// echo '<br><br>';
// echo ' 11 Uzdavinys <br>';
// $sum =0;

// while($sum<=150){
//     $z= rand(1,10);
//     $sum=$sum+$z;
// }
// echo $sum;

// echo '<br><br>';
// echo ' 12 Uzdavinys <br>';
// $sum =0;
// $num=0;

// while($sum<=120){
//     $z= rand(1,10);
//     $sum=$sum+$z;
//     $num++;
// }

// echo 'Suma= '.$sum.'. Sugeneruota '.$num.' skaiciu';

// echo '<br><br>';
// echo ' 13 Uzdavinys <br>';
// $sum =0;
// $maxNum=1;
// $minNum=15;

// while($sum<=175){
//     $z= rand(1,15);
//     echo $z.',';
//     $sum=$sum+$z;
//     if ($z>$maxNum){
//         $maxNum=$z;
//     }
//     if($z<$minNum){
//         $minNum=$z;
//     }
// }

// echo '<br> Suma= '.$sum.'. Maziausias skaicius '.$minNum.'. Didziausias skaicius '.$maxNum;


// echo '<br><br>';
// echo ' 14 Uzdavinys <br>';
// $sum =0;
// $num=0;

// while($sum<=200){
//     $z= rand(1,15);
//     echo $z.',';
//     $sum=$sum+$z;
//     $num++;
// }

// echo '<br> Suma= '.$sum.'. Skaiciu vidurkis '.$sum/$num;

// echo '<br><br>';
// echo ' 15 Uzdavinys <br>';

// $array=[];

// for($i=1; $i<=100; $i++){
//     array_push($array,$i);
// }
// echo '<br>';
// var_dump($array);

// echo '<br><br>';
// echo ' 16 Uzdavinys <br>';

// $newArray=[];

// for($i=0; $i<100; $i++){
//     array_push($newArray,rand(10,25));
// }
// echo '<br>';
// var_dump($newArray);


echo '<br><br>';
echo ' 17 Uzdavinys <br>';

$number=rand(40,60);
$Narray=[];

for($i=0; $i<$number; $i++){
    array_push($Narray,($i+1));
}
echo '<br>';
var_dump($Narray);

// echo '<br><br>';
// echo ' 18 Uzdavinys <br>';

// $atArray=[];
// $l=rand(80,120);
// for($i=0; $i<$l; $i++){
//     array_push($atArray,rand(5,47));
// }
// echo '<br>';
// var_dump($atArray);

// echo '<br><br>';
// echo ' 19 Uzdavinys <br>';

// $leters=['D','E','F','G','H'];
// $letersDEFGH=[];

// for($i=0; $i<100; $i++){
//     array_push($letersDEFGH,$leters[rand(0,4)]);
// }

// echo '<br>';
// var_dump($letersDEFGH);

echo '<br><br>';
echo ' 20 Uzdavinys <br>';

$leters1=['M','N','O','P'];
$letersMNOP=[];
$M=$N=$O=$P=0;

for($i=0; $i<100; $i++){
    array_push($letersMNOP,$leters1[rand(0,3)]);
}

foreach($letersMNOP as $leter){
    if($leter=='M'){
        $M++;
    }elseif($leter=='N'){
        $N++;
    }elseif($leter=='O'){
        $O++;
    }elseif($leter=='P'){
        $P++;
    }
}
var_dump($letersMNOP);
echo '<br>';

If($M>$N && $M>$O && $M>$P){
    Echo 'Daugiausia yra raidziu M. Ju yra  '.$M;
}elseif($N>$M && $N>$O && $N>$P){
    Echo 'Daugiausia yra raidziu N. Ju yra  '.$N;
}elseif($O>$M && $O>$N && $O>$P){
    Echo 'Daugiausia yra raidziu O. Ju yra  '.$O;
}elseif($P>$M && $P>$N && $P>$O){
    Echo 'Daugiausia yra raidziu P. Ju yra  '.$P;
}

// echo '<br><br>';
// echo ' 21 Uzdavinys <br>';

// $array21=[];

// for($i=0;$i<100; $i++){
//     for ($j=0;$j<10;$j++){
//     $array21[$i][$j]=$j+1;
//     }
// }
   
// echo '<pre>';
// var_dump($array21);

// echo '<br><br>';
// echo ' 22 Uzdavinys <br>';

// $array22=[];

// for($i=0;$i<100; $i++){
//     for ($j=0;$j<10;$j++){
//     $array22[$i][$j]=rand(1,17);
//     }
// }
   
// echo '<pre>';
// var_dump($array22);

// echo '<br><br>';
// echo ' 23 Uzdavinys <br>';

// $array23=[];

// for($i=0;$i<100; $i++){
//     for ($j=0;$j<rand(5,18);$j++){
//     $array23[$i][$j]=$j+1;
//     }
// }
   
// echo '<pre>';
// var_dump($array23);

// echo '<br><br>';
// echo ' 24 Uzdavinys <br>';

// $array24=[];

// for($i=0;$i<100; $i++){
//     for ($j=0;$j<rand(5,18);$j++){
//     $array24[$i][$j]=rand(5,30);
//     }
// }
   
// echo '<pre>';
// var_dump($array24);

echo '<br><br>';
echo ' 25 Uzdavinys <br>';

$array25=[];
$max=0;

for($i=0;$i<100; $i++){
    for ($j=0;$j<rand(5,18);$j++){
    $array25[$i][$j]=rand(5,75);
    }
}
foreach($array25 as $value){
    foreach($value as $number){
        if($number>$max){
             $max=$number;
        }      
    }
}

echo 'Didziausias skaicius '.$max;   
echo '<pre>';
var_dump($array25);


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
   
    
</body>
</html>