<!-- Sukurti klasę Stikline. Sukurti privačią savybę turis ir kiekis. Parašyti metodą
ipilti($kiekis), kuris keistų savybę kiekis. Jeigu stiklinės tūris yra mažesnis nei pilamas
kiekis- kiekis netelpa ir būna lygus tūriui. Parašyti metodą ispilti(), kuris grąžiną kiekį.
Pilant išpilamas visas kiekis, tas kas netelpa, nuteka per stalo viršų. Sukurti tris stiklinės
objektus su tūriais: 200, 150, 100. Didžiausią pripilti pilną ir tada ją ispilti į mažesnę
stiklinę, o mažesnę į dar mažesnę. -->


<?php

class Stikline{

private $turis = 0;
private $kiekis = 0;

    public function setTuris($turis){
        $this->turis=$turis;
    }

    public function setIpilti($kiekis){
    if ($this-> kiekis+$kiekis > $this->turis){
        $this-> kiekis =$this->turis;
    }else{
        $this-> kiekis+=$kiekis;
    }}

    public function setIspilti(){
       $ispiltKiekis= $this->kiekis;
       $this->kiekis=0;
        return $ispiltKiekis;

    }
       
    public function kiekis(){
       return "Kiekis: ".$this->kiekis.". Turis: ".$this->turis;
    }


}



$stikline1= new Stikline;
$stikline2= new Stikline;
$stikline3= new Stikline;

$stikline1->setTuris(200);
$stikline2->setTuris(150);
$stikline3->setTuris(100);


$stikline1->setIpilti(50);
echo "Pirma stikline: ".$stikline1->kiekis()."<br>";
$stikline1->setIpilti(150);
echo "<br>";



echo "Pirma stikline: ".$stikline1->kiekis()."<br>";

echo "<br>";

$stikline2->setIpilti($stikline1->setIspilti());

echo "Pirma stikline: ".$stikline1->kiekis()."<br>";
echo "Antra stikline: ".$stikline2->kiekis()."<br>";
echo "Trecia stikline: ".$stikline3->kiekis()."<br>";
echo "<br>";

$stikline3->setIpilti($stikline2->setIspilti());

echo "Pirma stikline: ".$stikline1->kiekis()."<br>";
echo "Antra stikline: ".$stikline2->kiekis()."<br>";
echo "Trecia stikline: ".$stikline3->kiekis()."<br>";
echo "<br>";


$stikline3->setIspilti();

echo "Pirma stikline: ".$stikline1->kiekis()."<br>";
echo "Antra stikline: ".$stikline2->kiekis()."<br>";
echo "Trecia stikline: ".$stikline3->kiekis()."<br>";

?>