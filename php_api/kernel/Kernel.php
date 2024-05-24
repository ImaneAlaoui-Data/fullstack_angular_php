<?php
/**
 * Kernel
 *  Base class running first
 * @author Aélion <jean-luc.aubert@aelion.fr>
 * @version 1.0.0
 *  - Instanciate router
 *  - Handle request
 *  - Return Response object
 */
namespace Aelion;

use Aelion\Router;

class Kernel {
    /**
     * Internal router
     */
    private Router $router;

    private function __construct() {
        $this->setRouter();
    }

    private function setRouter() {
        $this->router = new Router();
    }
}