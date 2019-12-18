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

    public function getPostId($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content FROM posts WHERE id = ?');
        $req->execute(array($id));
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

    public function upPost($id, $title, $content)
    {
        $db = $this->dbConnect();
        $upPost = $db->prepare('UPDATE posts SET title = :nvtitle, content = :nvcontent WHERE id = :id');
        $upPost->execute(array(
            'nvtitle' => $title,
            'nvcontent' => $content,
            'id' => $id));
        return $upPost;
    }

    public function deletePost($id)
    {
        $db = $this->dbConnect();
        $delPost = $db->prepare('DELETE FROM posts WHERE id = ?');
        $rep = $delPost->execute(array($id));
        return $rep;
    }
}