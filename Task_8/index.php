<?php

function workWithJSON(mixed $json)
{
    var_dump(json_decode($json));
    echo '</br></br>';
    var_dump(json_decode($json, true));
}

$json = '{
	"Title": "The Cuckoos Calling",
	"Author": "Robert Galbraith",
	"Detail": {
	"Publisher": "Little Brown"
	}
	}';

workWithJSON($json);
