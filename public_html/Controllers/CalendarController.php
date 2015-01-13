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

        $q = "DELETE FROM `calendar` WHERE `Id` = " . $_GET['calendar'];

        $stmt = DataBaseService::Query(0, $q);

        if ($stmt != NULL) {
            LogService::message("CalendarController", "Usunięto wpis z kalendarza");
        }

        header("Location: index.php?action=list_calendar");
        
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
        
        
        $q = "SELECT * FROM 'calendar' WHERE Id = " . $_GET['user'];
        $stmt = DataBaseService::Query(0, $q);
        
        $wpis = array();
        
        foreach ($stmt as $row) {
            $wpis[$i] = new CalendarModel();
            
            $wpis[$i]->Id = $row['Id'];
            $wpis[$i]->UserId = $row['UserId'];
            $wpis[$i]->Date = $row['Date'];
            $wpis[$i]->Topic = $row['Topic'];
            $wpis[$i]->Description = $row['Description'];
        }
        $_SESSION['rez'] = $wpis;
        
        include $this->viewsPath . 'CalendarDiscriptionView.php';
        //LogService::message("CalendarController", "Edytowano wpis w kalendarzu");
    }

}
