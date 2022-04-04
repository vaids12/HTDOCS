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

}

$student1 = new Student("Jonas", 180, 70);
$student2 = new Student ("Ona",160, 50);

var_dump($student1);
echo "<br>";
echo $student2->getName(),$student2->getWeight();
echo "<br>";
echo $student2->getWeight()." kg";


?>