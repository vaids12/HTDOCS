



<?php 


$ls=[1,1,1,1,1];
 partsSums($ls);
function partsSums($ls) {
    $new = [];
    $count = count($ls);
    for ($i = 0; $i < $count; ++$i){
    $suma = 0;
    for ($j = $i; $j < $count; ++$j){
    $suma += $ls[$j];
    }
    $new[] = $suma;
    }
    $new[] = 0;
    return $new;
    }

    
?>


<!-- <?php
echo '<br>';
solution(5);
function solution($number){
  $sum = 0;
for ($i =0; $i<=$number; $i++){
  if ($i>0 && ($i%3==0 || $i%5==0)){
    $sum ++;
  }
} 
 
}

echo $number;
echo '<br>';
echo  $sum;


?> -->
<?php

  $word = "abba";
  echo $word;
  $words = ['aabb','abcd','bbaa','dada'];
  echo '<br>';
  var_dump ($words);
  // $word = "b";
  // echo $word;
  // $words = ['a','b','c','d'];
  // echo '<br>';
  // var_dump ($words);
  // $word = "laser";
  // echo $word;
  // $words = ['lazing','lazy','lacer'];
  // echo '<br>';
  // var_dump ($words);
  // $word = "racer";
  // echo $word;
  // $words = ['crazer','carer','racar','caers', 'racer'];
  // echo '<br>';
  // var_dump ($words);
echo '<br>';

 $stringCount = strlen($word);
//  echo $stringCount;
//  echo '<br>';
  $arrayCount = count($words);
//   echo $arrayCount;
//  echo '<br>';
  $newArray = [];
 
  // if ($stringCount==1){
  //   for($i = 0; $i< $arrayCount; $i++ ){
  //     if( $word== $words[$i]){
  //       array_push($newArray,$words[$i]);
  //     }
  //   } var_dump ($newArray);


  // } elseif ($stringCount>1){
  $sort1 = str_split($word);
  var_dump ($sort1);
  echo '<br>';
  sort($sort1);
  $sort1 = implode($sort1);
  echo "sort1- ".$sort1;
  echo '<br>';
 for ($i = 0; $i< $arrayCount; $i++){
           $sort2= str_split($words[$i]);

          sort($sort2);
          $sort2 = implode($sort2);
          echo "sort2- ".$sort2;
          echo '<br>';
      if($sort1=== $sort2){
         array_push($newArray, $words[$i]);
      }
    // }
   
   
  // }else{
  //   var_dump ($newArray);
  } echo '<br>';
    var_dump ($newArray);
  



?>
