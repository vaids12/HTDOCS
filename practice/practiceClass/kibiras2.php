<!-- (STATIC) Sukurkite klasę kaip pirmame uždavinyje ir pavadinkite Kibiras2.
Patobulinkite pridėdami statinę privačią savybę akmenuKiekisVisuoseKibiruose. Ši
savybė turi rodyti kiek akmenų surinkta visuose Kibiras2 objektuose. Sukurkite geterį
objekte, ir statinį geterį klasėje, kuris išvestų akmenuKiekisVisuoseKibiruose reikšmę.
Sukurkite tris kibirus ir pademonstruokite veikimą -->

<?php

class Kibiras2
{
    protected $akmenuKiekis=0;
    private static $akmenuKiekisVisuoseKibiruose=0;

    public function prideti1Akmeni()
    {
        $this->akmenuKiekis+=1;
        self:: $akmenuKiekisVisuoseKibiruose++;
    }

    public function pridetiDaugAkmenu($kiekis)
    {
        $this -> akmenuKiekis+=$kiekis;
        self:: $akmenuKiekisVisuoseKibiruose+=$kiekis;
    }

    public function kiekPririnktaAkmenu()
    {
       return $this ->akmenuKiekis;
    }

    public static function getakmenuKiekisVisuoseKibiruose()
    {
      return self:: $akmenuKiekisVisuoseKibiruose;
    }

}

$kibiras1 = new Kibiras2;

$kibiras2 = new Kibiras2;

$kibiras3 = new Kibiras2;

$kibiras1-> prideti1Akmeni();

$kibiras2 ->pridetiDaugAkmenu(20);
$kibiras2 ->pridetiDaugAkmenu(5);

$kibiras3-> prideti1Akmeni();


echo Kibiras2::getakmenuKiekisVisuoseKibiruose();




?>