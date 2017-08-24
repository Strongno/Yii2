<?php
class A {
    public static function who() {
        echo __CLASS__;
    }
    public function test() {
        static::who();
    }
}

class B extends A {
    public static function who() {
        echo __CLASS__;
    }
}
$obj = new B;
$obj->test();
?>