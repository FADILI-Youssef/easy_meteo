<?php

class DbConnection {

    //Pattern singleton
    private static $instance = null;
    
    private function __construct() {}
    
    public static function getInstance() {
    
        if (self::$instance == null)
            self::$instance = new DbConnection();
        
        return self::$instance;
    }
    
    //Connecte toi à la base de données
    public function connect() {return new PDO('mysql:host='.DB_SERVER.';dbname='.DB_NAME, DB_USER, DB_PASS);}
    
}

?>