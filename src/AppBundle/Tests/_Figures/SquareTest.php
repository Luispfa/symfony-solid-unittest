<?php

namespace AppBundle\Tests\_Figures;

use PHPUnit\Framework\TestCase;
use AppBundle\_Figures\Square;

class SquareTest extends TestCase {

    public function testArea() {
        $square = new Square(2);
        $result = $square->area();

        $this->assertEquals(4, $result);
    }

}
