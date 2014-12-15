<?php

/**
 * Description of DataBaseService
 *
 * @author Lukasz
 */
// <editor-fold desc="Definicje.">

define('ALL', 0);                               //  Połacz wszystkie
define('Config', 'DBconfig.conf');              //  Nazwa pliku konfiguracji
// </editor-fold>

class DataBaseInfo {

    public $host;       //  Host bazy danych.
    public $user;       //  Urzytkownik.
    public $passW;      //  Hasło.
    public $DB;         //  Nazwa bazy danych.

}

class DataBaseService {

    // <editor-fold desc="Status połączenia z bazą MySQL.">

    /* ----- Status połaczeń MySQL----- */

    private $isConnected = array();      //   Flaga poprawności połączenia.   
    private $connectionErrors = array();      //   Komunikat błędu.   
    private $dbInfo = array();  //  Informacje połączeniowe

    // </editor-fold>
    
    
    // <editor-fold desc="Konstruktory">

    public function __construct() {
        
    }

    // </editor-fold>

    public function connect($_connectTo) {
        if (!$_connectTo) {   //Połączenie do wszystkich.
        } else {               //  Połączenie do wybranej.
        }
    }

    public function disconnect() {
        
    }

}
?>