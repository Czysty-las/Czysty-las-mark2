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

    public function Delete() {
        $q = "DELETE FROM `users` WHERE `users`.`ID` = " . $_GET['user'];

        $stmt = DataBaseService::Query(0, $q);

        if ($stmt != NULL) {
            LogService::message(UsersController, "User deleted!");
        }

        header("Location: index.php?function=users");
    }

    public function Read() {
        $q = "SELECT * FROM `users`";   //  Generowanie zapytania.
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

        include './Views/UsersListView.php';    //  Zwracanie widoku.
    }

    public function Update() {
        $q = "SELECT `Name`, `Surname`, `Age`, `Sex`, `Login`, `Password`, `Rights` FROM `users` WHERE `ID` = " . $_GET['user'];

        $stmt = DataBaseService::Query(0, $q);

        $user = new UserModel();
        foreach ($stmt as $row) {
            $user->Name = $row['Name'];
            $user->Surname = $row['Surname'];
            $user->Age = $row['Age'];
            $user->Sex = $row['Sex'];
            $user->Rights = UserService::GetRights($row['Rights']);
        }

        $_SESSION['rez'] = $user;
        include './Views/UsersEditView.php';
    }

}
