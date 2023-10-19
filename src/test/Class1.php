<?php
namespace src\test;

class Class1
{
    protected $base;
    protected $exponent;

    public function getBase() {
        return $this->base;
    }

    public function setBase($base) {
        $this->base = $base;
    }

    public function getExponent() {
        return $this->exponent;
    }

    public function setExponent($exponent) {
        $this->exponent = $exponent;
    }

}