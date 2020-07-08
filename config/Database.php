<?php

class Database extends PDO{
    private $host = "localhost";
    private $db_name = "chat";
    private $username = "root";
    private static $database = null;

    public static function getInstance(){
        if(is_null(self::$database)){
            self::$database = new Database();
        }
        return self::$database;
    }

    public function __construct(){
        try{
            parent::__construct('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->exec('SET NAMES UTF8');
        }catch(PDOException $e){
            var_dump($e->getCode().' : '.$e->getMessage());
            die();
        }
    }
}
