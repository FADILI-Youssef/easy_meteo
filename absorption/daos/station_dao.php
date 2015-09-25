<?php

class StationDao {

    //Pattern singleton
    private static $instance = null;
    
    private function __construct() {}
    
    public static function getInstance() {
    
        if (self::$instance == null)
            self::$instance = new StationDao(); 
    
        return self::$instance;
    }
    
    public function getAll() {
        
        //Prépare la requête
        $requete = 'select id, code_postal, nom, altitude, longitude, latitude, dernier_mois from station';
        
        //Envoie la requête
        $connection = DbConnection::getInstance()->connect();
        $statement = $connection->prepare($requete);
        $statement->execute();
        
        //Mets en forme le resultat
        $stations = array();
        while ($res = $statement->fetch()) {
            $station = new Station();
            $station->setId($res['id']);
            $station->setCodePostal($res['code_postal']);
            $station->setNom($res['nom']);
            $station->setAltitude($res['altitude']);
            $station->setLongitude($res['longitude']);
            $station->setLatitude($res['latitude']);
            $station->setDernierMois($res['dernier_mois']);
            
            array_push($stations, $station);
        }
        
        return $stations;
    }


}

?>