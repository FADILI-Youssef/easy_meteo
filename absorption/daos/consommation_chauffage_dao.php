<?php

class ConsommationChauffageDao {

    //Pattern singleton
    private static $instance = null;
    
    private function __construct() {}
    
    public static function getInstance() {
    
        if (self::$instance == null)
            self::$instance = new ConsommationChauffageDao(); 
    
        return self::$instance;
    }
    
    //Méthodes
    public function getAll() {
    
        //Prépare la requête
        $requete = 'select * from consommation_electrique_chauffage ';
        
        //Envoie la requête
        $connection = DbConnection::getInstance()->connect();
        $statement = $connection->prepare($requete);
        $statement->execute();
        
        //Renvoie le resultat
        $consosChauffage = array();
        while ($res = $statement->fetch())
            array_push($consosChauffage, new ConsommationChauffage(
                                                                    $res['id'],
                                                                    $res['consommation'],
                                                                    $res['id_type_appartement']
                                                                    )
                      );
        
        return $consosChauffage;
    }
}

?>