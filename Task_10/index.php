<?php

function Collatz(int $input): array
{
    $arr[] = $input;

    if ($input > 0) {
        do {
            if ($input % 2 == 0) {
                $input /= 2;
            } elseif ($input % 2 > 0) {
                $input = $input * 3 + 1;
            }
            $arr[] = $input;
        } while ($input != 1);
    } else {
        echo 'Отрицательное число';
    }
    return $arr;
}

print_r(Collatz(12));
