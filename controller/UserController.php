<?php
require_once('model/PostManager.php');
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

    public function printContact()
    {
        require('view/viewContact.php');
    }
}