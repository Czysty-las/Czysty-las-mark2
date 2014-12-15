<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LogService
 *
 * @author Lukasz
 */
class LogService {
    
    private $toFile;    //  Logowanie do pliku, czy do widoku.
    
    public function __construct($_toFile) {
        $this->toFile = $_toFile;
    }
    
    public function log($_contents){
        
    }
    
    public function  message($_contents){
        
    }
    
    public function warning($_contents){
        
    }
    
    public function error($_contents){
        
    }

    //put your code here
}
?>