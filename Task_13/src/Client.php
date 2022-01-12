<?php

class Client
{
    protected static $arrClient = [];

    public function __destruct()
    {
        $this->adviseService();
    }

    public function addServices($className, $position)
    {
        $obj = new $className();
        $service = $obj->{$className}[$position];

        self::$arrClient[] = $service;
    }

    public function getInf()
    {
        return self::$arrClient;
    }

    public function sumCount()
    {
        $cost = 0;
        foreach (self::$arrClient as $item) {
            foreach ($item as $key => $value) {
                if ($key == "cost") {
                    $cost += $value;
                }
            }
        }
        return $cost;
    }

    public function adviseService()
    {
        if (self::$arrClient != []) {
            $objService = new Warranty();

            echo "You have selected a product. Don't want to purchase additional services?<br><br>Service list: <br>";
            foreach ($objService->getAll() as $key => $product) {
                echo $key . "<br>";
                foreach ($product as $item) {
                    echo "<pre>";
                    print_r($item);
                    echo "<br>";
                    echo "</pre>";
                }
                echo "<br>";
            }
        }
    }
}
