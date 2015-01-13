<?php

define('_ROOT_PATH', dirname(__FILE__));
include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Resources' . DIRECTORY_SEPARATOR . 'includes.php';

session_start();

DataBaseService::Initialize();
DataBaseService::Connect(ALL);


if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'News':
            $q = 'SELECT * FROM `news` ORDER BY `news`.`Id` DESC';
            $_SESSION['rez'] = DataBaseService::Query(0, $q);

            include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Presentation' . DIRECTORY_SEPARATOR . "News.php";
            break;
    }
} else {
    include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Presentation' . DIRECTORY_SEPARATOR . "index.php";
}
?>