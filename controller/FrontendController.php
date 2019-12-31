<?php
require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/ConnectManager.php');
class FrontendController
{
    public function printHome()
    {
        $postManager = new \killian\blogDeJeanForteroche\model\PostManager();
        $post = $postManager->getPost();
        require('view/frontend/viewHome.php');
    }

    public function printBook()
    {
        $postManager = new \killian\blogDeJeanForteroche\model\PostManager();
        $posts = $postManager->getPosts();
        require('view/frontend/viewBook.php');
    }

    public function printComments()
    {
        $postManager = new \killian\blogDeJeanForteroche\model\PostManager();
        $commentManager = new \killian\blogDeJeanForteroche\model\CommentManager();
        $post = $postManager->getPostId($_GET['id']);
        $comments = $commentManager->getComments($_GET['id']);
        require('view/frontend/viewComments.php');
    }

    public function addComment()
    {
        if(isset($_GET['id']) && $_GET['id'] > 0)
        {
            if(isset($_POST['pseudo']) && isset($_POST['comment']))
            {
                $pseudo = $_POST['pseudo'];
                $comment = $_POST['comment'];
                $postId = $_GET['id'];
            }
            if(!empty($_POST['pseudo']) && !empty($_POST['comment']))
            {
                $commentManager = new \killian\blogDeJeanForteroche\model\CommentManager();
                $insert = $commentManager->postComment($postId, $pseudo, $comment);
                if($insert === false)
                {
                    throw new Exception('Erreur d\'ajout du commentaire !');
                }
                else
                {
                    header('Location: index.php?action=comments&id=' . $postId);
                }
            }
            else
            {
                throw new Exception('Tous les champs ne sont pas remplis');
            }
        }
        else
        {
            throw new Exception('Aucun identifiant de billet envoyé');
        }
    }

    public function reportComment()
    {
        $commentManager = new \killian\blogDeJeanForteroche\model\CommentManager();
        $report = $commentManager->reportComment($_GET['id']);
        header('Location: index.php?action=book');
    }

    public function printConnect()
    {
        require('view/frontend/viewConnect.php');
    }

    public function testConnect()
    {
        $connectManager = new \killian\blogDeJeanForteroche\model\ConnectManager();
        $resultat = $connectManager->verifConnect($_POST['pseudo']);
        if ($resultat === NULL)
        {
            echo 'Mauvais identifiant ou mot de passe';
        }
        else
        {
            $passwordCorrect = password_verify($_POST['pass'], $resultat['pass']);
            if($passwordCorrect)
            {
                session_start();
                $_SESSION['pseudo'] = $_POST['pseudo'];
                header('Location: index.php?action=dashboard');
            }
            else
            {
                echo 'Mauvais identifiant ou mot de passe';
            }
        }
    }
}