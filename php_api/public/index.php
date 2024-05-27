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
echo 'Hello PHP';