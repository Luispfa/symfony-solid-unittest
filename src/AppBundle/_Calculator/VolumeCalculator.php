<?php

namespace AppBundle\_Calculator;

use AppBundle\_Calculator\AreaCalculator;

class VolumeCalculator extends AreaCalculator {

    public function __construct($shapes = array()) {
        parent::__construct($shapes);
    }

    public function sum() {
        $summedData = "";
        return $summedData;
    }

}
