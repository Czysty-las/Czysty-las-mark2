<?php

define('_ROOT_PATH', dirname(__FILE__));
include '.' . DIRECTORY_SEPARATOR . 'Resources' . DIRECTORY_SEPARATOR . 'includes.php';

session_start();
// <editor-fold desc="Nawiązanie połączenia z bazą." defaultstate="collapsed">

DataBaseService::Initialize();
DataBaseService::Connect(ALL);

// </editor-fold >
// <editor-fold desc="Akcje" defaultstate="collapsed">

if (isset($_POST['function'])) {
    switch ($_POST['function']) {
        case 'login';
            UserService::LogIn($_POST['login'], $_POST['password']);
            break;
    }
}

if (isset($_GET['function'])) {
    switch ($_GET['function']) {
        case 'logoff';
            UserService::LogOff();
            break;
    }
}

// </editor-fold>


/* ----- Główny HUB aplikacji ----- */


// <editor-fold desc="Rooting." defaultstate="collapsed">

if (!isset($_GET['page'])) {
    $_GET['page'] = 'index';
}

if ($_GET['page'] == 'index') {
    if (isset($_SESSION['User'])) {
        include './Views/ContentManagementSystemView.php';
    } else {
        include './Views/LogInView.php';
    }
} else {
    
}
// </editor-fold >
?>