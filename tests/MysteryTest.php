<?php

use PHPUnit\Framework\TestCase;
require_once __DIR__.'/../src/Mystery.php';

final class mysteryTest extends TestCase {

    public function setUp() {
        $this->classTest = new Mystery();
    }

    public function tearDown() {
        unset($this->classTest);
    }

    public function testAttribute() {
        $this->assertClassHasAttribute('count', Mystery::class);
        $this->assertClassHasAttribute('random', Mystery::class);
    }

    public function testRandom() {
        $this->assertGreaterThanOrEqual(0, $this->classTest->getRandom());
        $this->assertLessThanOrEqual(9, $this->classTest->getRandom());
    }

    public function testType() {
        $this->assertInternalType('int', $this->classTest->getRandom());
    }

    public function testEquals() {
        $this->assertEquals(0, $this->classTest->getCount());
    }

}