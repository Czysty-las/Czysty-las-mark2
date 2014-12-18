<?php
define('_ROOT_PATH', dirname(__FILE__));
include '.'.DIRECTORY_SEPARATOR.'Resources'.DIRECTORY_SEPARATOR.'includes.php';
/* ----- Główny HUB aplikacji ----- */

echo 'Witaj świecie! </br>';

$t =  new DataBaseService();
$t->connect(ALL);
?>