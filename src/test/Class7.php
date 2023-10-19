<?php
namespace src\test;

class Class7
{
    private $operand;

    public function getOperand() {
        return $this->operand;
    }

    public function setOperand($operand) {
        $this->operand = $operand;
    }

    public function calculatePower() {
        return $this->getBase() + $this->operand;
    }

    public function doCustomOperation() {
        return $this->getBase() * $this->operand;
    }
}
}