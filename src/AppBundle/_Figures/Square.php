<?php

namespace AppBundle\_Figures;

use AppBundle\_Interfaces\ShapeInterface;
use AppBundle\_Interfaces\ManageShapeInterface;

class Square implements ShapeInterface, ManageShapeInterface {

    public $length;

    public function __construct($length) {
        $this->length = $length;
    }

    public function area() {
        return pow($this->length, 2);
    }
    
    public function calculate() {
        return $this->area();
    }

}
