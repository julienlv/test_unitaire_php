<?php

include_once 'mail.php';

use PHPUnit\Framework\TestCase;
use Calculatrice;

class CalculatriceTest extends TestCase {

    public function testAdd() {
        $calc = new Calculatrice();
        $result = $calc->add(25, 5);
        $this->assertEquals(30, $result);
    }

    public function testSub() {
        $calc = new Calculatrice();
        $result = $calc->sub(25, 5);
        $this->assertEquals(20, $result);
    }

    public function testMul() {
        $calc = new Calculatrice();
        $result = $calc->mul(25, 5);
        $this->assertEquals(125, $result);
    }

    public function testDiv() {
        $calc = new Calculatrice();
        $result = $calc->div(25, 5);
        $this->assertEquals(5, $result);
    }

}

?>