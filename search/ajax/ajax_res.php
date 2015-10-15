<?php

    //inclus les fichiers dont tu as besoin
    include_once('../../tools/dbconnection.php');
    include_once('../../tools/constants.php');
    include_once('../models/climat.php');
    include_once('../daos/climat_dao.php');
    include_once('../../absorption/models/consommation_chauffage.php');
    include_once('../../absorption/models/consommation_chauffe_eau.php');
    include_once('../../absorption/daos/consommation_chauffage_dao.php');
    include_once('../../absorption/daos/consommation_chauffe_eau_dao.php');
    include_once('../../absorption/models/consommation_totale.php');

    //Récupère les données de la recherche
    $typeEolienne = $_GET['typeeol'];
    $diametreEolienne = $_GET['diameol'];
    $moisDebut = $_GET['moisdeb'];
    $moisFin = $_GET['moisfin'];
    $periode = $_GET['periode'];
    $seuilVitesseVent = $_GET['svmv'];
    $seuilTemperature = $_GET['st'];
    $seuilDureeInsolation = $_GET['sdi'];
    $ville = $_GET['station'];

    //Produits les resultats
    $climatDao = ClimatDao::getInstance();
    $climats = $climatDao->getClimatPeriode($moisDebut, $moisFin, $periode);

    //Calcule les résultats
    $nbJours = count($climats);
    $heures = 0;
    $minutes = 0;
    $temperatures = array();
    $vitessesVent = array();
    foreach ($climats as $climat) {
        
        $data = split(' h ', $climat->getDureeInsolation());
        $heures += $data[0];
        $minutes += split(' ', $data[1])[0];
        
        array_push($temperatures, split(';', $climat->getTemperature()));
        array_push($vitessesVent, split(';', $climat->getVitesseVent()));
    }

    $heures += floor($minutes / 60);
    $minutes = $minutes % 60;
    $moyenne_insolation = (($heures * 60) + $minutes) / $nbJours;
    $heures_m = floor($moyenne_insolation / 60);
    $minutes_m = $moyenne_insolation % 60;

    $temperature_m = 0;
    $vitVent_m = 0;
    for ($i = 0, $l = count($temperatures); $i < $l; $i++) {
        for ($j = 0, $k = count($temperatures[$i]); $j < $k; $j++) {
            $temperature_m += $temperatures[$i][$j];
            $vitVent_m += $vitessesVent[$i][$j];
        }
    }
        
    $temperature_m = number_format(($temperature_m/($nbJours * 24)), '2', ',', ' ');
    $vitesseVent_m = number_format(($vitVent_m/($nbJours * 24)), '2', ',', ' ');


    //Calcule l'énergie produite par jour
    $energies = array();
    for ($i = 0, $l = count($vitessesVent); $i < $l; $i++) {
        
        $vitesseJour = 0;
        
        for ($j = 0, $k = count($vitessesVent[$i]); $j < $k; $j++) {
            $vitesseJour += $vitessesVent[$i][$j];
        }
        
        $vitesseJourMoy =  $vitesseJour / 24;
        $energie = (16/27)/(1/2)* pow(9, 2) * pow($vitesseJourMoy, 3);
        array_push($energies, array($vitesseJourMoy, $climats[$i]->getDate()));
    }
            
    //Calcule la demande en consommation
    $consosChauffageDao = ConsommationChauffageDao::getInstance();
    $consosChauffage = $consosChauffageDao->getAll();

    $consosChauffeEauDao = ConsommationChauffeEauDao::getInstance();
    $consosChauffeEau = $consosChauffeEauDao->getAll();

    $demande = array();
    $traceDemande = '';
    foreach ($consosChauffeEau as $consoChauffeEau) {
    
        $conso = 0;
        $conso = $consoChauffeEau->getConsommation();
        $conso += $consosChauffage[$consoChauffeEau->getTypeAppartement() - 1]->getConsommation();
        $conso /= 365;
        $traceDemande .= $conso.' - ';
        array_push($demande, new ConsommationTotale($consoChauffeEau->getNbMenage(),
                                                    $consoChauffeEau->getTypeAppartement(),
                                                    $conso,
                                                    0
                                                    )
                  );
    }


    //Définis pour chaque jour qu'est-ce qui peut être alimenté
    $alimentation = array();
    for ($i = 0; $i < $nbJours; $i++) {
        $temp_alim = array();
        for ($j = 0, $k = count($demande); $j < $k; $j++) {

            $demande[$j]->setNbSatisfaits(floor($energies[$i][0] / $demande[$j]->getConsommation()));
            array_push($temp_alim,
                       array($demande[$j]->getNbMenage(),
                       $demande[$j]->getTypeAppartement(),
                       $demande[$j]->getConsommation(),
                       $demande[$j]->getNbSatisfaits(),
                       $climats[$i]->getDate())
                      );
        }
        array_push($alimentation, $temp_alim);
    }

    //Organise les resultats par années
    $annees = array();
    $temp_annee = array();
    $anneeEnCours = 2010;
    for ($i = 0, $l = $nbJours; $i < $l; $i++) {
        
        if (split('-', $alimentation[$i][0][4])[0] == $anneeEnCours) {
            array_push($temp_annee, $alimentation[$i]);
        } else {
            $anneeEnCours++;
            array_push($annees, $temp_annee);
            $temp_annee = array();
            array_push($temp_annee, $alimentation[$i]);
        }
    }
    array_push($annees, $temp_annee);
    //Calcul des résultats sur toutes les années prises en compte
    $nbAnnees = count($annees);


    header('Content-Type: application/json; charset="utf-8"');

    //Renvoie le resultat
    $resultat = array();
    $resultat['duree_totale_insolation'] = $heures.' h '.$minutes.' m';
    $resultat['duree_moyenne_insolation'] = $heures_m.' h '.$minutes_m.' m';
    $resultat['temperature_moyenne'] = $temperature_m.'°C';
    $resultat['vitesse_vent'] = $vitesseVent_m.' Km/h';
    $resultat['energie_produite'] = $energies;
    $resultat['demande_consommation'] = $demande;
    $resultat['resultat_brut'] = $alimentation;
    $resultat['fadilicorp'] = $annees[0][0][0][4];
    echo json_encode($resultat);
?>