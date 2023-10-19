<?php
namespace src\test;

class Class9
{
    private $factor;

    public function getFactor() {
        return $this->factor;
    }

    public function setFactor($factor) {
        $this->factor = $factor;
    }

    public function calculatePower() {
        return $this->getBase() * $this->factor;
    }

    public function doCustomOperation() {
        return $this->getBase() ** $this->factor;
    }
}
}