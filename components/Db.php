<?php

class Db
{
    public static function getConnection()
    {
        $paramsPath = ROOT . '/config/db_params.php';
            $params = include($paramsPath);

         $link = mysqli_connect($params['host'], $params['user'], $params['password'], $params['db']);

         return $link;
    }
    public static function getPDOConnection()
    {
        $paramsPath = ROOT . '/config/pdo_db_params.php';
        $params = include ($paramsPath);

        $db = new PDO("mysql:host=$host;dbname=$dbName", $user, $password);

        return $db;
    }
}