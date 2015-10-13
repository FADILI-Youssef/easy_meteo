<?php

class TypeEolienneDao {

    //Pattern singleton
    private static $instance = null;
    
    private function __construct() {}
    
    public static function getInstance() {
        
        if (self::$instance == null)
            self::$instance = new TypeEolienneDao();
        
        return self::$instance;
    }
    
    //Récupère le nom des types éolienne
    public function getNoms() {
    
        //Prépare la requête
        $requete = 'select nom from type_eolienne';
        
        //Envoie la requête
        $noms = array();
        $connection = DbConnection::getInstance()->connect();
        $statement = $connection->prepare($requete);
        $statement->execute();
        
        while ($res = $statement->fetch())
            array_push($noms, $res['nom']);
        
        return $noms;
    }
}

?>