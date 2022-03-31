<?php

// class User{
//     public $name;
//     public $surname;

    

//     public function hello(){
//      echo "Hello ".$this->name." ".$this->surname;
//     }
// }
    

// $student = new User;

// $student -> name = "Jonas";
// $student -> surname = "Jonauskas";


// $student->hello();

class User{
    private $name;
    private $surname;

    public function setName($vardas){
        $this->name=$vardas;
        return $this;
    }

    public function setSurname($pavarde){
        $this->surname=$pavarde;
        return $this;
    }

    // toliau butu get metodai
    // public function GetName(){
    //     return $this ->name;
    // }

    public function hello(){
     echo "Hello ".$this->name." ".$this->surname;
     return $this;
    }
}
    

$student = new User;
// $student->setName("Jonas");
// $student-> setSurname("Jonauskas");
// $student->hello();

$student->setName("Antanas")->setSurname("Antanauskas")->hello();

?>

