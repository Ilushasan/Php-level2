<?php
include "Factory.php";

$count = rand(5,20);
$factory = new Factory;

$carNames = ["Audi","VW","Skoda"];

$cars = [];

$sum = 0;
for($i=0;$i<$count;$i++){
    $cars[$i] = $factory->createCar($carNames[rand(0,count($carNames)-1)]);
    echo $cars[$i]->getTitle()." стоит ".$cars[$i]->getPrice()."<br>";
    $sum += $cars[$i]->getPrice();
}
echo "Общая цена всех автомобилей составляет $sum";
