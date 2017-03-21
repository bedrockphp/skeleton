<?php

namespace App;

use Bedrock\Routing\Router as HttpRouter;

class Router extends HttpRouter
{
    public function __construct()
    {
        $this->get('/', function () {
            return 'cool route :)';
        });

        $this->get('/something/{foo}/foo/{?bar}', function ($foo, $bar = '') {
            return 'you entered '.$foo.' and '.$bar;
        });

        $this->get('/test', function () {
            return 'this is the etest routre';
        });

        $this->post('/test', function () {
            return 'this time you used post!';
        });

        $this->put('/test', function () {
            return 'and now put!';
        });

        $this->delete('/test', function () {
            return 'testing delete requests';
        });
    }
}
