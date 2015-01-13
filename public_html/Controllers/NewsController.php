<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewsController
 *
 * @author Lukasz
 */
include_once 'Controller.php';

class NewsController extends Controller {

    function __construct() {
        $this->viewsPath = _ROOT_PATH
                . DIRECTORY_SEPARATOR
                . "Views"
                . DIRECTORY_SEPARATOR . "News" . DIRECTORY_SEPARATOR;
    }

    public function Create() {
        if (isset($_POST['function']) && $_POST['function'] == 'add_news') {
            $q = "INSERT INTO `devdb`.`news` (`ID`, `authorID`, `title`, `content`, `date`) VALUES (NULL, '" . $_SESSION['User']->Id . "', '" . $_POST['title'] . "', '" . $_POST['content'] . "', '2015-01-13');";
            DataBaseService::Query(0, $q);

            header("Location: CMS.php?action=list_news");
        } else {
            $_SESSION['rez'] = new NewsModel();
            $_GET['mode'] = "add_news";

            include $this->viewsPath . 'NewsEditView.php';
        }
    }

    public function Delete() {
        $q = "DELETE FROM `devdb`.`news` WHERE `news`.`ID` = " . $_GET['news'];
        DataBaseService::Query(0, $q);

        if ($stmt != NULL) {
            LogService::message("UsersController", "News deleted!");
        }

        header("Location: index.php?action=list_news");
    }

    public function Read() {
        $q = "SELECT news.*, users.Name, users.Surname "
                . "FROM news "
                . "LEFT OUTER JOIN users "
                . "ON news.authorID = users.ID "
                . "ORDER BY `news`.`date` DESC";

        $stmt = DataBaseService::Query(0, $q);

        $news = array();
        $i = 0;

        foreach ($stmt as $row) {
            $news[$i] = new NewsModel();

            $news[$i]->ID = $row['ID'];
            $news[$i]->authorName = $row['Name'];
            $news[$i]->authorSurname = $row['Surname'];
            $news[$i]->title = $row['title'];
            $news[$i]->content = $row['content'];
            $news[$i]->date = $row['date'];

            ++$i;
        }

        $_SESSION['rez'] = $news;

        include $this->viewsPath . "NewsListView.php";
    }

    public function Update() {
        if (isset($_POST['function']) && $_POST['function'] == 'edit_news') {

            $q = "UPDATE `devdb`.`news` SET `title` = '" . $_POST['title'] . "', `content` = '" . $_POST['content'] . "' WHERE `news`.`ID` = " . $_POST['ID'];
            DataBaseService::Query(0, $q);

            header("Location: CMS.php?action=list_news");
        } else {
            $q = "SELECT news.*, users.Name, users.Surname FROM news LEFT OUTER JOIN users ON news.authorID = users.ID WHERE news.ID = " . $_GET['news'];
            $stmt = DataBaseService::Query(0, $q);

            $news = new NewsModel();

            foreach ($stmt as $row) {
                $news->ID = $row['ID'];
                $news->title = $row['title'];
                $news->content = $row['content'];
                $news->date = $row['date'];
            }
        }

        $_SESSION['rez'] = $news;
        $_GET['mode'] = "edit_news";

        include $this->viewsPath . 'NewsEditView.php';
    }

    public function Presentation() {
        if (isset($_GET['id'])) {
            $q = "SELECT news.*, users.Name, users.Surname "
                    . "FROM news "
                    . "LEFT OUTER JOIN users "
                    . "ON news.authorID = users.ID"
                    . " WHERE news.ID = " . $_GET['id'];

            $stmt = DataBaseService::Query(0, $q);

            foreach ($stmt as $row) {
                $news = new NewsModel();
                $news->ID = $row['ID'];
                $news->authorName = $row['Name'];
                $news->authorSurname = $row['Surname'];
                $news->title = $row['title'];
                $news->content = $row['content'];
                $news->date = $row['date'];
            }

            $_SESSION['rez'] = $news;
            include _ROOT_PATH . DIRECTORY_SEPARATOR . "Presentation" . DIRECTORY_SEPARATOR ."News".DIRECTORY_SEPARATOR. "NewsView.php";
        } else {
            $q = "SELECT news.*, users.Name, users.Surname "
                    . "FROM news "
                    . "LEFT OUTER JOIN users "
                    . "ON news.authorID = users.ID "
                    . "ORDER BY news.date DESC";

            $stmt = DataBaseService::Query(0, $q);

            $page = $pages = $posts = 0;

            ;
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            } else {
                $page = 0;
            }


            foreach ($stmt as $row) {
                $news[$pages][$posts] = new NewsModel();
                $news[$pages][$posts]->ID = $row['ID'];
                $news[$pages][$posts]->authorName = $row['Name'];
                $news[$pages][$posts]->authorSurname = $row['Surname'];
                $news[$pages][$posts]->title = $row['title'];
                $news[$pages][$posts]->content = $row['content'];
                $news[$pages][$posts]->date = $row['date'];
                ++$posts;

                if ($posts == 10) {
                    ++$pages;
                    $posts = 0;
                }
            }

            $_SESSION['rez'] = $news;
            include _ROOT_PATH . DIRECTORY_SEPARATOR . "Presentation" . DIRECTORY_SEPARATOR . "News" . DIRECTORY_SEPARATOR . "NewsListView.php";
        }
    }

//put your code here
}
