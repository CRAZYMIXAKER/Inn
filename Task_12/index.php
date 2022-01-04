class MyCalculator
{
    private int $numberOne;
    private int $numberTwo;
    private string|int|float $result;

    public function __construct(int $numberOne, int $numberTwo)
    {
        $this->numberOne = $numberOne;
        $this->numberTwo = $numberTwo;
    }

    public function __toString()
    {
        return $this->result;
    }

    public function add(): MyCalculator
    {
        $this->result = $this->numberOne + $this->numberTwo;
        return $this;
    }

    public function minus(): MyCalculator
    {
        $this->result = $this->numberOne - $this->numberTwo;
        return $this;
    }

    public function multiply(): MyCalculator
    {
        $this->result = $this->numberOne * $this->numberTwo;
        return $this;
    }

    public function divide(): MyCalculator
    {
        $this->result = $this->numberTwo == 0 ? 'Cannot be divisible by 0' : $this->numberOne / $this->numberTwo;
        return $this;
    }

    public function addBy(int $number): float
    {
        return $this->result + $number;
    }

    public function minusBy(int $number): float
    {
        return $this->result - $number;
    }

    public function multiplyBy(int $number): float
    {
        return $this->result * $number;
    }

    public function divideBy(int $number): string|int|float
    {
        return $number == 0 ? 'Cannot be divisible by 0' : $this->result / $number;
    }
}

$mycalc = new MyCalculator(12, 6);
echo $mycalc->add() . '<br>'; // Displays 18
echo $mycalc->multiply() . '<br>'; // Displays 72
// Calculation by chain
echo $mycalc->add()->divideBy(0); // Displays 2
