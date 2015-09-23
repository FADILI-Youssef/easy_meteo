<?php

////////////////////////////////////////////////////////////
// Ce fichier index permet :                              //
//      - d'inclure le fichier constants.php              //
//      - d'assembler les différents modules du site web  //
////////////////////////////////////////////////////////////


//Inclus le fichier constants.php
include_once('tools/constants.php');

//Inclusion des modèles
foreach (glob(ABSORPTION_MODULE.'models/*.php') as $filename) include_once($filename);

//Inclus la partie top du site
include_once(WRAPPERS.'top.php');

//Inclus le module d'absorbtion de données
include_once(ABSORPTION_MODULE.'controllers/absorber.php');

//Inclus le module de recherche
include_once(SEARCH_MODULE.'controllers/search.php');

//Inclus le module d'affichage par période
include_once(PERIODIC_DISPLAY_MODULE.'controllers/periodic_display.php');

//Inclus le module d'affichage par mois
include_once(GENERAL_DISPLAY_MODULE.'controllers/general_display.php');

//Inclus la partie bottom du site
include_once(WRAPPERS.'bottom.php');


?>
