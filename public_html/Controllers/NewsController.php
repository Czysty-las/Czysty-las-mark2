<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewsController
 *
 * @author Lukasz
 */
include_once 'Controller.php';

class NewsController extends Controller {

    function __construct() {
        $this->viewsPath = _ROOT_PATH
                . DIRECTORY_SEPARATOR
                . "Views"
                . DIRECTORY_SEPARATOR . "News" . DIRECTORY_SEPARATOR;
    }

    public function Create() {
        
    }

    public function Delete() {
        
    }

    public function Read() {
        include $this->viewsPath . "NewsListView.php";
    }

    public function Update() {
        
    }

//put your code here
}
