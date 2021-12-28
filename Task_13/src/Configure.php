<?php

class Configure extends Service
{
    public function getAll()
    {
        return self::$arrayService;
    }
}
