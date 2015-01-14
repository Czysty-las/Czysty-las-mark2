<?php

session_start();

DataBaseService::Initialize();
DataBaseService::Connect(ALL);

if (!isset($_SESSION['usersC'])) {
    $_SESSION['usersC'] = new UsersController;
}

if (!isset($_SESSION['newsC'])) {
    $_SESSION['newsC'] = new NewsController;
}

if (!isset($_SESSION['calendarC'])) {
    $_SESSION['calendarC'] = new CalendarController;
}

if (!isset($_SESSION['galleryC'])) {
    $_SESSION['galleryC'] = new GalleryController;
}

?>