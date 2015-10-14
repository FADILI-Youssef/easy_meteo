<?php

class ConsommationTotale {

    //Attributs
    private $_nbMenage;
    private $_typeAppartement;
    private $_consommation;
    private $_nbSatisfaits;
    
    //Constructeur
    public function __construct($_nbMenage, $_typeAppartement, $_consommation, $_nbSatisfaits) {
        
        $this->setNbMenage($_nbMenage);
        $this->setTypeAppartement($_typeAppartement);
        $this->setConsommation($_consommation);
        $this->setNbSatisfaits($_nbSatisfaits);
    }
    
    //Setters
    public function setNbMenage($_nbMenage) {$this->_nbMenage = $_nbMenage;}
    public function setTypeAppartement($_typeAppartement) {$this->_typeAppartement = $_typeAppartement;}
    public function setConsommation($_consommation) {$this->_consommation = $_consommation;}
    public function setNbSatisfaits($_nbSatisfaits) {$this->_nbSatisfaits = $_nbSatisfaits;}
    
    //Getters
    public function getNbMenage() {return $this->_nbMenage;}
    public function getTypeAppartement() {return $this->_typeAppartement;}
    public function getConsommation() {return $this->_consommation;}
    public function getNbSatisfaits() {return $this->_nbSatisfaits;}
}

?>