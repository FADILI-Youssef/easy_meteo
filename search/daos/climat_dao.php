<?php

class ClimatDao {

    //Pattern singleton
    private static $instance = null;
    
    private function __construct() {}
    
    public static function getInstance() {
        
        if (self::$instance == null)
            self::$instance = new ClimatDao();
        
        return self::$instance;
    }
    
    //Méthodes
    public function getClimatPeriode($moisDeb, $moisFin, $nbAnnes) {
        
        //Prépare les données
        $annee = date('Y');
        $dateDebut = ($annee - $nbAnnes).'-'.$moisDeb.'-1';
        $dateFin = $annee.'-'.($moisDeb + $moisFin - 1).'-1';
        
        //Prépare la requête
        $requete = 'select * from climat where date > ? and date < ? and id_station = ?';
        
        //Envoie la requête
        $climats = array();
        $connection = DbConnection::getInstance()->connect();
        $statement = $connection->prepare($requete);
        $statement->bindValue(1, $dateDebut);
        $statement->bindValue(2, $dateFin);
        $statement->bindValue(3, 1);
        $statement->execute();
        
        while ($res = $statement->fetch())
            array_push($climats, new Climat(
                                        $res['id'],
                                        $res['id_station'],
                                        $res['date'],
                                        $res['temperature'],
                                        $res['vitesse_vent'],
                                        $res['duree_insolation']
                                    )
                      );
        
        return $climats;
    }
}
    
   ?>