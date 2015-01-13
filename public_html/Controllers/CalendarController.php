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
        $q = "SELECT * FROM `calendar` ORDER BY Date";
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

        if (isset($_POST['function']) && $_POST['function'] == 'edit_calendar') {
            
            $q = "UPDATE `calendar` SET `Topic` = '" . $_POST['Topic'] ."', `Description` = '" . $_POST['Description'] . "', `Date` = '" . $_POST['Date'] . " WHERE `ID` = " . $_POST['Id'];
            DataBaseService::Query(0, $q);

            header("Location: index.php?action=list_calendar");
        } else {
            $q = "SELECT * FROM 'calendar' WHERE Id = " . $_GET['user'];
            $stmt = DataBaseService::Query(0, $q);
            $event = new CalendarModel();

            foreach ($stmt as $row) {
                $event->Id = $row['Id'];
                $event->UserId = $row['UserId'];
                $event->Date = $row['Date'];
                $event->Topic = $row['Topic'];
                $event->Description = $row['Description'];
            }
            $_SESSION['rez'] = $event;

            include $this->viewsPath . 'CalendarDiscriptionView.php';
        }

        //LogService::message("CalendarController", "Edytowano wpis w kalendarzu");
    }

    public function Presentation() {
        
    }

}
