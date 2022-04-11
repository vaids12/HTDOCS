<?php

class marsoPalydovas{
    private $title;
    public static $palydovai=[];

    public function __construct($title){
        $this->title=$title;
    }
    public static function sukurti()
    {
        if (count(self::$palydovai)===0){
            $pirmas = new self('Deimas');
            array_push(self::$palydovai,$pirmas);
            return $pirmas;
        }elseif(count(self::$palydovai)===1){
            $antras = new self('Fobas');
            array_push(self::$palydovai,$antras);
            return $antras;
        }else{
            return self::$palydovai[rand(0,1)];
        }
           
    }

}

$a=MarsoPalydovas::sukurti();
var_dump($a);
echo "<br>";
$b=MarsoPalydovas::sukurti();
var_dump($b);
echo "<br>";
$c=MarsoPalydovas::sukurti();
var_dump($c);
echo "<br>";
$d=MarsoPalydovas::sukurti();
var_dump($d);
echo "<br>";