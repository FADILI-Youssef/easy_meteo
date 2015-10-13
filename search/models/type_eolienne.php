<?php

class TypeEolienne {

    //Attributs
    private $_id;
    private $_diametreMin;
    private $_diametreMax;
    private $_puissanceMin;
    private $_puissanceMax;
    private $_nom;
    
    //
    public function __construct($_id, $_diametreMin, $_diametreMax, $_puissanceMin, $_puissanceMax, $_nom) {
        
        $this->setId($_id);
        $this->setDiametreMin($_diametreMin);
        $this->setDiametreMax($_diametreMax);
        $this->setPuissanceMin($_puissanceMin);
        $this->setPuissanceMax($_puissanceMax);
        $this->setNom($_nom);
    }
    
    public function setId($_id) {$this->_id = $_id;}
    public function setDiametreMin($_diametreMin) {$this->_diametreMin = $_diametreMin;}
    public function setDiametreMax($_diametreMax) {$this->_diametreMax = $_diametreMax;}
    public function setPuissanceMin($_puissanceMin) {$this->_puissanceMin = $_puissanceMin;} 
    public function setPuissanceMax($_puissanceMax) {$this->_puissanceMax = $_puissanceMax;}    
    public function setNom($_nom) {$this->_nom = $_nom;}
}

?>