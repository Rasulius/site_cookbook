<?php

require_once ("config.php");

// Класс подключения к базе данных

class DbConn {

    private static $instance;
    private $dbConn;

    private function __construct() {}

    /**
     *
     * @return DbConn
     */
    private static function getInstance(){
        if (self::$instance == null){
            $className = __CLASS__;
            self::$instance = new $className;
        }
        return self::$instance;
    }

    /**
     *
     * @return DbConn
     */
    private static function initConnection(){
        $db = self::getInstance();        
        $db->dbConn = new mysqli(HOST, USER, PASSWORD, NAME_BD);
        $db->dbConn->set_charset('utf8');
        return $db;
    }

    /**
     * @return mysqli
     */
    public static function getDbConn() {
		echo 'getDBConn';
		
        try {
            $db = self::initConnection();
            return $db->dbConn;
        } catch (Exception $ex) {
            echo "I was unable to open a connection to the database. " . $ex->getMessage();
            return null;
        }
    }
}


?>