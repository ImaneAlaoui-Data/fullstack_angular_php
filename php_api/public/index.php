<?php
/**
 * Dispatcher
 * @author Aélion <jean-luc.aubert@aelion.fr>
 * @version 1.0.0
 *  - Instanciate Kernel

require_once('./../vendor/autoload.php');

use Aelion\Kernel;

$kernel = Kernel::create();
$response = $kernel->processRequest();
echo $response->send();
*/


require_once('./../src/router/Router.php');
require_once('./../src/http/request/Request.php');


$request = new Request();
$request->processRequest();
$router = new Router($request);
$controller = $router->route();
echo $controller->processRequest();


