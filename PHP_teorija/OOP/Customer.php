<?php

// public - prieinamas visur ir visiems
// private - prieinamas tik toje klaseje
// protected - pasiekiama klaseje ir is jos praplestose klasese

class Customer
{
    protected $name;

    public function __construct($name)
    {
        $this-> name=$name;
    }

    protected function format()
    {
        return ucwords($this->name);
    }

    public function getName()
    {
        return $this-> format();
    }

}


$customer= new Customer("maxima");
echo $customer->getName();



class Vip extends Customer
{
    public function getFormattedName()
    {
        return $this-> format();
    }
}

$vipCustomer=new Vip("rimi");

echo $vipCustomer->getFormattedName();

?>