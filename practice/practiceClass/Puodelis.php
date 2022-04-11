<!-- Sukurti klasę Puodelis. Puodelis turi dvi savybes: spalva ir ipilta. Sukurti statinį metodą
gamintiPuodelius(), kuris pagamina du objektus su savybių reikšmėm: “raudonas”,
“pilnas” ir “geltonas”, “tuščias”. Sukurti statinį metodą perpilti(), kuris “pilną” puodelį
padaro tuščią ir atvirkščiai. Sukurti statinį metodus ispiltiViska(), kuris abu puodelius
padaro “tuščius” ir ipiltiIAbu(), kuris abu puodelius padaro “pilnus”. Po šių metodų
iškvietimo, metodas perpilti() turi veikti korektiškai ir logiškai (arba abu “tušti” arba abu
“pilni”). -->


<?php

class Puodelis
{
    protected  $spalva;
    protected  $ipilta;
    public  static $array=[];


    public function __construct($spalva,$ipilta)
    {
        $this->spalva=$spalva;
        $this->ipilta=$ipilta;
    }

    public static function gamintiPuodelius($spalva,$ipilta)
    {
       array_push(self::$array,new self($spalva,$ipilta));
    }

    public static function perpilti()
    {
        if(self::$array[0]->ipilta=="pilnas" && self::$array[1]->ipilta=="tuscias"){
              self::$array[0]->ipilta="tuscias";
              self::$array[1]->ipilta="pilnas";
        }elseif(self::$array[1]->ipilta=="pilnas" && self::$array[0]->ipilta=="tuscias"){
            self::$array[1]->ipilta="tuscias";
            self::$array[0]->ipilta="pilnas";
        }elseif(self::$array[0]->ipilta=="pilnas" && self::$array[1]->ipilta=="pilnas"){
            self::$array[1]->ipilta="tuscias";
            self::$array[0]->ipilta="tuscias";
        }else{
            self::$array[1]->ipilta="pilnas";
            self::$array[0]->ipilta="pilnas";
        }
    }

    public static function ispiltiViska()
    {
        self::$array[0]->ipilta="tuscias";
        self::$array[1]->ipilta="tuscias";
    }

    public static function ipiltiIAbu()
    {
        self::$array[0]->ipilta="pilnas";
        self::$array[1]->ipilta="pilnas";
    }
}



 Puodelis::gamintiPuodelius("raudonas","pilnas");
 Puodelis::gamintiPuodelius("geltonas","tuscias");
var_dump(Puodelis::$array);
echo "<br>";
Puodelis::perpilti();
var_dump(Puodelis::$array);
echo "<br>";
Puodelis::ispiltiViska();
var_dump(Puodelis::$array);
echo "<br>";
// Puodelis::ipiltiIAbu();
// var_dump(Puodelis::$array);
// echo "<br>";
Puodelis::perpilti();
var_dump(Puodelis::$array);
echo "<br>";



