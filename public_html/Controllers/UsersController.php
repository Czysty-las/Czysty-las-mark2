<?php

/**
 * Description of UsersController
 *
 * @author Lukasz
 */
include 'Controller.php';

class UsersController extends Controller {

    private $changeSort = true;
    private $order;

    public function Create() {
        
    }

    public function Delete($_ID) {
        $q = "DELETE FROM `users` WHERE `users`.`ID` = " . $_ID;

        $stmt = DataBaseService::Query(0, $q);

        if ($stmt != NULL) {
            LogService::message(UsersController, "User deleted!");
        }

        header("Location: index.php?function=users");
    }

    public function Read() {
        $q = "SELECT * FROM `users`";

        // <editor-fold desc="Sortowanie." defaultstate="collapsed">

        if (isset($_GET['sort'])) {
            $q = $q . " ORDER BY `" . $_GET['sort'] . "` " . $this->order;

            if ($this->changeSort) {
                $this->changeSort = !$this->changeSort;
                $this->order = "ASC";
            } else {
                $this->changeSort = !$this->changeSort;
                $this->order = "DESC";
            }
        }

        // </editor-fold>

        $stmt = DataBaseService::Query(0, $q);

        $users = array();
        $i = 0;

        // <editor-fold desc="Generowanie rezultatu." defaultstate="collapsed">

        foreach ($stmt as $row) {
            $users[$i] = new UserModel();

            $users[$i]->Id = $row['ID'];
            $users[$i]->Name = $row['Name'];
            $users[$i]->Surname = $row['Surname'];
            $users[$i]->Age = $row['Age'];
            $users[$i]->Sex = $row['Sex'];
            ++$i;
        }


        $_SESSION['rez'] = $users;
        
        // </editor-fold>

        include './Views/UsersListView.php';
    }

    public function Update() {
        
    }

}
