<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GalleryController
 *
 * @author Lukasz
 */
class GalleryController extends Controller {

    function __construct() {
        $this->viewsPath = _ROOT_PATH
                . DIRECTORY_SEPARATOR
                . "Views"
                . DIRECTORY_SEPARATOR . "Gallery" . DIRECTORY_SEPARATOR;
    }

    public function InsertImage() {

        for ($i = 0; $i < count($_FILES['photos']['size']); $i++) {

            if (strstr($_FILES['photos']['type'][$i], 'image') !== false) {

                $name = FileService::SaveFileOnServer('Images', $_FILES['photos']['tmp_name'][$i], $_FILES['photos']['name'][$i]);

                $q = "INSERT INTO `devdb`.`photos` (`owner`, `name`) VALUES ('" . $_POST['Id'] . "', '" . $name . "');";
                DataBaseService::Query(0, $q);
            }
        }

        header("Location: CMS.php?action=edit_gallery&gallery=" . $_POST['Id']);
    }

    public function DeleteImages() {
        for ($i = 0; $i < $_POST['photosNumber']; ++$i) {
            if (isset($_POST['photo_' . $i])) {
                $q = "DELETE FROM `devdb`.`photos` WHERE `photos`.`name` = '" . $_POST['photo_' . $i] . "'";
                DataBaseService::Query(0, $q);

                FileService::DeleteFileFromServer('Images', $_POST['photo_' . $i]);
            }
        }
        header("Location: CMS.php?action=edit_gallery&gallery=" . $_POST['Id']);
    }

    private function SelectPhotos($_galleryId) {

        $q = "SELECT * FROM `photos` WHERE `owner` =" . $_galleryId;

        $stmt = DataBaseService::Query(0, $q);
        $i = 0;
        $photos = NULL;
        foreach ($stmt as $row) {
            $photos[$i] = new PhotoModel;
            $photos[$i]->name = $row['name'];
            ++$i;
        }
        
        return $photos;
    }

    public function Create() {
        $q = "INSERT INTO `devdb`.`gallery` "
                . "(`Id`, `authorId`, `title`, `date`) "
                . "VALUES "
                . "(NULL, '" . $_SESSION['User']->Id . "', '" . $_POST['title'] . "', '" . date("Y-m-d") . "');";

        DataBaseService::Query(0, $q);
        header("Location: CMS.php?action=list_gallery");
    }

    public function Delete() {
        $q = "SELECT * FROM `photos` WHERE `owner` = " . $_GET['gallery'];
        $stmt = DataBaseService::Query(0, $q);

        foreach ($stmt as $row) {
            FileService::DeleteFileFromServer('Images', $row['name']);
            $q = "DELETE FROM `devdb`.`photos` WHERE `photos`.`name` = '" . $row['name'] . "'";
            DataBaseService::Query(0, $q);
        }

        $q = "DELETE FROM `devdb`.`gallery` WHERE `gallery`.`Id` = " . $_GET['gallery'];
        DataBaseService::Query(0, $q);

        header("Location: CMS.php?action=list_gallery");
    }

    public function Presentation() {
        if (isset($_GET['id'])) {
            $q = "SELECT gallery.*, users.Name, users.Surname "
                    . "FROM gallery "
                    . "LEFT OUTER JOIN users "
                    . "ON gallery.authorId = users.ID "
                    . "WHERE gallery.Id = " . $_GET['id'];

            $stmt = DataBaseService::Query(0, $q);

            foreach ($stmt as $row) {
                $gallery = new GalleryModel;
                $gallery->Id = $row['Id'];
                $gallery->title = $row['title'];
                $gallery->authorName = $row['Name'];
                $gallery->authorSurname = $row['Surname'];
                $gallery->date = $row['date'];
            }
            
            $gallery->photos = $this->SelectPhotos($_GET['id']);

            include _ROOT_PATH . DIRECTORY_SEPARATOR . "Presentation" . DIRECTORY_SEPARATOR . "Gallery" . DIRECTORY_SEPARATOR . "GalleryView.php";
        } else {
            $q = "SELECT gallery.*, users.Name, users.Surname "
                    . "FROM gallery "
                    . "LEFT OUTER JOIN users "
                    . "ON gallery.authorId = users.ID "
                    . "ORDER BY gallery.date DESC";
            $stmt = DataBaseService::Query(0, $q);

            $page = $pages = $posts = 0;

            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            } else {
                $page = 0;
            }
            $i = 0;

            foreach ($stmt as $row) {
                $gallery[$pages][$posts] = new GalleryModel;
                $gallery[$pages][$posts]->Id = $row['Id'];
                $gallery[$pages][$posts]->title = $row['title'];
                $gallery[$pages][$posts]->authorName = $row['Name'];
                $gallery[$pages][$posts]->authorSurname = $row['Surname'];
                $gallery[$pages][$posts]->date = $row['date'];
                ++$posts;

                if ($posts == 10) {
                    ++$pages;
                    $posts = 0;
                }
            }

            include _ROOT_PATH . DIRECTORY_SEPARATOR . "Presentation" . DIRECTORY_SEPARATOR . "Gallery" . DIRECTORY_SEPARATOR . "GalleryListView.php";
        }
    }

    public function Read() {
        $q = "SELECT gallery.*, users.Name, users.Surname "
                . "FROM gallery "
                . "LEFT OUTER JOIN users "
                . "ON gallery.authorId = users.ID "
                . "ORDER BY gallery.date DESC";
        $stmt = DataBaseService::Query(0, $q);

        $gallery = array();
        $i = 0;
        foreach ($stmt as $row) {
            $gallery[$i] = new GalleryModel;
            $gallery[$i]->Id = $row['Id'];
            $gallery[$i]->title = $row['title'];
            $gallery[$i]->authorName = $row['Name'];
            $gallery[$i]->authorSurname = $row['Surname'];
            $gallery[$i]->date = $row['date'];
            ++$i;
        }

        include $this->viewsPath . "GalleryListView.php";
    }

    public function Update() {
        if (isset($_POST['function']) && $_POST['function'] == 'edit_gallery') {
            $q = "UPDATE `devdb`.`gallery` SET `title` = '" . $_POST['title'] . "' WHERE `gallery`.`Id` = " . $_POST['Id'];
            DataBaseService::Query(0, $q);

            header("Location: CMS.php?action=edit_gallery&gallery=" . $_POST['Id']);
        } else {

            $q = "SELECT gallery.*, users.Name, users.Surname "
                    . "FROM gallery "
                    . "LEFT OUTER JOIN users "
                    . "ON gallery.authorId = users.ID "
                    . "WHERE gallery.Id = " . $_GET['gallery'];

            $stmt = DataBaseService::Query(0, $q);

            foreach ($stmt as $row) {
                $gallery = new GalleryModel;
                $gallery->Id = $row['Id'];
                $gallery->title = $row['title'];
                $gallery->authorName = $row['Name'];
                $gallery->authorSurname = $row['Surname'];
                $gallery->date = $row['date'];
                 $gallery->photos = $this->SelectPhotos( $row['Id']);
            }

            include $this->viewsPath . "GalleryEditView.php";
        }
    }

//put your code here
}
