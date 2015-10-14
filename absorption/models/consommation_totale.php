<?php

class ConsommationTotale {

    //Attributs
    private $_nbMenage;
    private $_typeAppartement;
    private $_consommation;
    
    //Constructeur
    public function __construct($_nbMenage, $_typeAppartement, $_consommation) {
        
        $this->setNbMenage($_nbMenage);
        $this->setTypeAppartement($_typeAppartement);
        $this->setConsommation($_consommation);
    }
    
    //Setters
    public function setNbMenage($_nbMenage) {$this->_nbMenage = $_nbMenage;}
    public function setTypeAppartement($_typeAppartement) {$this->_typeAppartement = $_typeAppartement;}
    public function setConsommation($_consommation) {$this->_consommation = $_consommation;}
    
    //Getters
    public function getNbMenage() {return $this->_nbMenage;}
    public function getTypeAppartement() {return $this->_typeAppartement;}
    public function getConsommation() {return $this->_consommation;}
}

?>