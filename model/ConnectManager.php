<?php
namespace killian\blogDeJeanForteroche\model;
require_once('model/Manager.php');
class ConnectManager extends Manager
{
    public function verifConnect($pseudo)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT pass FROM members WHERE pseudo = :pseudo');
        $req->execute(array('pseudo' => $_POST['pseudo']));
        $resultat = $req->fetch();
        return $resultat;
    }
}