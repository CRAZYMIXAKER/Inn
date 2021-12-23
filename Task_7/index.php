<?php

function editArr(array $arr, int $position)
{
    var_dump($arr);
    unset($arr[$position]);

    echo "</br>";
    $arr = array_values($arr);
    var_dump($arr);
}

editArr([1, 2, 3, 4, 5], 3);
