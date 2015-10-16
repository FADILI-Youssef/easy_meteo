<?php

    //Inclus les fichiers dont tu as besoin
    include_once('../../tools/dbconnection.php');
    include_once('../../tools/constants.php');
    include_once('../models/type_eolienne.php');
    include_once('../daos/type_eolienne_dao.php');

    //Récupère les paramètres
    $idTypeEolienne = $_GET['idte'];

    //Récupère la station concernée
    $typeEolienneDao_d = TypeEolienneDao::getInstance();
    $typeEolienne_d = $typeEolienneDao_d->getById($idTypeEolienne);

    header('Content-Type: application/json; charset="utf-8"');

    //Renvoie le resultat
    $resultat = array();
    $resultat['diametre_min'] = $typeEolienne_d->getDiametreMin();
    $resultat['diametre_max'] = $typeEolienne_d->getDiametreMax();
    echo json_encode($resultat);

?>