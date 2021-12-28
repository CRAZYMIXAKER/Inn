<?php

function fib(int $n, array $arr = [1, 1]): float
{
    do {
        $arr[] = $arr[count($arr) - 1] + $arr[count($arr) - 2];
    } while (floor(log10($arr[count($arr) - 1]) + 1) <= $n);
    return $arr[count($arr) - 1];
}

echo fib(100);
