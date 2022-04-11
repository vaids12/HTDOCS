<!-- (STATIC) Sukurkite klasę MarsoPalydovas. Kontroliuokite objekto kūrimą iš klasės
naudodami statinį metodą. Padarykite taip, kad iš viso būtų galima sukurti tik du objektus
iš šitos klasės. Pirmam sukuriamam objektui įrašykite privačią savybę title lygią stringui
“Deimas”, o antram tokią pat savybę tik lygią stringui “Fobas”. Bandant sukurti trečią
objektą, turėtų būti grąžinamas vienas iš anksčiau sukurtų objektų parinktas atsitiktine
tvarka -->


<?php

class MarsoPalydovas
{
    Public static $palydovas=[];
      Public static $count=0;
    
     


    public function __construct($title)
    { 
        if(self::$count==0){ 
           array_push(self::$palydovas,"Deimas");
            self::$count++;
        }elseif(self::$count==1){
            array_push(self::$palydovas,"Fobas");
            self::$count++;
            
        }else{
           echo  self::$palydovas[rand(0,1)];
        }

    }

    // public function getTitle()
    // {
    //     return $this->title;
    //     return self::$palydovas[rand(0,1)];
      
    // }

}

$palydovas1 = new MarsoPalydovas("labas");
$palydovas2 = new MarsoPalydovas("labas");
$palydovas3 = new MarsoPalydovas("labas");
$palydovas4 = new MarsoPalydovas("labas");


// echo $palydovas1-> getTitle();
echo "<br>";
var_dump(MarsoPalydovas::$palydovas);
// echo MarsoPalydovas::$palydovas[0];


?>