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

    private static function log($_type, $_file, $_source, $_message) {

        $dir = '.' . DIRECTORY_SEPARATOR . 'Logs' . DIRECTORY_SEPARATOR . $_file;
        $logFile = fopen($dir, 'a');
        $log = "\r\n".$_type . $_source . ' ' . date("m.d.y H:m:s") . ' ' . $_message ;
        fwrite($logFile, $log);

        fclose($logFile);
    }

    public static function message($_source, $_message) {
        self::log("Message", 'messages.log', $_source, $_message);
    }

    public static function warning($_contents) {
        
    }

    public static function error($_source, $_message) {
        self::log("Error", 'errors.log', $_source, $_message);
    }

}

?>