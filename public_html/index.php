<?php

define('_ROOT_PATH', dirname(__FILE__));
include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Resources' . DIRECTORY_SEPARATOR . 'includes.php';

include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Resources' . DIRECTORY_SEPARATOR . 'modulesInitialization.php';


if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'News':
            $_SESSION['newsC']->Presentation();
            break;
    }
} else {
    include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Presentation' . DIRECTORY_SEPARATOR . "index.php";
}
?>