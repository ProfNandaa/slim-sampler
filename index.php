<?php

require("vendor/autoload.php");

$config = require("src/config.php");
$router = new \Custom\Router($config);

$routes = [
    '/' => 'Main:index@get',
    '/test' => 'Main:test@get',
    '/api' => 'Api:index@get',
];

$router->addRoutes($routes);

$router->run();