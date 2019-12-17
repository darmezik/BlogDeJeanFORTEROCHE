<?php
namespace killian\blogDeJeanForteroche\model;
require_once('model/Manager.php');
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

    public function post($title, $content)
    {
        $db = $this->dbConnect();
        $post = $db->prepare('INSERT INTO posts(title, content) VALUES(?, ?)');
        $post->execute(array($title, $content));
        return $post;
    }

    public function deletePost($id)
    {
        $db = $this->dbConnect();
        $delPost = $db->prepare('DELETE FROM posts WHERE id = ?');
        $rep = $delPost->execute(array($id));
        return $rep;
    }
}