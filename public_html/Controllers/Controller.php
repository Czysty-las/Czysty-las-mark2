<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author Lukasz
 */
abstract class Controller {

    protected $viewsPath; 

    /*
     * Funkcja dodająca nowy wpis do bazy danych.
     */

    public abstract function Create();

    /*
     * Funkcja listująca wszystkie wpisy z bazy danych.
     */

    public abstract function Read();

    /*
     * Funkcja wprowadzająca zmiany do bazy danych.
     */

    public abstract function Update();

    /*
     * Funkcja usuwająca wpisy z bazy danych.
     */

    public abstract function Delete();
    
    
    public abstract function Presentation();
}
