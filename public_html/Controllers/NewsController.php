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
        
    }

    public function Delete() {
        
    }

    public function Read() {
        $q = "SELECT news.*, users.Name, users.Surname "
                . "FROM news "
                . "LEFT OUTER JOIN users "
                . "ON news.authorID = users.ID";
        
        $stmt = DataBaseService::Query(0, $q);

        $news = array();
        $i = 0;

        foreach ($stmt as $row) {
            $news[$i] = new NewsModel();

            $news[$i]->ID = $row['ID'];
            $news[$i]->authorName = $row['Name'];
            $news[$i]->authorSurname  = $row['Surname'];
            $news[$i]->title = $row['title'];
            $news[$i]->content = $row['content'];
            $news[$i]->date = $row['date'];
            
            ++$i;
        }
        
        $_SESSION['rez'] = $news;
        
        include $this->viewsPath . "NewsListView.php";
    }

    public function Update() {
        
    }

//put your code here
}
