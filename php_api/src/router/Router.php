<?php
/**
 * Router : sets application route and resolver
 * @author Aélion
 * @version 1.0.0
 *  - Simple route collection
 */
require_once(__DIR__ . '/../http/request/Request.php');
require_once(__DIR__ . '/../core/controller/Controller.php');
class Router {
    private array $uris = [
        '/' => ['GET' => 'home page'],
        '/interns' => ['GET' => 'interns list', 'POST' => 'Add an intern'],
        '/contact' => ['GET' => 'page contact', 'POST' => 'Send email'],
        '/oneintern' => ['GET' => 'Un interne']
    ];

    private Request $request;

    // DI : Dependency Injection
    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function route(): Controller {
        if (array_key_exists($this->request->getUri(), $this->uris) && array_key_exists($this->request->getMethod(), $this->uris[$this->request->getUri()])) {
            $controllerName = ucfirst(strtolower($this->request->getMethod()));
            $controllerName = $controllerName . substr($this->request->getUri(), 1);
            $className = $controllerName; // Store only class name
            $controllerName = $controllerName . '.php';
            $controllerName = __DIR__ . '/..' . $this->request->getUri() . '/' . $controllerName;
            require_once($controllerName);
            return new $className($this->request);
        }
        throw new \Exception($this->request->getServerProtocol() . ' 400 Bad request');
    }

}