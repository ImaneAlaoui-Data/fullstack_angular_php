<?php
require_once(__DIR__ . '/../core/controller/Controller.php');
require_once(__DIR__ . '/../interns/InternServiceImpl.php');

final class Getoneintern implements Controller {
    private InternServiceImpl $service;

    public function __construct() {
        $this->service = new InternServiceImpl();
    }

    public function processRequest(): string {
        header('Content-Type: application/json');

        try {
            $result = $this->service->findOne(10);
            return json_encode($result);
        } catch (Exception $e) {
            return json_encode([
                'error' => true,
                'message' => $e->getMessage()
            ]);
        }
        
    }
}