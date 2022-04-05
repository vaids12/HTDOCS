<!-- Sukurti klase baldams, kuri turi tureti pavadinima ir kaina. Savybes neturi buti pasiekiamos uz klases ribu, bet si klase tures susijusia klase ofiso baldai, kur bus papildoma savybe spalva, ir metodas, kuris suveikia, kai sukuriamas naujas ofiso baldo objektas. -->

<?php

class Furniture
{
    protected $name;
    protected $price;

    public function __construct($name, $price)
    {
        $this->name=$name;
        $this->price=$price;
    }

    public function getName(){
        return $this-> name;
    }
 
    public function getPrice(){
        return $this-> price;
    }

}

class OfficeFurniture extends Furniture
{
    protected $color;

    public function __construct($name, $price, $color){
        
        parent::__construct($name,$price);
        $this->color=$color;
        self::log();
    }

    protected static function log()
    {
        echo "Sukurtas naujas ofiso baldas";
    }

    public function getFurniture(){
       return $this->name." ".$this->price." ".$this->color;
    }

   
}

$officeFur = new OfficeFurniture("Table",250, "black");

// echo $officeFur->getFurniture();




?>