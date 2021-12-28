<?php
interface Services
{
    public function getAll();
}

abstract class Product implements Services
{
    protected static $arrayProduct = [
        "TV"=>[
            0 =>[
                "name"=>"OLED55C1RLA",
                "manufacturer" => "LG",
                "releaseDate" => "2021",
                "cost" => 4700
            ],
            1 =>[
                "name"=>"UE50TU7090UXRU",
                "manufacturer" => "SAMSUNG",
                "releaseDate" => "2020",
                "cost" => 1500
            ],
            2 =>[
                "name"=>"43U600KD",
                "manufacturer" => "KIVI",
                "releaseDate" => "2019",
                "cost" => 1200
            ]
        ],
        "Laptop"=>[
            0 =>[
                "name"=>"MagicBook X14 NBR-WAI9",
                "manufacturer" => "Honor",
                "releaseDate" => "2021",
                "cost" => 1600
            ],
            1 =>[
                "name"=>'MacBook Air 13" M1 A2337',
                "manufacturer" => "Apple",
                "releaseDate" => "2020",
                "cost" => 3000
            ],
            2 =>[
                "name"=>"Vivobook 14 X409FA-BV606",
                "manufacturer" => "Asus",
                "releaseDate" => "2019",
                "cost" => 1275
            ]
        ],
        "MobilePhone"=>[
            0 =>[
                "name"=>"Redmi 9T 4GB/128GB",
                "manufacturer" => "Xiaomi",
                "releaseDate" => "2021",
                "cost" => 450
            ],
            1 =>[
                "name"=>"Galaxy A03s 3GB/32GB",
                "manufacturer" => "SAMSUNG",
                "releaseDate" => "2020",
                "cost" => 330
            ],
            2 =>[
                "name"=>"Y31 4Gb/64Gb",
                "manufacturer" => "vivo",
                "releaseDate" => "2019",
                "cost" => 480
            ]
        ],
        "Refrigerator"=>[
            0 =>[
                "name"=>"KGV36NL1AR",
                "manufacturer" => "Bosch",
                "releaseDate" => "2021",
                "cost" => 999
            ],
            1 =>[
                "name"=>"DoorCooling+ GA-B459MMQM",
                "manufacturer" => "LG",
                "releaseDate" => "2020",
                "cost" => 1780
            ],
            2 =>[
                "name"=>"XM-4214-000",
                "manufacturer" => "ATLANT",
                "releaseDate" => "2019",
                "cost" => 850
            ]
        ]
    ];

    public function __set(string $key, array $value)
    {
        static::$arrayProduct[static::class][] = [
            "name"=> $value[0],
            "manufacturer" => $value[1],
            "releaseDate" => $value[2],
            "cost" => $value[3]
        ];
    }

    public function __get(string $key)
    {
        return static::$arrayProduct[$key];
    }

    public function getAll()
    {
        return self::$arrayProduct;
    }
}
abstract class Service implements Services
{
    protected static $arrayService = [
        "Warranty"=>[
                0 =>[
                        "deadline"=>"7 days",
                        "runQueue" => "warranty",
                        "cost" => 300
                ],
                1 =>[
                        "deadline"=>"3 days",
                        "runQueue" => "warranty2",
                        "cost" => 200
                ],
                2 =>[
                        "deadline"=>"1 days",
                        "runQueue" => "warranty3",
                        "cost" => 370
                ]
        ],
        "Delivery"=>[
                0 =>[
                        "deadline"=>"4 days",
                        "runQueue" => "delivery",
                        "cost" => 425
                ],
                1 =>[
                        "deadline"=>'1 days',
                        "runQueue" => "delivery2",
                        "cost" => 125
                ],
                2 =>[
                        "deadline"=>"2 days",
                        "runQueue" => "delivery3",
                        "cost" => 86
                ]
        ],
        "Install"=>[
                0 =>[
                        "deadline"=>"1 day",
                        "runQueue" => "install1",
                        "cost" => 94
                ],
                1 =>[
                        "deadline"=>"3 days",
                        "runQueue" => "install2",
                        "cost" => 23
                ],
                2 =>[
                        "deadline"=>"5 days",
                        "runQueue" => "install3",
                        "cost" => 111
                ]
        ],
        "Configure"=>[
                0 =>[
                        "deadline"=>"4 days",
                        "runQueue" => "Configure",
                        "cost" => 321
                ],
                1 =>[
                        "deadline"=>"2 days",
                        "runQueue" => "Configure 2",
                        "cost" => 542
                ],
                2 =>[
                        "deadline"=>"1 day",
                        "runQueue" => "Configure3",
                        "cost" => 233
                ]
        ]
];

    public function __set(string $key, array $value)
    {
        static::$arrayService[static::class][] = [
                "name"=> $value[0],
                "manufacturer" => $value[1],
                "releaseDate" => $value[2],
                "cost" => $value[3]
        ];
    }

    public function __get(string $key)
    {
        return static::$arrayService[$key];
    }

    public function getAll()
    {
        return self::$arrayService;
    }
}

class TV extends Product
{
}

class Laptop extends Product
{
}

class MobilePhone extends Product
{
}

class Refrigerator extends Product
{
}

class Warranty extends Service
{
}

class Delivery extends Service
{
}

class Install extends Service
{
}

class Configure extends Service
{
}

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
                    print_r($item);
                    echo "<br>";
                }
                echo "<br>";
            }
        }
    }
}

//show all products for client
$objProduct = new TV();

echo 'Product list: <br>';
foreach ($objProduct->getAll() as $key => $product) {
    echo $key . "<br>";
    foreach ($product as $item) {
        print_r($item);
        echo "<br>";
    }
    echo "<br>";
}

//add product to arrayProduct
$obj = new TV();
$obj->tv = ["test", "tt", "2023", 5555 ];

$obj2 = new TV();
$obj2->tv = ["b", "b", "20223", 553255 ];

$obj3 = new Laptop();
$obj3->lp = ["a", "a", "202323", 5 ];

//add services to arrayclient (create customer cart)
$objTest = new Client;
$objTest->addServices("TV", 2);
$objTest->addServices("Laptop", 0);
$objTest->addServices("TV", 1);
//add service to arrayClient
$objTest->addServices("Delivery", 1);
$objTest->addServices("Configure", 2);

echo '<br>Customer cart: <br>';
foreach ($objTest->getInf() as $value) {
    print_r($value);
    echo'<br>';
}

echo "<br>Total amount: " . $objTest->sumCount();
echo "<br><br>";
