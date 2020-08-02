<?php

class Animal
{
    public $name;
    public $legs = 2;
    public $cold_blood = false;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getLegs()
    {
        return $this->legs;
    }
    public function getCold_blood()
    {
        return $this->cold_blood;
    }
}
