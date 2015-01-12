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

        LogService::message("CalendarController", "Stworzono nowy wpis w kalendarzu");
    }

    public function Delete() {

        LogService::message("CalendarController", "Usunięto wpis z kalendarza");
    }

    public function Read() {
        $q = "SELECT * FROM `calendar`";
        $stmt = DataBaseService::Query(0, $q);

        //$_GET['IdToDisplay'];
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

        include $this->viewsPath . 'CalendarDiscriptionView.php';
        //LogService::message("CalendarController", "Edytowano wpis w kalendarzu");
    }

}
