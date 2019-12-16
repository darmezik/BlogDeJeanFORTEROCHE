<?php
require_once('model/PostManager.php');
require_once('model/CommentManager.php');
class BackendController
{
    public function printDashboard()
    {
        session_start();
        if(isset($_SESSION['pseudo']))
        {
            $postManager = new \killian\blogDeJeanForteroche\model\PostManager();
            $commentManager = new \killian\blogDeJeanForteroche\model\CommentManager();
            $posts = $postManager->getPosts();
            $reportComments = $commentManager->getReportComments();
            require('view/backend/viewDashboard.php');
        }
        else
        {
            header('Location: index.php?action=connect');
        }
    }

    public function printCommentsUp()
    {
        session_start();
        if(isset($_SESSION['pseudo']))
        {
            $commentManager = new \killian\blogDeJeanForteroche\model\CommentManager();
            $postManager = new \killian\blogDeJeanForteroche\model\PostManager();
            $comments = $commentManager->getComments($_GET['id']);
            $post = $postManager->getPostId($_GET['id']);
            require('view/backend/viewCommentsUp.php');
        }
        else
        {
            header('Location: index.php?action=connect');
        }
    }

    public function deleteComment()
    {
        session_start();
        if(isset($_SESSION['pseudo']))
        {
            $commentManager = new \killian\blogDeJeanForteroche\model\CommentManager();
            $reponse = $commentManager->deleteComment($_GET['id']);
            if($rep === false)
            {
                throw new Exception('Erreur de suppression du commentaire !');
            }
            else
            {
                header('Location: index.php?action=dashboard');
            }
        }
        else
        {
            header('Location: index.php?action=connect');
        }
    }

    public function deconnect()
    {
        session_start();
        $_SESSION = array();
        session_destroy();
        header('Location: index.php');
    }
}