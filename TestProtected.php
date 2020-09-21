<?php
include "RaceCar.php";

class TestProtected extends RaceCar {
    public function __construct($title, $price, $speed)
    {
        parent::__construct($title, $price, $speed);
    }

    function demo(){
        $this->test();
    }
}

$obj = new TestProtected("test",1,1);
$obj->demo();