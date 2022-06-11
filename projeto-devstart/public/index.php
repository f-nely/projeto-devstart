<?php

include '../vendor/autoload.php';

$database = 'db_store';
$username = 'nelynely';
$password = '2006si';

$connection = new PDO("mysql:host=localhost;dbname={$database}", $username, $password);

$query = 'SELECT * FROM tb_category;';

$prepare = $connection->prepare($query);
$prepare->execute();

while ($registro = $prepare->fetchObject()) {
    var_dump($registro);
}

// use App\Controller\CategoryController;
// use App\Controller\ErrorController;
// use App\Controller\IndexController;
// use App\Controller\ProductController;

// $url = explode('?', $_SERVER['REQUEST_URI'])[0];

// function createRoute(string $controllerName, string $methodName)
// {
//     return [
//         'controller' => $controllerName,
//         'method' => $methodName,
//     ];
// }

// $routes = [
//     '/' => createRoute(IndexController::class, 'indexAction'),
//     '/produtos' => createRoute(ProductController::class, 'listAction'),
//     '/produtos/novo' => createRoute(ProductController::class, 'addAction'),
// ];

// if (false === isset($routes[$url])) {
//     // $e = new ErrorController();
//     // $e->notFoundAction();
//     ( new ErrorController() )->notFoundAction();
//     exit;
// }

// $controllerName = $routes[$url]['controller'];
// $methodName = $routes[$url]['method'];

// (new $controllerName())->$methodName();

