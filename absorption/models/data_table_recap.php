<?php

class DataTableRecap extends DataTable {
    
    //Données
    private $COLONNE_DUREE_INSOLATION = 4;

    //Constructeur
    public function __construct() {
        parent::__construct();
        $this->COLONNES_NOMBRE = 8;
        $this->LIGNES_NOMBRE = 1;
        $this->DONNEES_NOMBRE = 8;
    }
    
    //Récupère la durée d'insolation
    public function getDureeInsolation() {
        
        $durees = '';
        
        $table2D = $this->splitData();
        
        for ($i = 0; $i < $this->LIGNES_NOMBRE; $i++)
                $durees .= $table2D[$i][$this->COLONNE_DUREE_INSOLATION].';';
        
        return substr($durees, 0, (strlen($durees) - 1));
    }

}

?>