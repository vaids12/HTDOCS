<!-- Sukurti klasę Kalkuliatorius. Kalkuliatorius turi dvi protected sąvybes ir keturis metodus:
sudėti, atimti, dauginti, dalinti. Kiekvienas iš metodų turi grąžinti atitinkamą abiejų
verčių rezultatą. -->

<?php

class Calculator
{
    protected $number1;
    protected $number2;
  
  

    public function __construct($number1,$number2)
    {
        $this->number1=$number1;
        $this->number2=$number2;       
    }

    public function getSudeti()
    {
      echo $this->number1+$this->number2;
    }

    
    public function getAtimti()
    {
        echo ($this->number1)-($this->number2);
    }

    public function getDauginti()
    {
        echo ($this->number1)*($this->number2);
    }

    public function getDalinti()
    {
        echo  ($this->number1)/($this->number2);
    }
  
  
}

$newNumber= new Calculator(10,5);

$newNumber->getDauginti();



