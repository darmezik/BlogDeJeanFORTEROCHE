<?php
require('controller/UserController.php');
$_GLOBALS["app_url"] = "http://127.0.0.1/BlogDeJeanFORTEROCHE/";
$UserController = new UserController;
try
{
    if(isset($_GET['action']))
    {
        if($_GET['action'] == '')
        {
            $UserController->printHome();
        }
        elseif($_GET['action'] == 'home')
        {
            $UserController->printHome();
        }
        elseif($_GET['action'] == 'book')
        {
            $UserController->printBook();
        }
        elseif($_GET['action'] == 'contact')
        {
            $UserController->printContact();
        }
    }
    else
    {
        $UserController->printHome();
    }
}
catch(Exception $e)
{
    echo 'Erreur : ' . $e->getMessage();
}