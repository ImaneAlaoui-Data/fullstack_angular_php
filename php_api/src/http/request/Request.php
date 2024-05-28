<?php
/**
 * Request Handle client request
 * @author Aélion
 * @version 1.0.0
 *  - Simply get uri and method
 *  - Request object will be passed to router
 */
final class Request {
    private string $uri;
    private string $method;
    private string $serverProtocol;

    public function processRequest(): void {
        $this->uri = $_SERVER['REQUEST_URI'];
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->serverProtocol = $_SERVER['SERVER_PROTOCOL'];
    }

    public function getUri(): string {
        return $this->uri;
    }

    public function getMethod(): string {
        return $this->method;
    }

    public function getServerProtocol(): string {
        return $this->serverProtocol;
    }
}