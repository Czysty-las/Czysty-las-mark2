<?php

/**
 * Description of UsersController
 *
 * @author Lukasz
 */
include 'Controller.php';

class UsersController extends Controller {

    public function Create() {
        
    }

    public function Delete($_ID) {
        $q = "DELETE FROM `users` WHERE `users`.`ID` = ".$_ID;
        
        $stmt = DataBaseService::Query(0, $q);
        
        if($stmt != NULL){
            LogService::message(UsersController, "User deleted!");
        }
        
        header("Location: index.php?function=users");
    }

    public function Read() {
        $stmt = DataBaseService::Query(0, "SELECT * FROM `users`");
        $users = array();
        $i = 0;

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

        include './Views/UsersListView.php';
    }

    public function Update() {
        
    }

}
