<?php

namespace App;

use Bedrock\Routing\Router as HttpRouter;

class Router extends HttpRouter
{
    public function __construct()
    {
        $this->get('/', function () {
            echo 'cool route';
        });

        $this->get('/test', function () {
            echo 'this is the etest routre';
        });

        $this->post('/test', function () {
            echo 'this time you used post!';
        });

        $this->put('/test', function () {
            echo 'and now put!';
        });

        $this->delete('/test', function () {
            echo 'testing delete requests';
        });
    }
}
