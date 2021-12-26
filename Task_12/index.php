<?php
class Mycalculator
{
    private $numberOne;
    private $numberTwo;
    private $result;

    public function __construct(int $numberOne, int $numberTwo)
    {
        $this->numberOne = $numberOne;
        $this->numberTwo = $numberTwo;
    }

    public function __toString()
    {
        return $this->result;
    }

    public function add(): Mycalculator
    {
        $this->result = $this->numberOne + $this->numberTwo;
        return $this;
    }

    public function multiply(): Mycalculator
    {
        $this->result = $this->numberOne * $this->numberTwo;
        return $this;
    }

    public function minus(): Mycalculator
    {
        $this->result = $this->numberOne - $this->numberTwo;
        return $this;
    }

    public function divideBy(int $number): float
    {
        return $this->result/$number;
    }
}

$mycalc = new MyCalculator(12, 6);
echo $mycalc->add() . '<br>'; // Displays 18
echo $mycalc->multiply(). '<br>'; // Displays 72
// Calculation by chain	`
echo $mycalc->add()->divideBy(9); // Displays 2 ( (12+6)/9=2 )
