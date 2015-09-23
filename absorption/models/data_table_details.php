<?php
////////////////////////////////////////////////////////////
// Cette classe permet de récupérer les données           //
// du site web contenant les informations météorologique. //
////////////////////////////////////////////////////////////

class DataTableDetails extends DataTable {
    
    //Données
    private $COLONNE_TEMPERATURE = 1;
    private $COLONNE_VITESSE_VENT = 5;
    
    //Constructeur
    public function __construct() {
        parent::__construct();
        $this->COLONNES_NOMBRE = 14;
        $this->LIGNES_NOMBRE = 24;
        $this->DONNEES_NOMBRE = 336;
    }
    
    
    //Récupère la liste des températures et mets les en forme pour la base de données
    public function getTemperatures() {
        $temperatures = '';
        
        $table2D = $this->splitData();
        
        for ($i = 0; $i < $this->LIGNES_NOMBRE; $i++)
                $temperatures .= $table2D[$i][$this->COLONNE_TEMPERATURE].';';
        
        return substr($temperatures, 0, (strlen($temperatures) - 1));
    }
    
    //Récupère la liste des vitesses du vent
    public function getVitessesVent() {
        $vitesses = '';
        
        $table2D = $this->splitData();
        
        for ($i = 0; $i < $this->LIGNES_NOMBRE; $i++)
                $vitesses .= $table2D[$i][$this->COLONNE_VITESSE_VENT].';';
        
        return substr($vitesses, 0, (strlen($vitesses) - 1));
    }
     
}

?>