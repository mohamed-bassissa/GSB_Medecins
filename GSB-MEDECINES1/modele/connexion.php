<?php
require('../modele/database.php');
class App{

    const DB_NAME = 'bdmedecins';
    const DB_USER = 'root';
    const DB_PASS = '';
    const DB_HOST = 'localhost';   

    private static $Db;

    public static function getDb(){

        if (self::$Db === null) {
            self::$Db = new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);
        }
        return self::$Db;
    }


}