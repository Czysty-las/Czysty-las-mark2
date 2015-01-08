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
        // <editor-fold desc="Akcje" defaultstate="collapsed">
        //  Wywołanie widoku dodawanbia/edytowania
        //  Wywołanie zapytania usuwania.
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                
                // <editor-fold desc="Akcje urzytkownika" defaultstate="collapsed">
                case 'users_list';
                    $_SESSION['usersC']->Read();
                    break;
                case "delete_user":
                    //  Usuwanie wymaga tylko jednej zmiennej, ID rekordu, który ma zostać usunięty.
                    //  Generowany jest linkt, który ma tą zmienną. - W widoku.
                    if (isset($_GET['user'])) {
                        $_SESSION['usersC']->Delete();
                    }
                    break;
                case "edit_user":
                    if (isset($_GET['user'])) {
                        $_SESSION['usersC']->Update();
                    }
                    break;
                case "add_user":
                    $_SESSION['usersC']->Create();
                    break;
                // </editor-fold>
            }
        }

        // Wywołanie zapytania dodawania/edytowania.
        // Post = formularz
        if (isset($_POST['function'])) {
            switch ($_POST['function']) {
                case 'edit_user';
                    $_SESSION['usersC']->Update();
                    break;
                case "add_user":
                    $_SESSION['usersC']->Create();
                    break;
            }
        }
        //  Widok listy.
        if (isset($_GET['function'])) {
            switch ($_GET['function']) {
                
            }
        } else {
            if (!isset($_GET['action'])) {
                include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'ContentManagementSystemView.php';
            }
        }
    } else {
        include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'LogInView.php';
    }
    // </editor-fold>
} else {
    
}
// </editor-fold >
?>