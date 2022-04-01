<!-- Sukurti klasę Kibiras1. Sukurti protected savybę akmenuKiekis. Parašyti šiai savybei
metodus prideti1Akmeni() pridetiDaugAkmenu($kiekis) ir metodą
kiekPririnktaAkmenu(). Sukurti kibiro objektą ir pademonstruoti akmenų rinkimą į
kibirą ir rezultatų išvedimą -->

<?php

class Kibiras{

    private $akmenuKibiras;

    public function setprideti1Akmeni(){
        $this->akmenuKibiras+=1;
    }


    public function setpridetiDaugAkmenu($kiekis){
        $this->akmenuKibiras+=$kiekis;
    }


    public function getkiekPririnktaAkmenu(){
        return $this->akmenuKibiras;
    }


}



$akmuo= new Kibiras;

$akmuo->setprideti1Akmeni();
$akmuo->setpridetiDaugAkmenu(50);
$akmuo->setprideti1Akmeni();


echo $akmuo->getkiekPririnktaAkmenu();



?>