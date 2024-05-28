<?php
/**
 * Router : sets application route and resolver
 * @author Aélion
 * @version 1.0.0
 *  - Simple route collection
 */
class Router {
    private array $uris = [
        '/' => ['GET' => 'home page'],
        '/interns' => ['GET' => 'interns list', 'POST' => 'Add an intern'],
        '/contact' => ['GET' => 'page contact', 'POST' => 'Send email']
    ];

    private string $uri;
    private string $method;

    public function __construct(string $uri, string $method) {
        $this->uri = $uri;
        $this->method = $method;
    }

    public function route(): string {
        if (array_key_exists($this->uri, $this->uris) && array_key_exists($this->method, $this->uris[$this->uri])) {
            return 'Uri : ' . $this->uri . ' with ' . $this->method . ' method says ' . $this->uris[$this->uri][$this->method];
        } else {
            header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
            return 'La ressource : ' . $this->uri . ' n\'est pas autorisée';
        }
    }


}