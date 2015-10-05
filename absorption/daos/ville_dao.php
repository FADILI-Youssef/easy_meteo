<?php

class VilleDao {

    //Pattern singleton
    private static $instance = null;
    
    private function __construct() {}
    
    public static function getInstance() {
        
        if (self::$instance == null)
            self::$instance = new VilleDao();
        
        return self::$instance;
    }
    
    //Méthodes
    public function getSuggestions($indication) {
        
        $villes = array();
        
        //Préparation du param
        $indication = '%'.$indication.'%';
        
        //Requetes
        $requete = "select distinct * from ville where nom like ? or code_postal like ?";
        
        //Envoie de la requête
        $connection = DbConnection::getInstance()->connect(); 
        $statement = $connection->prepare($requete);
        $statement->bindValue(1, $indication);
        $statement->bindValue(2, $indication);
        $statement->execute();
        
        while ($res = $statement->fetch())
            array_push($villes, new Ville(
                                            $res['id'],
                                            $res['nom'],
                                            $res['code_postal'],
                                            $res['longitude'],
                                            $res['latitude']
                                            )
                      );
    
        return $villes;
    }

}

?>