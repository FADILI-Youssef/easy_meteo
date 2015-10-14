<?php

class ConsommationChauffeEau {

    //Attributs
    private $_id;
    private $_consommation;
    private $_typeAppartement;
    private $_nbMenage;
    
    //Constructeur
    public function __construct($_id, $_consommation, $_typeAppartement, $_nbMenage) {
        
        $this->setId($_id);
        $this->setConsommation($_consommation);
        $this->setTypeAppartement($_typeAppartement);
        $this->setNbMenage($_nbMenage);
    }
    
    //Setters
    public function setId($_id) {$this->_id = $_id;}
    public function setConsommation($_consommation) {$this->_consommation = $_consommation;}
    public function setTypeAppartement($_typeAppartement) {$this->_typeAppartement = $_typeAppartement;}
    public function setNbMenage($_nbMenage) {$this->_nbMenage = $_nbMenage;}
    
    //Getters
    public function getId() {return $this->_id;}
    public function getConsommation() {return $this->_consommation;}
    public function getTypeAppartement() {return $this->_typeAppartement;}
    public function getNbMenage() {return $this->_nbMenage;}
}

?>