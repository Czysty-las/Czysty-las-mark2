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

    public function Connect() {
        // <editor-fold desc="Inicjalizacja połączenia z bazą danych." defaultstate="collapsed">

        try {
            $h = 'mysql:host=' . $this->host;
            $db = 'dbname=' . $this->DB;
            $u = $this->user;
            $p = $this->passW;


            $pdo = new PDO($h . ';' . $db, $u, $p);
        } catch (Exception $ex) {   //  Łapanie wyjątku jeśli połączenie nie zostało nawiązane. 
            LogService::error("DataBaseService", "MySql connection error " . $ex->getMessage());
            return null;
        }

        // </editor-fold>

        return $pdo;                //  Zwrócenie obiektu bazodanowego.
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
    private static $index = 0;
    private static $dbStatus = array();
    private static $db;

    // </editor-fold>
    // <editor-fold desc="Konstruktory" defaultstate="collapsed">

    public static function Initialize() {
        // <editor-fold desc="Parser pliku konfiguracyjnego bazy danych." defaultstate="collapsed">

        $dir = '.' . DIRECTORY_SEPARATOR . 'Configuration' . DIRECTORY_SEPARATOR . Config;

        if (file_exists($dir)) {                                                    //  Jeśli plik konfuguracyjny istnieje - rozpoczęcie parsowania
            $configFile = fopen($dir, 'r');                                         //  Otwarcie pliku do odczytu.
            while (true) {

                if (feof($configFile))                                              //  Jeśli koniec pliku przerwanie pętli.
                    break;

                $line = fgets($configFile);                                         //  Pobranie lini pliku

                if (strstr($line, "# Start DB")) {                                  //  Znacznik początku konfiguracji bazy danych
                    DataBaseService::$dbStatus[DataBaseService::$index] = new DataBaseStatus();
                } else if (strstr($line, "# End DB")) {                             //  Znacznik końca konfuguracji bazy nadych
                    ++DataBaseService::$index;
                } else {

                    $db = explode(";", $line);

                    if (strstr($db[0], "HOST")) {                                   //  Odczytanie hosta
                        if (isset($db[1])) {
                            DataBaseService::$dbStatus[DataBaseService::$index]->dbInfo->host = $db[1];
                        }
                    }
                    if (strstr($db[0], "USER")) {                                   //  Odczytanie urztkownika
                        if (isset($db[1])) {
                            DataBaseService::$dbStatus[DataBaseService::$index]->dbInfo->user = $db[1];
                        }
                    }
                    if (strstr($db[0], "PASSW")) {                                  //  Odczytanie hasła
                        if (isset($db[1])) {
                            DataBaseService::$dbStatus[DataBaseService::$index]->dbInfo->passW = $db[1];
                        }
                    }
                    if (strstr($db[0], "DB")) {                                     //  Odczytanie właściwa baza
                        if (isset($db[1])) {
                            DataBaseService::$dbStatus[DataBaseService::$index]->dbInfo->DB = $db[1];
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

    public static function Connect($_connectTo) {
        $i = 0;
        if (!$_connectTo) {   //Połączenie do wszystkich.
            
            foreach (DataBaseService::$dbStatus as $_db) {
                DataBaseService::$db[$i] = $_db->dbInfo->Connect();

                if (DataBaseService::$db[$i] != NULL) {     //  Jeśli obiekt został stworzony
                    DataBaseService::$dbStatus[$i]->isConnected = true;                 //  Aktualizacja statusu
                    DataBaseService::$dbStatus[$i]->connectionErrors = "No errors";     //  bazy danych.
                } else {                        //  w przeciwnym razie
                    DataBaseService::$dbStatus[$i]->isConnected = false;                //  Aktualizacja statusu
                    DataBaseService::$dbStatus[$i]->connectionErrors = "Error!";        //  bazy danych.
                }

                ++$i;
            }
        } else {               //  Połączenie do wybranej.
            if ($_connectTo > DataBaseService::$index || $_connectTo < 0) {
                throw new Exception;    // Zwracany jest wyjątek jeśli podany został niewłaściwy index bazy danych
            } else {
                DataBaseService::$dbStatus[$_connectTo]->dbInfo->Conect();
            }
        }
    }

    public static function disconnect() {
        
    }

    public static function Query($_indexDB, $_query) {

        if ($_indexDB > DataBaseService::$index || $_indexDB < 0) {
            throw new Exception;    // Zwracany jest wyjątek jeśli podany został niewłaściwy index bazy danych
        } else {
            return DataBaseService::$db[$_indexDB]->query($_query);
        }
    }

}
