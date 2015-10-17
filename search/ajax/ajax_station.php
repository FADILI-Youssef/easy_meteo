<?php

    //Inclus les fichiers dont tu as besoin
    include_once('../../tools/dbconnection.php');
    include_once('../../tools/constants.php');
    include_once('../../absorption/models/ville.php');
    include_once('../../absorption/daos/ville_dao.php');

    //Récupère les données de la ville choisie
    $villeDao = VilleDao::getInstance();
    $ville = $villeDao->getByNameOrCP($_GET['ville']);

    header('Content-Type: application/json; charset="utf-8"');

    //Renvoie le resultat
    $resultat = array();
    $resultat['longitude'] = $ville->getLongitude();
    $resultat['latitude'] = $ville->getLatitude();
    echo json_encode($resultat);

?>