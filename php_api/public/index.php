<?php
/**
 * Dispatcher
 * @author Aélion <jean-luc.aubert@aelion.fr>
 * @version 1.0.0
 *  - Instanciate Kernel

require_once('./../vendor/autoload.php');

use Aelion\Kernel;

ini_set('error_reporting', true);
error_reporting(E_ALL & ~E_NOTICE);

$kernel = Kernel::create();
$response = $kernel->processRequest();
echo $response->send();
*/
$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

require_once('./../src/router/Router.php');
$router = new Router($uri, $method);
$response = $router->route();
echo $response;


