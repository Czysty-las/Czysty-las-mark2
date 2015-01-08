<?php

include_once 'Controller.php';

class CalendarController extends Controller {

    function __construct() {
        $this->viewsPath = _ROOT_PATH
                . DIRECTORY_SEPARATOR
                . "Views"
                . DIRECTORY_SEPARATOR . "Calendar" . DIRECTORY_SEPARATOR;
    }

    public function Create() {
        
    }

    public function Delete() {
        
    }

    public function Read() {
        $q = "SELECT * FROM `calendar`";
        $stmt = DataBaseService::Query(0, $q);
        
        $calendar = array();
        $i = 0;
        
        foreach ($stmt as $row) {
            $calendar[$i] = new CalendarModel();

            $calendar[$i]->Id = $row['Id'];
            $calendar[$i]->UserId = $row['UserId'];
            $calendar[$i]->Date = $row['Date'];
            $calendar[$i]->Topic = $row['Topic'];
            $calendar[$i]->Description = $row['Description'];
            ++$i;
        }
        
        $_SESSION['rez'] = $calendar;
        
        include $this->viewsPath . 'CalendarListView.php';
    }

    public function Update() {
        
    }

}
