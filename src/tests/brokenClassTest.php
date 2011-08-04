<?php

require_once("../lib/brokenClass.php");

class brokenClassTest extends PHPUnit_Framework_TestCase {

    public function testDemo() {
        $x = new brokenClass();
        $this->assertEquals(2, $x->broken());
    }
}
