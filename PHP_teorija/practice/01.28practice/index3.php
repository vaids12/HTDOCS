<?php
 echo '8 uzdavinys <br>';

    $LETERS=['A','B','C','D'];
    $ABCD=[];
    $A=$B=$C=$D=0;

 for($i=0; $i<20; $i++){
     $z=rand(0,3);
    array_push($ABCD,$LETERS[$z]);
 }

 for ($z=0; $z<(count($ABCD)); $z++){
     if($ABCD[$z]==='A'){
         $A++;
     }elseif($ABCD[$z]==='B'){
        $B++;
    }elseif($ABCD[$z]==='C'){
        $C++;
    }elseif($ABCD[$z]==='D'){
        $D++;
    }
 }
    echo "<br>";
    echo "Raidžių A yra ".$A.". Raidžių B yra ".$B.". Raidžių C yra ".$C.". Raidžių D yra ".$D;




?>