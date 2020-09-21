<?php

include "Outer.php";
class Car{
    private $title;
    private $price;
   // var $obj;

    public function getPrice()
    {
        return $this->price;
    }

    public function getTitle()
    {
        return $this->title;
    }

    protected function test(){
        echo "test";
    }

    function __construct($title,$price){
        $this->title = $title;
        $this->price = $price;
       // $this->obj = new Outer();
    }

//    function setter($title,$price){
//        $this->title = $title;
//        $this->price = $price;
//    }

    function drive(){
       // $this->obj->test();
        echo $this->title." стоит ".$this->price."$<br>";
    }
}
/*
$car1 = new Car("Audi",1000);
//$car1->setter("Audi",1000);
//$car1->drive();

$car2 = new Car("BMW",1200);
//$car2->setter("BMW",1200);
//$car2->drive();
$car3 = new Car("VAZ",800);

$arr = [$car1,$car2,$car3];
foreach ($arr as $obj){
    $obj->drive();
}*/