<?php

class ConsommationChauffeEauDao {

    //Pattern singleton
    private static $instance = null;
    
    private function __construct() {}
    
    public static function getInstance() {
    
        if (self::$instance == null)
            self::$instance = new ConsommationChauffeEauDao(); 
    
        return self::$instance;
    }
    
    //Méthodes
    public function getAll() {
    
        //Prépare la requête
        $requete = 'select * from consommation_electrique_chauffe_eau';
        
        //Envoie la requête
        $connection = DbConnection::getInstance()->connect();
        $statement = $connection->prepare($requete);
        $statement->execute();
        
        //Renvoie le resultat
        $consosChauffeEau = array();
        while ($res = $statement->fetch()) {
            
            array_push($consosChauffeEau, new ConsommationChauffeEau(
                                                                    $res['id'],
                                                                    $res['consommation'],
                                                                    $res['id_type_appartement'],
                                                                    $res['nb_menage']
                                                                    )
                      );
        }
        
        return $consosChauffeEau;
    }
}

?>