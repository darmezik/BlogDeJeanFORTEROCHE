<?php
require_once('model/PostManager.php');
require_once('model/CommentManager.php');
class UserController
{
    public function printHome()
    {
        $postManager = new \killian\blogDeJeanForteroche\model\PostManager();
        $post = $postManager->getPost();
        require('view/viewHome.php');
    }

    public function printBook()
    {
        $postManager = new \killian\blogDeJeanForteroche\model\PostManager();
        $posts = $postManager->getPosts();
        require('view/viewBook.php');
    }

    public function printComments()
    {
        $postManager = new \killian\blogDeJeanForteroche\model\PostManager();
        $commentManager = new \killian\blogDeJeanForteroche\model\CommentManager();
        $post = $postManager->getPostId($_GET['id']);
        $comments = $commentManager->getComments($_GET['id']);
        require('view/viewComments.php');
    }

    public function printDashboard()
    {
        $postManager = new \killian\blogDeJeanForteroche\model\PostManager();
        $posts = $postManager->getPosts();
        require('view/viewDashboard.php');
    }

    public function printCommentsUp()
    {
        $commentManager = new \killian\blogDeJeanForteroche\model\CommentManager();
        $postManager = new \killian\blogDeJeanForteroche\model\PostManager();
        $comments = $commentManager->getComments($_GET['id']);
        $post = $postManager->getPostId($_GET['id']);
        require('view/viewCommentsUp.php');
    }

    public function deleteComment()
    {
        $commentManager = new \killian\blogDeJeanForteroche\model\CommentManager();
        $reponse = $commentManager->deleteComment($_GET['id']);
        if($rep === false)
        {
            throw new Exception('Erreur de suppression du commentaire !');
        }
        else
        {
            header('Location: index.php?action=connect');
        }
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

    public function printContact()
    {
        require('view/viewContact.php');
    }
}