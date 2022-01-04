<?php

ini_set('max_file_uploads', '1');

require __DIR__ . '/../vendor/autoload.php';

use src\Twig;
use src\File;

$objTwig = new Twig();
//$arrParam = [];
$arrParam['pathToViews'] = 'index';

if (isset($_FILES['file'])) {
$objFile = new File();
$arrParam = $objFile -> workWithFile($_FILES['file']);
}

$html = $objTwig->template($arrParam['pathToViews'], $arrParam);

echo $html;
