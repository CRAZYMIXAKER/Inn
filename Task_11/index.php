<?php

class Singleton
{
    private static $instances = [];

    protected function __construct()
    {
        //not clone with "new"
    }

    protected function __clone()
    {
        //not clone
    }

    public function __wakeup()
    {
        throw new Exception("Cannot unserialize a singleton.");
    }

    public static function getInstance(): Singleton
    {
        $cls = static::class;
        if (!isset(static::$instances[$cls])) {
            static::$instances[$cls] = new static();
        }

        return static::$instances[$cls];
    }

    public static function code()
    {
        $s1 = static::getInstance();
        $s2 = static::getInstance();
        if ($s1 === $s2) {
            echo "Singleton works, both variables contain the same instance.<br>";
        } else {
            echo "Singleton failed, variables contain different instances.<br>";
        }
    }
}

class SingletonsHeir extends Singleton
{
}


SingletonsHeir::code();
var_dump(Singleton::getInstance());
echo '<br>';
var_dump(SingletonsHeir::getInstance());
