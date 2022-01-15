<?php

abstract class Service implements Services
{
    protected static $arrayService = [
        "Warranty" => [
            0 => [
                "deadline" => "7 days",
                "runQueue" => "warranty",
                "cost" => 300
            ],
            1 => [
                "deadline" => "3 days",
                "runQueue" => "warranty2",
                "cost" => 200
            ],
            2 => [
                "deadline" => "1 days",
                "runQueue" => "warranty3",
                "cost" => 370
            ]
        ],
        "Delivery" => [
            0 => [
                "deadline" => "4 days",
                "runQueue" => "delivery",
                "cost" => 425
            ],
            1 => [
                "deadline" => '1 days',
                "runQueue" => "delivery2",
                "cost" => 125
            ],
            2 => [
                "deadline" => "2 days",
                "runQueue" => "delivery3",
                "cost" => 86
            ]
        ],
        "Install" => [
            0 => [
                "deadline" => "1 day",
                "runQueue" => "install1",
                "cost" => 94
            ],
            1 => [
                "deadline" => "3 days",
                "runQueue" => "install2",
                "cost" => 23
            ],
            2 => [
                "deadline" => "5 days",
                "runQueue" => "install3",
                "cost" => 111
            ]
        ],
        "Configure" => [
            0 => [
                "deadline" => "4 days",
                "runQueue" => "Configure",
                "cost" => 321
            ],
            1 => [
                "deadline" => "2 days",
                "runQueue" => "Configure 2",
                "cost" => 542
            ],
            2 => [
                "deadline" => "1 day",
                "runQueue" => "Configure3",
                "cost" => 233
            ]
        ]
    ];

    public function __set(string $key, array $value)
    {
        static::$arrayService[static::class][] = [
            "deadline" => $value[0],
            "runQueue" => $value[1],
            "cost" => $value[2]
        ];
    }

    public function __get(string $key): array
    {
        return static::$arrayService[$key];
    }

    abstract public function getAll();
}
