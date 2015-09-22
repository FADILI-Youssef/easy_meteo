<?php
////////////////////////////////////////////////////////////
// Cette classe permet de récupérer les données           //
// du site web contenant les informations météorologique. //
////////////////////////////////////////////////////////////

class DataTable {
    
    //Données
    private $COLONNE_TEMPERATURE = 1;
    private $COLONNE_VITESSE_VENT = 5;
    
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
    
    //Méthodes
    public function getTemperatures() {
        $temperatures = '';
        $tableLines = $this->getTbody()->getElementsByTagName('tr');
        echo count(tableLines->item(0));
        /*for ($i = 0, $l = count($tableLines); $i < $l; $i++)
            for ($j = 0, $k = count(tableLines->item($i)); $j < $k; $j++)
                $temperatures .= tableLines[$i]->getElementsByTagName('td')->item($COLONNE_TEMPERATURE).';';*/
        
        return $temperatures;
    }
   
}

?>