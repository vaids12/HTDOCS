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
       private $title;
      Public static $count=0;
    
     


    public function __construct($title)
    { 
        if(self::$count==0){
            $this->title="Deimas";   
           array_push(self::$palydovas,($this->title));
            self::$count++;
        }elseif(self::$count==1){
            $this->title="Fobas";
            array_push(self::$palydovas,($this->title));
            self::$count++;
            
        }else{
           echo  self::$palydovas[rand(0,1)];
        }

    }

    public function getTitle()
    {
        return $this->title;
      
    }

}

$palydovas1 = new MarsoPalydovas("labas");
$palydovas2 = new MarsoPalydovas("labas");
$palydovas3 = new MarsoPalydovas("labas");
// $palydovas32 = new MarsoPalydovas("labas");


echo $palydovas3-> getTitle();

// var_dump(MarsoPalydovas::$palydovas);


?>