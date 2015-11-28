<?php

require("../vendor/autoload.php");

$router = new \Custom\Router;

$routes = [
    '/' => 'Main:index@get',
    '/test' => 'Main:test@get',
];

$router->addRoutes($routes);

$router->run();