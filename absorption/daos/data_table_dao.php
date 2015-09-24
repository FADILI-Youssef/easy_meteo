<?php


class DataTableDao {
    
    //Pattern singleton
    private $instance = null;
    
    private function __construct() {}
    
    public static function getInstance() {
        
        if ($instance == null)
            $instance = new DataTableDao();
        
        return $instance;
    }
    
    //Ajoute une température
    public function addTemperature($o_dataTableDetails) {
        
        $temperatures = $o_dataTableDetails->getTemperatures();
        $requete = 'insert into climat(date, id_station, temperature, vitesse_vent, duree_insolation)values (?, ?, ?, ?, ?)';
    }
    
}

?>