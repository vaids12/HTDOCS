<?php

// Objektai

//Objektas pvz banko saskaita

// Parametrai - saskaitos numeri, saskaitos likutis - PARAMETERS
// Veiksmai - ideti pinigu , isimti pinigu- METHODS

// Klase- Class. Object is instance of a Class. Is klases galima prikurti daug oblektu

//Access Modifiers

// public, private, (protected)

//public- metodus ir savybes galime pasiekti ir klaseje ir klases isoreja

// private- metodus ir savybes galime pasiekti tik klases viduje




class BankAccount 
{
   public $accountNumber;
   public $balance;
   private $user;// tam kad pasiektume private savybe , turime ja aprasyti public metodu

    public function setUser($user){
        if ($user !== ""){
        $this-> user=$user;
    } 
    }

   public function getUser(){  
        return $this->user;    
   }

   public function deposit($amount){
       if($amount>0){
           $this -> balance +=$amount;
       }
       return $this;
   }

   public function withdraw($amount){
       if($amount <= $this->balance){
           $this -> balance -=$amount;
           return $this;
       }
       return false;
   }
}

$myAccount = new BankAccount;

$myAccount -> accountNumber = 12345;
$myAccount -> balance = 100;

$myAccount-> deposit(50);


//$myAccount-> user="Jonas";

// $myAccount->setUser("Jonas");
// echo $myAccount->getUser();

// echo $myAccount->accountNumber;
// echo $myAccount->balance;
// echo "<br>";
// var_dump($myAccount );

$yourAccount = new BankAccount;

$yourAccount -> accountNumber = 32165; 
$yourAccount -> balance = 1000;

// $yourAccount -> deposit(50);
// $yourAccount-> withdraw(250);



// echo $yourAccount-> balance;

$yourAccount->deposit(100);
$yourAccount->deposit(100);

$yourAccount-> deposit(100)->deposit (100)->withdraw(500);

// var_dump($yourAccount);

// class NameSurname{
//     public $name;
//     public $surname;

//     public function name($name){
//         if ($name !== ""){
//             $this -> name =$name;
//         }    
//     }

//     public function surname($surname){
//         if ($surname !== ""){
//             $this -> surname =$surname;
//         }    
//     } 

//     public function hello(){
//             echo "Labas ".$this->name;
//         }
// }
    

// $student = new NameSurname;
// $student->name("Jonas");
// // arba
// // $student -> name = "Jonas";
// $student -> surname = "Jonauskas";


// $student->hello();

?>