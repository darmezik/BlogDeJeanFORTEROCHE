<?php
require_once('model/PostManager.php');
class UserController
{
    public function printHome()
    {
        require('view/viewHome.php');
    }

    public function printBook()
    {
        require('view/viewBook.php');
    }

    public function printContact()
    {
        require('view/viewContact.php');
    }
}