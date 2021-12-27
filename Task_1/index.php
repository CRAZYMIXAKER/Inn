<?php

function greatestNumber(int $a): string
{
    return $a > 30 ? "$a - greatest number"  : ($a > 20 ? "30" : ($a > 10 ? "20, 30" : "10, 20, 30"));
}

echo greatestNumber(15);
