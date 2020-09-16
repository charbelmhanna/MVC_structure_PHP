<?php

class PageController
{
    public function __construct()
    {

    }

    /*MAIN PAGE*/
    public function homepage()
    {
        require_once ROOT . PAGE . 'homepage.php';
    }

    /*ERROR PAGE*/
    public function error()
    {
        require_once ROOT . PAGE . '404.php';
    }

    /*COMING SOON PAGE*/
    public function maintenance()
    {
        require_once ROOT . PAGE . 'maintenance.php';
    }

 

}
