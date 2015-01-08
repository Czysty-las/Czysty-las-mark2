<?php

/**
 * Description of UserService
 *
 * @author Lukasz
 */
//include _ROOT_PATH . DIRECTORY_SEPARATOR . 'Models' . DIRECTORY_SEPARATOR . 'UserModel.php';

class UserService {

    public static function LogIn($_login, $_password) {
        $stmt = DataBaseService::Query(0, "SELECT * FROM `users` WHERE `Login` LIKE '$_login' AND `Password` LIKE '$_password'");

        if ($stmt != NULL) {
            $_SESSION['User'] = new UserModel;
            while ($row = $stmt->fetch()) {
                $_SESSION['User']->Name = $row['Name'];
                $_SESSION['User']->Surname = $row['Surname'];
                self::AssignPermissions($row['Rights']);
            }
        }
    }

    public static function LogOff() {
        $_SESSION['User'] = NULL;
    }
    
    public static function AssignPermissions($_rights){
       $_SESSION['User'] ->Rights = explode(".", $_rights);
    }
    
    public static function GetRights($_rights){
        return explode(".", $_rights);
    }
    
    
}
