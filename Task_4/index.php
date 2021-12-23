<?php

function editText(string $input): string
{
    $output = preg_split("/[_ -]/ ", $input);
    foreach ($output as $key => $value) {
        $output[$key] = $key == 0 ? $value : mb_strtoupper($value[0]) . substr($value, 1);
    }
    return implode($output);
}

echo editText("The quick-brown_fox jumps over the_lazy-dog");
