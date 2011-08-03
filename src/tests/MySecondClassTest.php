<?php

require_once("../lib/MySecondClass.php");

class MySecondClassTest extends PHPUnit_Framework_TestCase {

    public function testDemo() {
        $x = new MySecondClass();
        $this->assertEquals(3, $x->demo(1));
    }
}
