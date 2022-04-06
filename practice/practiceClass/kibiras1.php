<!-- Sukurti klasę Kibiras1. Sukurti protected savybę akmenuKiekis. Parašyti šiai savybei
metodus prideti1Akmeni() pridetiDaugAkmenu($kiekis) ir metodą
kiekPririnktaAkmenu(). Sukurti kibiro objektą ir pademonstruoti akmenų rinkimą į
kibirą ir rezultatų išvedimą -->

<?php

class Kibiras1
{
    protected $akmenuKiekis=0;

    public function prideti1Akmeni()
    {
        $this->akmenuKiekis+=1;
    }

    public function pridetiDaugAkmenu($kiekis)
    {
        $this -> akmenuKiekis+=$kiekis;
    }

    public function kiekPririnktaAkmenu()
    {
       return $this ->akmenuKiekis;
    }

}

$kibiras1 = new Kibiras1;

$kibiras1-> prideti1Akmeni();

$kibiras1 ->pridetiDaugAkmenu(10);

$kibiras1-> prideti1Akmeni();

echo $kibiras1-> kiekPririnktaAkmenu();



?>