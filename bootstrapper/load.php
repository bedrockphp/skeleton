<?php

use Bedrock\Container\Container;
use Bedrock\Helpers\ConfigHelper;

require __DIR__.'/../vendor/autoload.php';

$container = Container::getInstance();

$container->share('config', new ConfigHelper(__DIR__."/../config.php"));
$config = $container->get('config')->bootServices();
