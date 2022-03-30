<?php

// Objektai

//Objektas pvz banko saskaita

// Parametrai - saskaitos numeri, saskaitos likutis - PARAMETERS
// Veiksmai - ideti pinigu , isimti pinigu- METHODS

// Klase- Class. Object is instance of a Class. Is klases galima prikurti daug oblektu

class BankAccount 
{
   public $accountNumber;
   public $balance;

   public function deposit($amount){
       if($amount>0){
           $this -> balance +=$amount;
       }
   }

   public function withdraw($amount){
       if($amount <= $this->balance){
           $this -> balance -=$amount;
           return true;
       }
       return false;
   }
}

$myAccount = new BankAccount;

$myAccount -> accountNumber = 12345;
$myAccount -> balance = 100;

$myAccount-> deposit(50);

// echo $myAccount->accountNumber;
// echo $myAccount->balance;
var_dump($myAccount );

$yourAccount = new BankAccount;

$yourAccount -> accountNumber = 32165; 
$yourAccount -> balance = 1000;

$yourAccount -> deposit(50);
// $yourAccount-> withdraw(250);

// var_dump($yourAccount);

// echo .$yourAccount-> balance;






?>