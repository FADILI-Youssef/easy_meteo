<?php

////////////////////////////////////////////////////////////
// Cette classe permet de récupérer les données           //
// du site web contenant les informations météorologique. //
////////////////////////////////////////////////////////////

class DataTable {
    
    //Attributs
    private var $thead;
    private var $tbody;
    private var $tfoot;
    
    //Constructeur
    public function __construct($thead, $tbody, $tfoot) {
        $this->setThead($thead);
        $this->setTbody($tbody);
        $this->setTfoot($tfoot);
    }
    
    //Setters
    public setThead($thead) {$this->thead = $thead;}
    public setTbody($tbody) {$this->tbody = $tbody;}
    public setTfoot($tfoot) {$this->tfoot = $tfoot;}
}

?>