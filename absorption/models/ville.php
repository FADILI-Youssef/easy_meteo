<?php

class Ville {

    //Attributs
    private $_id;
    private $_nom;
    private $_codePostal;
    private $_longitude;
    private $_latitude;
    
    //Constructeurs
    public function __construct($_id, $_nom, $_codePostal, $_longitude, $_latitude) {
    
        $this->setId($_id);
        $this->setNom($_nom);
        $this->setCodePostal($_codePostal);
        $this->setLongitude($_longitude);
        $this->setLatitude($_latitude);
    }
    
    //Setters
    public function setId($_id) {$this->_id = $_id;}
    public function setNom($_nom) {$this->_nom = $_nom;}
    public function setCodePostal($_codePostal) {$this->_codePostal = $_codePostal;}
    public function setLongitude($_longitude) {$this->_longitude = $_longitude;}
    public function setLatitude($_latitude) {$this->_latitude = $_latitude;}
    
    //Getters
    public function getId() {return $this->_id;}
    public function getNom() {return $this->_nom;}
    public function getCodePostal() {return $this->_codePostal;}
    public function getLongitude() {return $this->_longitude;}
    public function getLatitude() {return $this->_latitude;}
    
}

?>