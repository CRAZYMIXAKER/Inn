<?php

class Configure extends Service
{
    public function getAll(): array
    {
        return self::$arrayService;
    }
}
