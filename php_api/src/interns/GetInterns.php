<?php
/** 
 * GetInterns Returns list of interns
 * @author Aélion
 * @version
 *  - Poor list implementation
*/
require_once(__DIR__ . '/../http/request/Request.php');
require_once(__DIR__ . '/../core/controller/Controller.php');

final class GetInterns implements Controller {
    private Request $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }

    /**
     * @override
     * @see Core/Controller/Controller
     */
    public function processRequest() {
        return 'List of Interns';
    }
}