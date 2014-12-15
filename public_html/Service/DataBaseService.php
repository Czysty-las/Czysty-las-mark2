<?php

/**
 * Description of DataBaseService
 *
 * @author Lukasz
 */
define('ALL', 0);                               //  Połacz wszystkie
define('Config', 'DBconfig.conf');              //  Nazwa pliku konfiguracji

class DataBaseInfo{
    public $host;       //  Host bazy danych.
    public $user;       //  Urzytkownik.
    public $passW;      //  Hasło.
    public $DB;         //  Nazwa bazy danych.
}

class DataBaseService {
    /* ----- Status połaczeń MySQL----- */

    private $isConnected = array();      //   Flaga poprawności połączenia.   
    private $connectionErrors = array();      //   Komunikat błędu.   
    
    private $dbInfo = array();  //  Informacje połączeniowe

    public function __construct() {
        
    }

    public function connect($_connectTo) {
        if(!$_connectTo){   //Połączenie do wszystkich.
            
        }
        else{               //  Połączenie do wybranej.
            
        }
    }

    public function disconnect() {
        
    }
}
