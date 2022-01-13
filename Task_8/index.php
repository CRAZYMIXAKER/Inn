<?php

function workWithJSON(mixed $json): string
{
    $arr = json_decode($json, true);
    $str="";

    foreach ($arr as $key => $item) {
        if (is_array($item)) {
            foreach ($item as $key => $value) {
                $str .= "$key: $value <br>";
            }
        } else {
            $str .= "$key: $item <br>";
        }
    }

    return $str;
}

$json = '{
	"Title": "The Cuckoos Calling",
	"Author": "Robert Galbraith",
	"Detail": {
	"Publisher": "Little Brown"
	}
	}';


echo workWithJSON($json);
