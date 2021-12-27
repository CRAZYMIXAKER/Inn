<?php

function greatestNumber(int $a, int $b, int $c): int
{
    return $a > $b && $a > $c ? $a : ($b > $a && $b > $c ? $b : $c);
}

echo 'Greatest Number: ' . greatestNumber(10, 20, 30);
