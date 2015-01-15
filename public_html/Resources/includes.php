<?php

/* ----- Zbiór wszystkich bibliotek ----- */


// <editor-fold desc="Modele." defaultstate="collapsed">

include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Models' . DIRECTORY_SEPARATOR . 'UserModel.php';
include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Models' . DIRECTORY_SEPARATOR . 'CalendarModel.php';
include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Models' . DIRECTORY_SEPARATOR . 'NewsModel.php';
include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Models' . DIRECTORY_SEPARATOR . 'GalleryModel.php';

// </editor-fold>
// <editor-fold desc="Serwisy" defaultstate="collapsed">

include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Service' . DIRECTORY_SEPARATOR . 'DataBaseService.php';
include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Service' . DIRECTORY_SEPARATOR . 'UserService.php';
include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Service' . DIRECTORY_SEPARATOR . 'FileService.php';

// </editor-fold>
// <editor-fold desc="Kontlolery" defaultstate="collapsed">


include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Controllers' . DIRECTORY_SEPARATOR . 'UsersController.php';
include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Controllers' . DIRECTORY_SEPARATOR . 'NewsController.php';
include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Controllers' . DIRECTORY_SEPARATOR . 'CalendarController.php';
include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Controllers' . DIRECTORY_SEPARATOR . 'GalleryController.php';

// </editor-fold>

// <editor-fold desc="Region 2." defaultstate="collapsed">
//TODO
// </editor-fold>
?>