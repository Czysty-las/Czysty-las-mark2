<?php

/**
 * Description of UserService
 *
 * @author Lukasz
 */

include '.'.DIRECTORY_SEPARATOR.'Models'.DIRECTORY_SEPARATOR.'UserModel.php';
class UserService {

    static function LogIn($_login, $_password) {
        $stmt = DataBaseService::Query(0, "SELECT * FROM `users` WHERE `Login` LIKE '$_login' AND `Password` LIKE '$_password'");

        if ($stmt != NULL) {
            $tmp =  new UserModel;
            while ($row = $stmt ->fetch()) {
               $tmp->Name = $row['Name'];
               $tmp->Surname = $row['Surname'];
               $_SESSION['User'] = $tmp;
            }
            
            
        }
    }

}
