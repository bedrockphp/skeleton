<?php

require __DIR__.'/../bootstrapper/load.php';

$router = new App\Router();

echo $router->serveRoute($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI'])
    ->getContent();
