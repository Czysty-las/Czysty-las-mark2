<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FileService
 *
 * @author Lukasz
 */
class FileService {

    public static function SaveFileOnServer($_to, $_file, $_name) {
        
        $name = time() . '_' . $_name;
        $file = _ROOT_PATH . DIRECTORY_SEPARATOR . 'Resources' . DIRECTORY_SEPARATOR . $_to . DIRECTORY_SEPARATOR . $name;
        move_uploaded_file($_file, $file);
        
        return $name;
    }

    public static function DeleteFileFromServer($_from, $_name) {
        $file = _ROOT_PATH . DIRECTORY_SEPARATOR . 'Resources' . DIRECTORY_SEPARATOR . $_from . DIRECTORY_SEPARATOR . $_name;
        unlink($file);
    }

}
