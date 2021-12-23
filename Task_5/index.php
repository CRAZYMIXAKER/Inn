<?php

function fib(int $n, array $arr = [1, 1]): float
{
    do {
        $arr[] = $arr[count($arr) - 1] + $arr[count($arr) - 2];
    } while (count($arr) <= $n);
    return $arr[$n];
}

echo fib(100);
