<?php

include '../vendor/autoload.php';

use App\Controller\CategoryController;
use App\Controller\ErrorController;
use App\Controller\IndexController;
use App\Controller\ProductController;

$url = explode('?', $_SERVER['REQUEST_URI'])[0];
echo $url . '<br>';

$routes = [
    '/projeto-devstart/public/' => [
        'controller' => IndexController::class,
        'method' => 'indexAction',
    ],
    '/projeto-devstart/public/produtos' => [
        'controller' => ProductController::class,
        'method' => 'listAction',
    ],
];

if (false === isset($routes[$url])) {
    $e = new ErrorController();
    $e->notFoundAction();
}

var_dump($routes[$url]);

