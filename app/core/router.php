<?php

require_once dirname(__DIR__) ."/controller/controllerV1.php";

$routes = [
    '/' => [
        'controller' => 'controllerV1.php',
        'action' => 'affichage'
    ],
       '/login' => [
        'controller' => 'controllerV1.php',
        'action' => 'login'
    ],
       '/logout' => [
        'controller' => 'controllerV1.php',
        'action' => 'logout'
    ],
];

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (isset($routes[$uri])) {

    $action = $routes[$uri]['action'];

    $action();

} else {
    echo 'page introuvable';
}