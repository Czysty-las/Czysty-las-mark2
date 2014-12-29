<?php

define('_ROOT_PATH', dirname(__FILE__));
include '.' . DIRECTORY_SEPARATOR . 'Resources' . DIRECTORY_SEPARATOR . 'includes.php';

session_start();
// <editor-fold desc="Nawiązanie połączenia z bazą." defaultstate="collapsed">

DataBaseService::Initialize();
DataBaseService::Connect(ALL);

// </editor-fold >


/* ----- Główny HUB aplikacji ----- */


// <editor-fold desc="Rooting." defaultstate="collapsed">

if (!isset($_GET['page'])) {
    $_GET['page'] = 'CMS';
}
if (!isset($_SESSION['usersC'])) {
    $_SESSION['usersC'] = new UsersController;
}

if ($_GET['page'] == 'CMS') {
    // <editor-fold desc="Akcje logowanie i wylogowania." defaultstate="collapsed">

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

    if (isset($_SESSION['User'])) {
        // <editor-fold desc="Akcje">
        // <editor-fold desc="CRUD urzytkownika" defaultstate="collapsed">
        if (isset($_GET['action']) && $_GET['user']) {
            switch ($_GET['action']) {
                case "delete":
                    $_SESSION['usersC']->Delete();
                    break;
                case "edit":
                    $_SESSION['usersC']->Update();
                    break;
            }
        }
        // </editor-fold>
        // <editor-fold>
        if (isset($_POST['function'])) {
            switch ($_POST['function']) {
                case 'edit';
                    $_SESSION['usersC']->Update();
                    break;
            }
        }
        if (isset($_GET['function'])) {
            switch ($_GET['function']) {
                case 'users';
                    $_SESSION['usersC']->Read();
                    break;
            }
        } else {
            if (!isset($_GET['action'])) {
                include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'ContentManagementSystemView.php';
            }
        }
    } else {
        include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'LogInView.php';
    }
} else {
    
}
// </editor-fold >
?>