<?php

require __DIR__ . '/../vendor/autoload.php';

use controllers\Registration;
use core\Twig;

$odjTwig = new Twig();

$controllerName = $_GET['controllerName'] ?? 'Registration';
$path = "controllers/$controllerName.php";
$pageContent = $pathToView = '';
$pageTitle = 'Error404';

if (!file_exists($path)) {
    $pathToView = 'v_404';
} else {
    $objClass = new Registration();
    $pageContent = $objClass->main($_SERVER['REQUEST_METHOD']);
}

$html = $odjTwig->template($pageContent === '' ? $pathToView : $pageContent['pathToView'],
    $pageContent === '' ? ['title' => $pageTitle] : $pageContent);
echo $html;