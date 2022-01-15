<?php

function greatestNumber(int $inputNumber): string
{
    return $inputNumber > 30 ? "$inputNumber - greatest number"  : ($inputNumber > 20 ? "30" : ($inputNumber > 10 ? "20, 30" : "10, 20, 30"));
}

echo greatestNumber(15);
