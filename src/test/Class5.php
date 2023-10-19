<?php
namespace src\test;

class Class5
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
}
}