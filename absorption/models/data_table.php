<?php
////////////////////////////////////////////////////////////
// Cette classe permet de récupérer les données           //
// du site web contenant les informations météorologique. //
////////////////////////////////////////////////////////////

abstract class DataTable {
    
    //Données
    protected $LIGNES_NOMBRE;
    protected $COLONNES_NOMBRE;
    protected $DONNEES_NOMBRE;
    
    //Attributs
    protected $_date;
    protected $_thead;
    protected $_tbody;
    protected $_tfoot;
    
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