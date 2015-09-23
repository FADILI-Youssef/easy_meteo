<?php

/////////////////////////////////////////////////////////////
// Fichier qui regroupe l'ensemble des constantes du site  //
/////////////////////////////////////////////////////////////

//Architecture relative
define('ROOT_PATH', dirname(dirname(__FILE__)));
define('ABSORPTION_MODULE', ROOT_PATH.'/absorption/');
define('GENERAL_DISPLAY_MODULE', ROOT_PATH.'/general_display/');
define('PERIODIC_DISPLAY_MODULE', ROOT_PATH.'/periodic_display/');
define('SEARCH_MODULE', ROOT_PATH.'/search/');
define('WRAPPERS', ROOT_PATH.'/wrappers/');

//Site web d'où sont tirée les données + constantes pour site
define('WEB_SITE_SOURCE', 'http://www.prevision-meteo.ch/climat/horaire/');
define('INDICE_TABLEAU_DETAILLE', '1');
define('INDICE_TABLEAU_RECAP', '2');

//Codes pour les factory pattern
define('F_DATA_TABLE_DETAILS', '0');
define('F_DATA_TABLE_RECAP', '1');


?>