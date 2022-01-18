<?php

namespace core;

/**
 * processes an array
 */
class Arr
{
    /**
     * receives an array of entered information with a transfer method,
     * processes and returns the correct array of information
     *
     * @param array $target
     * @param array $fields
     * @return array
     */
    function extractFields(array $target, array $fields): array
    {
        $res = [];

        foreach ($fields as $field) {
            $res[$field] = trim($target[$field]);
        }

        return $res;
    }
}