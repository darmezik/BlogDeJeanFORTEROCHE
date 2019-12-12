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
        elseif($_GET['action'] == 'comments')
        {
            $UserController->printComments();
        }
        elseif($_GET['action'] == 'addComment')
        {
            $UserController->addComment();
        }
        elseif($_GET['action'] == 'contact')
        {
            $UserController->printContact();
        }
        elseif($_GET['action'] == 'connect')
        {
            $UserController->printDashboard();
        }
        elseif($_GET['action'] == 'commentsUp')
        {
            $UserController->printCommentsUp();
        }
        elseif($_GET['action'] == 'deleteComment')
        {
            $UserController->deleteComment();
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