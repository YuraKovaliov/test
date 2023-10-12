<?php
function doesElementExistInNestedArray($array, $element) {   //Задание 1

 foreach ($array as $value) {

  if (is_array($value)) {
   if (doesElementExistInNestedArray($value, $element)) {
    return true;
   }
  } else {

   if ($value === $element) {
    return true;
   }
  }
 }

 return false;



function countBsInString($input) {  //Задание 2
 if (!is_string($input)) {
  return false;
 }

 return substr_count($input, 'b');
}

function sumArrayRecursive($array) {
 $sum = 0;


 foreach ($array as $element) { //Задание 3
  if (is_array($element)) {
   $sum += sumArrayRecursive($element); // Рекурсивный
  } else {
   $sum += $element;
  }
 }

 return $sum;
}

function countSquaresFit($bigSquareSide, $smallSquareSide) { //Задание 4
 // Вычисляем
 $bigSquareArea = $bigSquareSide * $bigSquareSide;

 // Вычисляем площадь
 $smallSquareArea = $smallSquareSide * $smallSquareSide;

 // Вычисляем количество
 $count = $bigSquareArea / $smallSquareArea;

 return $count;
}


abstract class MathOperation {
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

 abstract public function calculatePower();
}





abstract class MathOperation {
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

 abstract public function calculatePower();
}

class AdditionOperation extends MathOperation {
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
}

class SubtractionOperation extends MathOperation {
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

class MultiplicationOperation extends MathOperation {
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





abstract class MathOperation {
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

    abstract public function calculatePower();
}

class AdditionOperation extends MathOperation {
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

class SubtractionOperation extends MathOperation {
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

    public function doCustomOperation() {
        return $this->getBase() / $this->operand;
    }
}

class MultiplicationOperation extends MathOperation {
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

class SquareOperation extends AdditionOperation {
    public function










?>





















