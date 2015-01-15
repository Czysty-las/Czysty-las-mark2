<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GalleryModel
 *
 * @author Lukasz
 */
class PhotoModel {

    public $owner;
    public $name;

}

class GalleryModel {

    public $Id;
    public $title;
    public $authorName;
    public $authorSurname;
    public $date;
    public $photos = array();

}
