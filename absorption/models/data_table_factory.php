<?php

//////////////////////////////////////////////////////////////////
// Classe pour utiliser le pattern factory                      //
// pour les objets dérivants de la classe abstraite DataTable   //
//////////////////////////////////////////////////////////////////

class DataTableFactory {
    
    //Pattern singleton
    private static $instance = null;
    
    private function __construct() {}
    
    public static function getInstance() {
     
        if (self::$instance == null)
            self::$instance = new DataTableFactory();
        
        return self::$instance;
    }

    //Pattern factory
    public function getDataTable($code) {
        
        if ($code == F_DATA_TABLE_DETAILS)      return new DataTableDetails();
        else if ($code == F_DATA_TABLE_RECAP)   return new DataTableRecap();
            
        return null;
    }

}

?>