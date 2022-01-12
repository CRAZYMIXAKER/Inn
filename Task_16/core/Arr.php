<?php

namespace core;

class Arr
{

    function extractFields(array $target, array $fields): array
    {
        $res = [];

        foreach ($fields as $field) {
            $res[$field] = trim($target[$field]);
        }

        return $res;
    }
}