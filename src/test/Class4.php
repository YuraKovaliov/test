<?php
namespace src\test;

class Class4
{
    private $operand;

    public function getOperand() {
        return $this->operand;
    }

    public function setOperand($operand) {
        $this->operand = $operand;
    }

    public function calculatePower() {
        return $this->getBase() - $this->operand;
    }
}
}