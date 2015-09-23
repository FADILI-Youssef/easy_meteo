<?php
////////////////////////////////////////////////////////////
// Cette classe permet de récupérer les données           //
// du site web contenant les informations météorologique. //
////////////////////////////////////////////////////////////

class DataTable {
    
    //Données
    private $COLONNE_TEMPERATURE = 1;
    private $COLONNE_VITESSE_VENT = 5;
    private $COLONNES_NOMBRE = 14;
    private $LIGNES_NOMBRE = 24;
    private $DONNEES_NOMBRE = 336;
    
    //Attributs
    private $_date;
    private $_thead;
    private $_tbody;
    private $_tfoot;
    
    //Constructeur
    public function __construct($date, $thead, $tbody, $tfoot) {
        $this->setDate($date);
        $this->setThead($thead);
        $this->setTbody($tbody);
        $this->setTfoot($tfoot);
    }
    
    //Setters
    public function setThead($thead) {$this->_thead = $thead;}
    public function setTbody($tbody) {$this->_tbody = $tbody;}
    public function setTfoot($tfoot) {$this->_tfoot = $tfoot;}
    public function setDate($date) {$this->_date = $date;}
    
    //Getters
    public function getTbody() {return $this->_tbody;}
    
    //Récupère la liste des températures et mets les en forme pour la base de données
    public function getTemperatures() {
        $temperatures = '';
        
        $table2D = $this->splitData();
        
        for ($i = 0; $i < $this->LIGNES_NOMBRE; $i++)
                $temperatures .= $table2D[$i][$this->COLONNE_TEMPERATURE].';';
        
        return $temperatures;
    }
    
    //Renvoie toutes les données sous forme d'un tableau a deux dimensions
    public function splitData() {
        
        $data = $this->getTbody()->getElementsByTagName('td');
        $table2D = array();
        $temp = array();
        
        for ($i = 0; $i < $this->DONNEES_NOMBRE; $i++) {
            if ( ((($i + 1) %  $this->COLONNES_NOMBRE) == 0) && ($i > 0) ) {
                array_push($table2D, $temp);
                $temp = array();
            } else array_push($temp, $data->item($i)->nodeValue);
        }
           
        return $table2D;  
    }
   
}

?>