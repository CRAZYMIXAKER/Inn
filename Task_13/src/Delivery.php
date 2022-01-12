<?php

class Delivery extends Service
{
    public function getAll(): array
    {
        return self::$arrayService;
    }
}
