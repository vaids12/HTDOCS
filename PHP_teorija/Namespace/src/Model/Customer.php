<?php


namespace Paskaita\Model;

class Customer
{
    private $name;

    public function __construct($name)
    {
        $this->name=$name;
    }

    public function getName()
    {
        return $this-> name;
    }
}




?>