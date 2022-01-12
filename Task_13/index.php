<?php

interface Services
{
    public function getAll();
}

require __DIR__ . '/autoload.php';

//show all products for client
$objProduct = new TV();

echo 'Product list: <br>';
foreach ($objProduct->getAll() as $key => $product) {
    echo $key . "<br>";
    foreach ($product as $item) {
        echo "<pre>";
        print_r($item);
        echo "<br>";
        echo "</pre>";

    }
    echo "<br>";
}

//add product to arrayProduct
$objTV = new TV();
$objTV->tv = ["test", "tt", "2023", 5555];
$objTV->tv = ["b", "b", "20223", 553255];

$objLaptop = new Laptop();
$objLaptop->lp = ["a", "a", "202323", 5];

$objConfigure = new Configure();
$objConfigure->cf = ["4 days", "Configure3214", 241];

//add services to client (create customer cart)
$objTest = new Client;
$objTest->addServices("TV", 2);
$objTest->addServices("Laptop", 0);
$objTest->addServices("TV", 1);
$objTest->addServices("Refrigerator", 2);
$objTest->addServices("MobilePhone", 1);
//add service to arrayClient
$objTest->addServices("Delivery", 0);
$objTest->addServices("Configure", 1);
$objTest->addServices("Install", 2);
$objTest->addServices("Warranty", 1);

echo '<br>Customer cart: <br>';
foreach ($objTest->getInf() as $value) {
    echo "<pre>";
    print_r($value);
    echo '<br>';
    echo '</pre>';
}

echo "<br>Total amount: " . $objTest->sumCount();
echo "<br><br>";
