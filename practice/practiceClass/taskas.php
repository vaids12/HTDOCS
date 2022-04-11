<!-- Sukurti klasę Taskas, kuris turi savybę taskas rand 100-999. Sukurti klasę Taskai, kuris
turi savybe taskai, kuri yra masyvas iš 10 Taskas objektų. Sukurkite išorinį kintamąjį
(nepriklausantį jokiai klasei) daugTasku, kuris yra masyvas iš 10 elementų, o kiekvienas
elementas yra Taskai objektas. Išrūšiuokite masyvą daugTasku, pagal taskų sumą nuo
didžiausio iki mažiausio -->

<?php

class Taskas
{
    protected  $taskas;

    public function __construct($taskas){
       $this->taskas=$taskas;
    }

    public function getTaskas(){
        return $this->taskas;
    }
}

$newTaskas = new Taskas(rand(100,999));
// var_dump($newTaskas);
// echo $newTaskas->getTaskas()."<br>";

class Taskai
{
   protected $taskai=[];
   protected $number;
   echo " $newTaskas->getTaskas()";
   die;

   public function __construct($number){
    $this->number=$number;
    }

    public static function sukurti(){
        for($i=0;$i<10; $i++){
            $i=new self (echo $newTaskas->getTaskas());
            
            array_push(self::$taskai,$i);
           
        }
    }
}

Taskai::sukurti();
