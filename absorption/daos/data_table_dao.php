<?php


class DataTableDao {
    
    //Pattern singleton
    private static $instance = null;
    
    private function __construct() {}
    
    public static function getInstance() {
        
        if (self::$instance == null)
            self::$instance = new DataTableDao();
        
        return self::$instance;
    }
    
    //Ajoute une température
    public function addClimat($o_dataTableDetails, $o_dataTableRecap) {
        
        //Prépare les données à enregistrer
        $date = $o_dataTableDetails->getDate()->format('Y-m-d H:i:s');
        $idStation = $o_dataTableDetails->getIdStation();
        $temperatures = $o_dataTableDetails->getTemperatures();
        $vitessesVent = $o_dataTableDetails->getVitessesVent();
        $dureeInsolation = $o_dataTableRecap->getDureeInsolation();
        
        //Prépare la requête
        $requete = 'insert into climat(id_station, date, temperature, vitesse_vent, duree_insolation) values (?, ?, ?, ?, ?)';
       
        //Envoie la requête
        $connection = DbConnection::getInstance()->connect();
        $statement = $connection->prepare($requete);
        $statement->bindValue(1, $idStation);
        $statement->bindValue(2, $date);
        $statement->bindValue(3, $temperatures);
        $statement->bindValue(4, $vitessesVent);
        $statement->bindValue(5, $dureeInsolation);
        $statement->execute();
    }
    
}

?>