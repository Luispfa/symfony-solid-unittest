<?php

namespace AppBundle\_Calculator;

use AppBundle\_Interfaces\ManageShapeInterface;

class AreaCalculator {

    public $shapes;

    public function __construct($shapes) {
        $this->shapes = $shapes;
    }

    public function sum() {
        $area = array();
        foreach ($this->shapes as $shape) {
            if ($shape instanceof ManageShapeInterface) {
                $area[] = $shape->calculate();
                continue;
            }
        }

        return array_sum($area);
    }

}
