<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserModel
 *
 * @author Lukasz
 */

define("userLvL", 0);
define("news", 1);
define("calendar", 2);
define("gallery", 3);
define("InForest", 4);
define("UpCycling", 5);
define("users", 6);
define("config", 7);
define("tasks", 8);


class UserModel {
    public $Id;
    public $Name;
    public $Surname;
    public $Sex;
    public $Age;
    public $Mail;
    public $Login;
    public $Password;




    public $Rights = array();  // "1.1.1.1.0.2.2.3";
}
