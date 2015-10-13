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
    
    //Récupère les éoliennes
    public function getAll() {
    
        //Prépare la requête
        $requete = 'select * from type_eolienne';
        
        //Lance la requête
        $eoliennes = array();
        $connection = DbConnection::getInstance()->connect();
        $statement = $connection->prepare($requete);
        $statement->execute();
        
        while ($res = $statement->fetch()) {
        
            array_push($eoliennes, new TypeEolienne(
                                                    $res['id'],
                                                    $res['diametre_min'],
                                                    $res['diametre_max'],
                                                    $res['puissance_min'],
                                                    $res['puissance_max'],
                                                    $res['nom']
                                                    )
                      );
        }
        
        return $eoliennes;
    }
}

?>