<!-- Sukurti klasę Faktorialas, kuri turi vieną protected savybę, kuri yra skaičius, didesnis už -
1 ir vieną metodą, kurį iškvietus grąžinamas sąvybės faktorialas -->

<?php


class Factorial
{
    protected $factorial;
    protected $number;

    public function setNumber($number)
    {
        $this-> number=$number;
    }

    public function countFactorial()
    { 
        if ($this->number<0){
           echo   "Skaicius mazesnis uz 0";
        }elseif ($this->number==1 && $this->number==0){
            $this->factorial=1;
        }else{
            $this->factorial=1;
            for ($i=1;$i<=$this->number;$i++){
                $this->factorial=$this->factorial*$i;
                
            }
        }

    }

    public function getFactorial(){
      echo $this->factorial;
    }

}

$newNumber = new Factorial;
$newNumber->setNumber(5);
$newNumber->countFactorial();

$newNumber->getFactorial();
