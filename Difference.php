<?php
class Difference{
    function demo(){
        static $x = 1;
        echo $x++;
    }
}

$o1 = new Difference();
$o2 = new Difference();

$o1->demo();
$o1->demo();
$o2->demo();
$o2->demo();