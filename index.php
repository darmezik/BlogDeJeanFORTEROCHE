<?php
require('controller/FrontendController.php');
require('controller/BackendController.php');
$GLOBALS["app_url"] = "http://127.0.0.1/BlogDeJeanForteroche/";
$FrontendController = new FrontendController;
$BackendController = new BackendController;
if (isset($_GET['action']))
{
    switch($_GET['action'])
    {
        case 'home':
            $FrontendController->printHome();
        break;
        case 'book':
            $FrontendController->printBook();
        break;
        case 'comments':
            $FrontendController->printComments();
        break;
        case 'addComment':
            $FrontendController->addComment();
        break;
        case 'reportComment':
            $FrontendController->reportComment();
        break;
        case 'contact':
            $FrontendController->printContact();
        break;
        case 'connect':
            $FrontendController->printConnect();
        break;
        case 'testConnect':
            $FrontendController->testConnect();
        break;
        case 'deconnect':
            $BackendController->deconnect();
        break;
        case 'dashboard':
            $BackendController->printDashboard();
        break;
        case 'commentsUp':
            $BackendController->printCommentsUp();
        break;
        case 'deleteComment':
            $BackendController->deleteComment();
        break;
        case 'addPost':
            $BackendController->addPost();
        break;
        case 'deletePost':
            $BackendController->deletePost();
        break;
        case 'postUp':
            $BackendController->printPostUp();
        break;
        case 'modifPost':
            $BackendController->modifPost();
        break;
        case 'delReport':
            $BackendController->delReportComment();
        break;
        default:
            $FrontendController->printHome();
    }
}
else
{
    $FrontendController->printHome();
}