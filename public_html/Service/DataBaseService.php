<?php

/**
 * Description of DataBaseService
 *
 * @author Lukasz
 */
// <editor-fold desc="Definicje." defaultstate="collapsed">

define('ALL', 0);                               //  Połacz wszystkie
define('Config', 'DBconfig.conf');              //  Nazwa pliku konfiguracji

include 'LogService.php';

// </editor-fold>
// <editor-fold desc="Struktury pomocnicze." defaultstate="collapsed">

class DataBaseInfo {

    public $host;       //  Host bazy danych.
    public $user;       //  Urzytkownik.
    public $passW;      //  Hasło.
    public $DB;         //  Nazwa bazy danych.

    function __construct() {
        $this->host = $this->user = $this->passW = $this->DB = "";
    }

    public function Conect() {
        // <editor-fold desc="Inicjalizacja połączenia z bazą danych." defaultstate="collapsed">

        try {
            $h = 'mysql:host=' . $this->host;
            $db = 'dbname=' . $this->DB;
            $u = $this->user;
            $p = $this->passW;


            $pdo = new PDO($h . ';' . $db, $u, $p);
        } catch (Exception $ex) {   //  Łapanie wyjątku jeśli połączenie nie zostało nawiązane. 
            LogService::error("DataBaseService", "MySql connection error " . $ex->getMessage());
        }
        
        // </editor-fold>
        
        return $pdo;                //  Zwrócenie obiektu bazyodanowego.
    }

}

class DataBaseStatus {

    public $isConnected;             //   Flaga poprawności połączenia. 
    public $connectionErrors;        //   Komunikat błędu.   
    public $dbInfo;                  //  Informacje połączeniowe

    function __construct() {
        $this->dbInfo = new DataBaseInfo();
    }

}

// </editor-fold>

class DataBaseService {

    // <editor-fold desc="Status połączenia z bazą MySQL." defaultstate="collapsed">

    /* ----- Status połaczeń MySQL----- */
    private $index = 0;
    private $dbStatus = array();

    // </editor-fold>
    // <editor-fold desc="Konstruktory" defaultstate="collapsed">

    public function __construct() {
        // <editor-fold desc="Parser pliku konfiguracyjnego bazy danych." defaultstate="collapsed">

        $dir = '.' . DIRECTORY_SEPARATOR . 'Configuration' . DIRECTORY_SEPARATOR . Config;

        if (file_exists($dir)) {                                                    //  Jesli plik konfuguracyjny istnieje - rozpoczęcie parsowania
            $configFile = fopen($dir, 'r');                                         //  Otwarcie pliku do odczytu.
            while (true) {

                if (feof($configFile))                                              //  Jeśli koniec pliku przerwanie pętli.
                    break;

                $line = fgets($configFile);                                         //  Pobranie lini pliku

                if (strstr($line, "# Start DB")) {                                  //  Znacznik początku konfiguracji bazy danych
                    $this->dbStatus[$this->index] = new DataBaseStatus();
                } else if (strstr($line, "# End DB")) {                             //  Znacznik końca konfuguracji bazy nadych
                    ++$this->index;
                } else {

                    $db = explode(";", $line);

                    if (strstr($db[0], "HOST")) {                                   //  Odczytanie hosta
                        if (isset($db[1])) {
                            $this->dbStatus[$this->index]->dbInfo->host = $db[1];
                        }
                    }
                    if (strstr($db[0], "USER")) {                                   //  Odczytanie urztkownika
                        if (isset($db[1])) {
                            $this->dbStatus[$this->index]->dbInfo->user = $db[1];
                        }
                    }
                    if (strstr($db[0], "PASSW")) {                                  //  Odczytanie hasła
                        if (isset($db[1])) {
                            $this->dbStatus[$this->index]->dbInfo->passW = $db[1];
                        }
                    }
                    if (strstr($db[0], "DB")) {                                     //  Odczytanie właściwa baza
                        if (isset($db[1])) {
                            $this->dbStatus[$this->index]->dbInfo->DB = $db[1];
                        }
                    }
                }
            }
        } else {                                                                    //  Jeśli plik nie został odnaleziony. Odwpowiedni log.                                                                   
            LogService::error('DataBaseService', 'Configuration file not found at: ' . $dir);
        }
        fclose($configFile);                                                        //  Zamknięcie pliku konfiguracyjnego.
        
        // </editor-fold>
    }

    // </editor-fold>

    public function connect($_connectTo) {
        if (!$_connectTo) {   //Połączenie do wszystkich.
            foreach ($this->dbStatus as $db) {
                $db->dbInfo->Conect();
            }
        } else {               //  Połączenie do wybranej.
        }
    }

    public function disconnect() {
        
    }

}

?>