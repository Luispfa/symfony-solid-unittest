<?php

namespace AppBundle\_Figures;

use AppBundle\_Interfaces\ShapeInterface;
use AppBundle\_Interfaces\SolidShapeInterface;
use AppBundle\_Interfaces\ManageShapeInterface;
use AppBundle\_Figures\Square;

class Cube extends Square implements ShapeInterface, SolidShapeInterface, ManageShapeInterface {

    public $length;

    public function __construct($length) {
        parent::__construct($length);
        $this->length = $length;
    }

    public function area() {
        return parent::area() * 6;
    }

    public function volume() {
        return pow($this->length, 3);
    }

    public function calculate() {
        return $this->area() + $this->volume();
    }
    
    
}
