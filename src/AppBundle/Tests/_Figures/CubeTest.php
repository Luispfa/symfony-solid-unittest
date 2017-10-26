<?php

namespace AppBundle\Tests\_Figures;

use PHPUnit\Framework\TestCase;
use AppBundle\_Figures\Cube;

class CubeTest extends TestCase {

    public function testArea() {
        $cube = new Cube(2);
        $result = $cube->area();

        $this->assertEquals(24, $result);
    }

    public function testVolume() {
        $cube = new Cube(2);
        $result = $cube->volume();

        $this->assertEquals(8, $result);
    }

    public function testCalculate() {
        $cube = new Cube(2);
        $area = $cube->area();
        $volume = $cube->volume();
        
        $result = $area + $volume;

        $this->assertEquals(32, $result);
    }

}
