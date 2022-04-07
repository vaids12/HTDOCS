<?php


class Student
{
    private string $name;
    private float $height=0;
    private float $weight=0;

    public function __construct($name, $height, $weight)
    {
        $this-> name=$name;
        $this -> height=$height;
        $this-> weight=$weight;

    }

    public function getName(){
        return $this-> name;
    }

    
    public function getHeight(){
        return $this-> height;
    }

    
    public function getWeight(){
        return $this-> weight;
    }

    public function view()
    {
        echo $this->name. " ".$this->height." cm ".$this->weight." kg";
    }

    public function __toString()// turi grazinti stringa
    {
        return "Vardas : $this->name. Ugis: $this->height. Svoris: $this->weight";
    }

}

$student1 = new Student("Jonas", 180, 70);
$student2 = new Student ("Ona",160, 50);

// var_dump($student1);
// echo "<br>";
// echo $student2->getName(),$student2->getWeight();

// $student1->view();

// echo $student1;



$studentStr=serialize($student1);

// var_dump($studentStr);//byte-stream representation

$newStudent= unserialize($studentStr);

var_dump($newStudent);




?>