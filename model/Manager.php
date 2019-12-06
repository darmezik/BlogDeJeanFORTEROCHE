<?php
namespace Killian\BlogDeJeanFORTEROCHE\model;
class Manager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=blogdejean;charset=utf8', 'root', '');
        return $db;
    }
}