<?php

function digit(int $number): int
{
    do {
        $numberToString = (string)$number;
        $count = 0;

        for ($i = 0; $i < strlen($numberToString); $i++) {
            $count += (int)$numberToString[$i];
        }

        $number = (string)$count;
    } while (strlen($number) > 1);

    return $number;
}

echo digit(5689);
