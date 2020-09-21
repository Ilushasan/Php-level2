<?php

include "Car.php";
class RaceCar extends Car{
    private $speed;

    public function __construct($title, $price,$speed)
    {
        parent::__construct($title, $price);
        $this->speed = $speed;
    }

    function drive(){
        $this->test();
        parent::drive();
        echo $this->getTitle()." разгоняется до скорости ".$this->speed;
    }
}
/*
$car = new RaceCar("Ferrari",5000,550);
$car->drive();
*/