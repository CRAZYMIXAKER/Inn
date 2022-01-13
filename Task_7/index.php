<?php

function editArr(array $arr, int $position)
{
    unset($arr[$position]);
    return array_values($arr);
}

$arr = [1, 2, 3, 4, 5];

print_r($arr);
echo "</br>";
print_r(editArr($arr, 3));
