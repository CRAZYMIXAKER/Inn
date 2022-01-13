<?php

class Refrigerator extends Product
{
    public function getAll(): array
    {
        return parent::$arrayProduct;
    }
}
