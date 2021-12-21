<?php
error_reporting(E_ALL);

use applicationCore\core\Router;

$query = rtrim($_SERVER['QUERY_STRING'], '/');

define("DEBUG", 1);
define('WWW', __DIR__);
define('CORE', dirname(__DIR__) . '/vendor/applicationCore/core');
define('ROOT', dirname(__DIR__));
define('LIBS', dirname(__DIR__) . '/vendor/applicationCore/libs');
define('APP', dirname(__DIR__) . '/app');
define('LAYOUT', 'default');

require '../vendor/applicationCore/libs/functions.php';
require __DIR__ . '/../vendor/autoload.php';

new \applicationCore\core\App;

// defaults routs

Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

Router::dispatch($query);