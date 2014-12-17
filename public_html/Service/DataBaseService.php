<?php

/**
 * Description of DataBaseService
 *
 * @author Lukasz
 */

// <editor-fold desc="Definicje." defaultstate="collapsed">

define('ALL', 0);                               //  Połacz wszystkie
define('Config', 'DBconfig.conf');              //  Nazwa pliku konfiguracji

// </editor-fold>

// <editor-fold desc="Struktury pomocnicze." defaultstate="collapsed">

class DataBaseInfo {
    public $host;       //  Host bazy danych.
    public $user;       //  Urzytkownik.
    public $passW;      //  Hasło.
    public $DB;         //  Nazwa bazy danych.
}

class DataBaseStatus{
   public $isConnected;             //   Flaga poprawności połączenia. 
   public $connectionErrors;        //   Komunikat błędu.   
   public $dbInfo;                  //  Informacje połączeniowe
}

// </editor-fold>

class DataBaseService {

    // <editor-fold desc="Status połączenia z bazą MySQL." defaultstate="collapsed">

    /* ----- Status połaczeń MySQL----- */
    
    private $dbStatus = array();  
    
    // </editor-fold>
    
    // <editor-fold desc="Konstruktory" defaultstate="collapsed">

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