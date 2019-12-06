<?php
require_once('model/Model.php');
class UserController
{
    public function printHome()
    {
        require('view/viewAccueil.php');
    }

    public function printRoman()
    {
        require('view/viewRoman.php');
    }

    public function printBibliographie()
    {
        require('view/viewBibliographie.php');
    }

    public function printContact()
    {
        require('view/viewContact.php');
    }
}