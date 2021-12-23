<?php

function greatestNumber(int $a, int $b, int $c): int
{
    return $a > $b && $a > $c ? $a : ($b > $a && $b > $c ? $b : $c);
}

echo 'Наибольшее число: ' . greatestNumber(30, 20, 10);
