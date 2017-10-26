<?php
 
namespace AppBundle\Tests\_Figures;

use PHPUnit\Framework\TestCase;
use AppBundle\_Figures\Circle;

class CircleTest extends TestCase{
    
    public function testArea() {
        $circle = new Circle(2);
        $result  = $circle->area();
        
        $this->assertEquals(12.566370614359172 , $result);
    }
    
}
