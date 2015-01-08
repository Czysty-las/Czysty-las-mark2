<?php

include_once 'Controller.php';

class CalendarController extends Controller {

    function __construct() {
        $this->viewsPath = _ROOT_PATH
                . DIRECTORY_SEPARATOR
                . "Views"
                . DIRECTORY_SEPARATOR . "Calendar" . DIRECTORY_SEPARATOR;
    }

    public function Create() {
        
    }

    public function Delete() {
        
    }

    public function Read() {
        include $this->viewsPath . 'CalendarListView.php';
    }

    public function Update() {
        
    }

}
