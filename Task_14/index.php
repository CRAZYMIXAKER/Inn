<?php

require __DIR__ . '/vendor/autoload.php';

use src\Authorization;
use src\Twig;

$objTwig = new Twig();

$pageTitle = '';
$pageTemplate = 'base';
$errors = [];
$pageContent = $objTwig->template('index', ['errors' => $errors]);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $objAuthorization = new Authorization($_POST['email'], $_POST['password']);
    $pageContent = $objAuthorization->signIn();
}


$html = $objTwig->template("$pageTemplate", [
    'title' => $pageTitle,
    'content' => $pageContent
]);

echo $html;