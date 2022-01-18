<?php
session_start();
require __DIR__ . '/vendor/autoload.php';

use controllers\Authorization;

$_SESSION['user'] = (new core\Auth)->authGetUser();

$pathToView = "v_404";
$pageTitle = $pageContent = '';
$uri = $_SERVER['REQUEST_URI'];
$badUrl = '/' . 'index.php';

if (str_starts_with($uri, $badUrl)) {
    $controller = 'Error';
    $method = 'badUrl';
} else {
    $_url = array_filter(explode('/', (new core\System)->get('url')));
    $parseUrl = (new core\System)->parseUrl($_url);
    $controller = $parseUrl['controller'];
    $method = $parseUrl['method'];
}

$class = "controllers\\" . $controller;
$objClass = new $class;
$objMethod = $method;
$pageContent = $objClass->$objMethod();

$html = (new core\Twig)->template($pageContent === '' ? $pathToView : $pageContent['pathToView'],
    $pageContent === '' ? ['title' => $pageTitle] : $pageContent);

echo $html;