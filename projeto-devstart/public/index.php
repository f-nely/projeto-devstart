<?php

include '../vendor/autoload.php';

use App\Controller\ErrorController;

// use App\Connection\Connection;

// $connection = Connection::getConnection();

// $query = 'SELECT * FROM tb_category;';

// $prepare = $connection->prepare($query);
// $prepare->execute();

// while ($registro = $prepare->fetchObject()) {
//     var_dump($registro);
// }


$url = explode('?', $_SERVER['REQUEST_URI'])[0];

if (false === isset($routes[$url])) {
    // $e = new ErrorController();
    // $e->notFoundAction();
    ( new ErrorController() )->notFoundAction();
    exit;
}

$controllerName = $routes[$url]['controller'];
$methodName = $routes[$url]['method'];

(new $controllerName())->$methodName();

