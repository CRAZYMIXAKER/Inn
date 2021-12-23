<?php

function sumThree(int $number, array $arr = [2, 7, 7, 1, 8, 2, 7, 8, 7]): array
{
    for ($i = 0; $i < count($arr) - 2; $i++) {
        $firstNumber = $arr[$i];
        $secondNumber = $arr[$i + 1];
        $thirdNumber = $arr[$i + 2];
        $number == ($firstNumber + $secondNumber + $thirdNumber) ? $output[] = [$firstNumber . ' + ' . $secondNumber . ' + ' . $thirdNumber . ' = ' . $number] : $output=[];
    }
    return $output;
}

print_r(sumThree(16));
