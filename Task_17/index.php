<?php
session_start();
require __DIR__ . '/vendor/autoload.php';

use controllers\Authorization;

$_SESSION['user'] = (new core\Auth)->authGetUser();

$pathToView = "v_404";
$uri = $_SERVER['REQUEST_URI'];
$badUrl = '/' . 'index.php';

if (str_starts_with($uri, $badUrl)) {
    $controller = 'Error';
    $method = 'badUrl';
} else {
    $routes = include('routes.php');
    $url = $_GET['querysystemurl'] ?? '';

    $routerRes = (new core\System)->parseUrl($url, $routes);
    $controller = $routerRes['controller'];
    $method = $routerRes['method'];
    define('URL_PARAMS', $routerRes['params']);
}
$pathToController = "controllers/$controller.php";
$pageTitle = $pageContent = '';

if (!file_exists($pathToController)) {
    $controller = 'Error';
    $method = 'notFound';
}

$class = "controllers\\" . $controller;
$objClass = new $class;
$objMethod = $method;
$pageContent = $objClass->$objMethod();

$html = (new core\Twig)->template($pageContent === '' ? $pathToView : $pageContent['pathToView'],
    $pageContent === '' ? ['title' => $pageTitle] : $pageContent);

echo $html;