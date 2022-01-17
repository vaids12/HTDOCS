<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <?php
$z = '*';
for( $i=1; $i<=5; $i++){
for($x=1; $x<=$i; $x++){
    echo $z;
}echo '<br>';

}
?>
    <br>
    <table style=' border : 2px solid black'>
        <?php
for ($i =1 ;$i<=10; $i++ ){
    echo "<tr >";
    for ($x=1; $x<=5; $x++){
        echo "<td  style= 'border : 2px solid black'>$i * $x = ".$i*$x." </td>";
    }
    echo '</tr>';
}

?> -->
    </table>

    <br>

    <table style='width:270px; border : 2px solid black'>
        <?php
     echo '</tr>';
        for($i =1 ;$i<=8; $i++){
             echo "<tr>";
                 for ($x=1; $x<=8; $x++){
                     $total= $i+$x;
                     if ($total %2==0){
                          echo "<td style= 'border : 2px solid black; width:30px; height:30px; background-color: #000000;'> </td>";
                     }else{
                        echo "<td style= 'border : 2px solid black; width:30px; height:30px; background-color: #FFFFFF;'> </td>";
                     }
                   
                 }
             echo '</tr>';
        }

    ?>
    </table>
    <br>


    <table>

        <?php 
            $n=11;
            $z=1;
            for($i=1; $i<=$n; $i++){
                echo "<tr>";
                    for ($x=1; $x<=$i; $x++){
                     echo "<td>$z</td>";
                     $z++;
                    
                    }
                   
                echo '</tr>';
            }

        ?>

    </table>

    <br>
<h1>Vardas</h1>
<!-- <?php
for ($i=1; $i<8; $i++ ){
    for ($x=1; $x<6; $x++){
        if((($x==5 || $x==1 ) && $i<6 )||($i==7 && $x==3)||($i==6 && ($x==2 || $x==4 ))){
            echo "*";
        }else{
            echo "&nbsp"  ;
        }
    }
echo'<br>';
}
?> -->
<?php
for ($i=1; $i<8; $i++ ){
    for ($x=1; $x<6; $x++){
        if($x==1 || (($i==1 || $i==4) && $x<5) || (($i ==2 || $i== 3) && $x==5) || ($i==5 && $x==3) || ( $i==6 && $x==4) ||( $i==7 && $x==5) ){
            echo "*";
        }else{
            echo "&nbsp "  ;
        }
    }
echo'<br>';
}
?>
<br>
<table >
        <?php
for ($i =1 ;$i<=10; $i++ ){
    echo "<tr >";
    for ($x=1; $x<=10; $x++){
        echo "<td  style= 'border : 1px solid black'>". $i * $x . "</td>";
    }
    echo '</tr>';
}

?> 
    </table>
</body>

</html>