<?php
/** 
 * GetInterns Returns list of interns
 * @author Aélion
 * @version
 *  - Poor list implementation
*/
require_once(__DIR__ . '/../http/request/Request.php');
require_once(__DIR__ . '/../core/controller/Controller.php');
require_once(__DIR__  . '/InternServiceImpl.php');
final class GetInterns implements Controller {
    private Request $request;
    private InternServiceImpl $service;

    public function __construct(Request $request) {
        $this->request = $request;
        $this->service = new InternServiceImpl();
    }

    /**
     * @override
     * @see Core/Controller/Controller
     */
    public function processRequest(): string {
        header('Content-Type: application/json');
        return json_encode($this->service->findAll());
    }
}