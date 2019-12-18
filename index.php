<?php
require('controller/FrontendController.php');
require('controller/BackendController.php');
$GLOBALS["app_url"] = "http://127.0.0.1/BlogDeJeanForteroche/";
$FrontendController = new FrontendController;
$BackendController = new BackendController;
try
{
    if(isset($_GET['action']))
    {
        if($_GET['action'] == '')
        {
            $FrontendController->printHome();
        }
        elseif($_GET['action'] == 'home')
        {
            $FrontendController->printHome();
        }
        elseif($_GET['action'] == 'book')
        {
            $FrontendController->printBook();
        }
        elseif($_GET['action'] == 'comments')
        {
            $FrontendController->printComments();
        }
        elseif($_GET['action'] == 'addComment')
        {
            $FrontendController->addComment();
        }
        elseif($_GET['action'] == 'contact')
        {
            $FrontendController->printContact();
        }
        elseif($_GET['action'] == 'connect')
        {
            $FrontendController->printConnect();
        }
        elseif($_GET['action'] == 'testConnect')
        {
            $FrontendController->testConnect();
        }
        elseif($_GET['action'] == 'deconnect')
        {
            $BackendController->deconnect();
        }
        elseif($_GET['action'] == 'dashboard')
        {
            $BackendController->printDashboard();
        }
        elseif($_GET['action'] == 'commentsUp')
        {
            $BackendController->printCommentsUp();
        }
        elseif($_GET['action'] == 'deleteComment')
        {
            $BackendController->deleteComment();
        }
        elseif($_GET['action'] == 'addPost')
        {
            $BackendController->addPost();
        }
        elseif($_GET['action'] == 'deletePost')
        {
            $BackendController->deletePost();
        }
        elseif($_GET['action'] == 'postUp')
        {
            $BackendController->printPostUp();
        }
        elseif($_GET['action'] == 'modifPost')
        {
            $BackendController->modifPost();
        }
        elseif($_GET['action'] == 'reportComment')
        {
            $FrontendController->reportComment();
        }
        elseif($_GET['action'] == 'delReport')
        {
            $BackendController->delReportComment();
        }
    }
    else
    {
        $FrontendController->printHome();
    }
}
catch(Exception $e)
{
    echo 'Erreur : ' . $e->getMessage();
}