<?php

class Climat {

    //Attributs
    private $_id;
    private $_idStation;
    private $_date;
    private $_temperature;
    private $_vitesseVent;
    private $_dureeInsolation;
    
    //Constructeur
    public function __construct($_id, $_idStation, $_date, $_temperature, $_vitesseVent, $_dureeInsolation) {
        
        $this->setId($_id);
        $this->setIdStation($_idStation);
        $this->setDate($_date);
        $this->setTemperature($_temperature);
        $this->setVitesseVent($_vitesseVent);
        $this->setDureeInsolation($_dureeInsolation);
    }
    
    //Setters
    public function setId($_id){$this->_id = $_id; }
    public function setIdStation($_idStation){$this->_idStation = $_idStation;}
    public function setDate($_date){$this->_date = $_date;}
    public function setTemperature($_temperature){$this->_temperature = $_temperature;}
    public function setVitesseVent($_vitesseVent){$this->_vitesseVent = $_vitesseVent;}
    public function setDureeInsolation($_dureeInsolation){$this->_dureeInsolation = $_dureeInsolation;}
    
    //Getters
    public function getId() {return $this->_id;}
    public function getIdStation() {return $this->_idStation;}
    public function getDate() {return $this->_date;}
    public function getTemperature() {return $this->_temperature;}
    public function getVitesseVent() {return $this->_vitesseVent;}
    public function getDureeInsolation() {return $this->_dureeInsolation;}
}

?>