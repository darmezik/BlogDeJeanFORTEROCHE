<?php
namespace killian\blogDeJeanForteroche\model;
require_once('Manager.php');
class PostManager extends Manager
{
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content FROM posts');
        return $req;
    }
    
    public function getPost()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content FROM posts ORDER BY id DESC LIMIT 1');
        $post = $req->fetch();
        $req->closeCursor();
        return $post;
    }

    public function getPostId($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();
        return $post;
    }
}