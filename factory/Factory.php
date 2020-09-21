<?php
include_once "Car.php";
class Factory{
    function createCar($marka){
        return new Car($marka,rand(1000,5000));
    }
}