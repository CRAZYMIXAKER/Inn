<?php

abstract class Product implements Services
{
    protected static $arrayProduct = [
        "TV" => [
            0 => [
                "name" => "OLED55C1RLA",
                "manufacturer" => "LG",
                "releaseDate" => "2021",
                "cost" => 4700
            ],
            1 => [
                "name" => "UE50TU7090UXRU",
                "manufacturer" => "SAMSUNG",
                "releaseDate" => "2020",
                "cost" => 1500
            ],
            2 => [
                "name" => "43U600KD",
                "manufacturer" => "KIVI",
                "releaseDate" => "2019",
                "cost" => 1200
            ]
        ],
        "Laptop" => [
            0 => [
                "name" => "MagicBook X14 NBR-WAI9",
                "manufacturer" => "Honor",
                "releaseDate" => "2021",
                "cost" => 1600
            ],
            1 => [
                "name" => 'MacBook Air 13" M1 A2337',
                "manufacturer" => "Apple",
                "releaseDate" => "2020",
                "cost" => 3000
            ],
            2 => [
                "name" => "Vivobook 14 X409FA-BV606",
                "manufacturer" => "Asus",
                "releaseDate" => "2019",
                "cost" => 1275
            ]
        ],
        "MobilePhone" => [
            0 => [
                "name" => "Redmi 9T 4GB/128GB",
                "manufacturer" => "Xiaomi",
                "releaseDate" => "2021",
                "cost" => 450
            ],
            1 => [
                "name" => "Galaxy A03s 3GB/32GB",
                "manufacturer" => "SAMSUNG",
                "releaseDate" => "2020",
                "cost" => 330
            ],
            2 => [
                "name" => "Y31 4Gb/64Gb",
                "manufacturer" => "vivo",
                "releaseDate" => "2019",
                "cost" => 480
            ]
        ],
        "Refrigerator" => [
            0 => [
                "name" => "KGV36NL1AR",
                "manufacturer" => "Bosch",
                "releaseDate" => "2021",
                "cost" => 999
            ],
            1 => [
                "name" => "DoorCooling+ GA-B459MMQM",
                "manufacturer" => "LG",
                "releaseDate" => "2020",
                "cost" => 1780
            ],
            2 => [
                "name" => "XM-4214-000",
                "manufacturer" => "ATLANT",
                "releaseDate" => "2019",
                "cost" => 850
            ]
        ]
    ];

    public function __set(string $key, array $value)
    {
        static::$arrayProduct[static::class][] = [
            "name" => $value[0],
            "manufacturer" => $value[1],
            "releaseDate" => $value[2],
            "cost" => $value[3]
        ];
    }

    public function __get(string $key)
    {
        return static::$arrayProduct[$key];
    }

    abstract public function getAll();
}
