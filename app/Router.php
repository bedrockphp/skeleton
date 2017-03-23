<?php

namespace App;

use Bedrock\Routing\Router as HttpRouter;

class Router extends HttpRouter
{
    public function __construct()
    {
        $this->get('/', function () {
            return view()->render('welcome');
        });
    }
}
