<?php
class DemoStatic{
    static $x;

    static function f(){
//        DemoStatic::$x = 10;
        self::$x = 10;
        echo self::$x;
    }

    function test(){
        DemoStatic::f();
    }

    static function runTest(){
//        $this->test();//использовать $this в статик методах запрещено
        $o = new DemoStatic();
        $o->test();
    }
}

DemoStatic::runTest();