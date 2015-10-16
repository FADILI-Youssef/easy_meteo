<?php

    //inclus les fichiers dont tu as besoin
    include_once('../../tools/dbconnection.php');
    include_once('../../tools/constants.php');
    include_once('../../absorption/models/ville.php');
    include_once('../../absorption/daos/ville_dao.php');

    //Ouils
    $villeDao = VilleDao::getInstance();

    //Récupère la liste des villes
    $villes = $villeDao->getSuggestions($_GET['ville']);
    
    $tableauVilles = array();
    //Mets en formes le résultat
    foreach ($villes as $ville)
        array_push($tableauVilles, array($ville->getId(), $ville->getNom()));

    header('Content-Type: application/json; charset="utf-8"');

    //Renvoie le resultat
    echo json_encode($tableauVilles);

?>