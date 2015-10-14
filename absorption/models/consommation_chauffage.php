<?php

class consommationChauffage {

    //Attributs
    private $_id;
    private $_consommation;
    private $_typeAppartement;
    
    //Constructeur
    public function __construct($_id, $_consommation, $_typeAppartement) {
        
        $this->setId($_id);
        $this->setConsommation($_consommation);
        $this->setTypeAppartement($_typeAppartement);
    }
    
    //Setters
    public function setId($_id) {$this->_id = $id;}
    public function setConsommation($_consommation) {$this->_consommation = $_consommation;}
    public function setTypeAppartement($_typeAppartement) {$this->_typeAppartement = $_typeAppartement;}
    
    //Getters
    public function getId() {return $this->_id;}
    public function getConsommation() {return $this->_consommation;}
    public function getTypeAppartement() {return $this->_typeAppartement;}
}

?>