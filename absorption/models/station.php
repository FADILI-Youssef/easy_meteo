<?php

class Station {
    
    //Attributs
    private $_id;
    private $_codePostal;
    private $_nom;
    private $_altitude;
    private $_longitude;
    private $_latitude;
    private $_dernierMois;
    
    //Constructeur
    public function __construct() {}
    
    //Setters
    public function setId($id) {$this->_id = $id;}
    public function setCodePostal($codePostal) {$this->_codePostal = $codePostal;}
    public function setNom($nom) {$this->_nom = $nom;}
    public function setAltitude($altitude) {$this->_altitude = $altitude;}
    public function setLongitude($longitude) {$this->_longitude = $longitude;}
    public function setLatitude($latitude) {$this->_latitude = $latitude;}
    public function setDernierMois($dernierMois) {$this->_dernierMois = $dernierMois;}
    
    //Getters
    public function getId() {return $this->_id;}
    public function getCodePostal() {return $this->_codePostal;}
    public function getNom() {return $this->_nom;}
    public function getAltitude() {return $this->_altitude;}
    public function getLongitude() {return $this->_longitude;}
    public function getLatitude() {return $this->_latitude;}
    public function getDernierMois() {return $this->_dernierMois;}
    public function getListeDisponible() {return self::LISTE_DISPONIBLE;}
}

?>