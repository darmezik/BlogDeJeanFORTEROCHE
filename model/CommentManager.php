<?php
namespace killian\blogDeJeanForteroche\model;
require_once('model/Manager.php');
class CommentManager extends Manager
{
    public function postComment($postId, $pseudo, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(postId, pseudo, comment, commentDate) VALUES(?, ?, ?, NOW())');
        $insert = $comments->execute(array($postId, $pseudo, $comment));
        return $insert;
    }

    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, postId, pseudo, comment, DATE_FORMAT(commentDate, \'%d/%m/%Y à %Hh%imin%ss\') AS commentDateFr FROM comments WHERE postId = ? ORDER BY commentDate DESC');
        $comments->execute(array($postId));
        return $comments;
    }

    public function deleteComment($id)
    {
        $db = $this->dbConnect();
        $reponse = $db->prepare('DELETE FROM comments WHERE id = ?');
        $rep = $reponse->execute(array($id));
        return $rep;
    }

    public function reportComment($id)
    {
        $db = $this->dbConnect();
        $report = $db->prepare('UPDATE comments SET report = TRUE WHERE id = ?');
        $report->execute(array($id));
        return $report;
    }

    public function delReportComment($id)
    {
        $db = $this->dbConnect();
        $delReport = $db->prepare('UPDATE comments SET report = FALSE WHERE id = ?');
        $delReport->execute(array($id));
        return $delReport;
    }

    public function getReportComments()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT c.id, c.postId, c.pseudo, c.comment, DATE_FORMAT(c.commentDate, \'%d/%m/%Y à %Hh%imin%ss\') AS commentDateFr , p.title as postTitle FROM comments c INNER JOIN posts p on c.postId = p.id WHERE report = TRUE');
        return $req;
    }
}