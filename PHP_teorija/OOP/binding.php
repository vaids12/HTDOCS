<?php


class Forest
{
    protected static $name="Miskas";

    public static function getName()
    {
        // return self::$name;
        return static::$name;
    }
}

// echo Forest::getName();

class Tree extends Forest
{
    public static $name="Medis";
}

echo Tree::getName();


//static late binding

// self-> static