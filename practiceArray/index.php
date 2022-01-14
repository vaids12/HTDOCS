


<?php
// <!-- 1. Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su
// reikšmėmis nuo 5 iki 25.


// $array =[];

// for ($i=1; $i<=10; $i++){
//     array_push($array,$i);
//     echo $i.'<br>';

// }

// for ($z=0; $z<10; $z++){
//     for ($x=1; $x<=5; $x++){
//         array_push($array,$z,$x);
//     }
// }



// var_dump($array);


//        echo $lsLength;
// array_push( $parts_sums, array_sum($ls));
// unset ( $ls[0]);
// array_push( $parts_sums, array_sum($ls));
// unset ( $ls[1]);
// array_push( $parts_sums, array_sum($ls));
// unset ( $ls[2]);
// array_push( $parts_sums, array_sum($ls));
// unset ( $ls[3]);
// array_push( $parts_sums, array_sum($ls));
// unset ( $ls[4]);
// array_push( $parts_sums, array_sum($ls));

$ls=[];
 $parts_sums =[] ;

$z =  count($ls)+1;
      
for ($i= 0; $i<$z ; $i++){
     array_push( $parts_sums, array_sum($ls));
    unset ( $ls[$i]);          
}

var_dump ($parts_sums);

     

 



?>

<!-- 
2. Naudodamiesi 1 uždavinio masyvu:
a. Suskaičiuokite kiek masyve yra elementų didesnių už 10;

b. Raskite didžiausio elemento reikšmę;

c. Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y.
suma reikšmių turinčių indeksą 0, 1 ir t.t.)

d. Visus masyvus “pailginkite” iki 7 elementų

e. Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas
panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo
reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve,
visų elementų sumai

3. Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su
atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai parinktos raidės
iš intervalo A-Z. Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).

4. Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai kurių masyvai
trumpiausi eitų pradžioje. Masyvai kurie turi bent vieną “K” raidę, visada būtų didžiojo
masyvo visai pradžioje.

5. Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal taisyklę:
generuokite skaičių nuo 0 iki 5. Ir sukurkite tokio ilgio masyvą. Jeigu reikšmė yra 0
masyvo nekurkite. Antro lygio masyvo reikšmes užpildykite atsitiktiniais skaičiais nuo 0
iki 10. Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 įrašykite tiesiogiai.

6. Paskaičiuokite 5 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite masyvą taip, kad
pirmiausiai eitų mažiausios masyvo reikšmės arba jeigu reikšmė yra masyvas, to masyvo
reikšmių sumos.

7. Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų. Antro lygio
masyvų reikšmės masyvai su dviem elementais value ir color. Reikšmė value vienas iš
atsitiktinai parinktų simbolių: #%+*@裡, o reikšmė color atsitiktinai sugeneruota spalva
formatu: #XXXXXX. Pasinaudoję masyvų atspausdinkite “kvadratą” kurį sudarytų
masyvo reikšmės nuspalvintos spalva color.

8. Sugeneruokite 101 elemento masyvą su atsitiktiniais skaičiais nuo 0 iki 300. Reikšmes
kurios tame masyve yra ne unikalios pergeneruokite iš naujo taip, kad visos reikšmės
masyve būtų unikalios. Išrūšiuokite masyvą taip, kad jo didžiausia reikšmė būtų masyvo
viduryje, o einant nuo jos link masyvo pradžios ir pabaigos reikšmės mažėtų.
Paskaičiuokite pirmos ir antros masyvo dalies sumas (neskaičiuojant vidurinės). Jeigu
sumų skirtumas (modulis, absoliutus dydis) yra didesnis nei | 30 | rūšiavimą kartokite.
(Kad sumos nesiskirtų viena nuo kitos daugiau nei per 30) --> -->