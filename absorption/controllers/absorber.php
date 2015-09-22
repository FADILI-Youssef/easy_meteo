<?php

///////////////////////////////////////////////////////////////////////////////
// Ce fichier permet de récupérer les données à partir du site :             //
//              http://www.prevision-meteo.ch/climat/journalier/nancy-essey  //
///////////////////////////////////////////////////////////////////////////////

    //Inclus les fichiers dont tu as besoin
    include_once('../models/data_table.php');

    //Récupère le code HTML de la page
    $pageCode = file_get_contents(WEB_SITE_SOURCE.'paris-orly/2015-09-17');

    //Transforme le code pourque l'on puisse le traiter en dom
    $domTool = new DOMDocument();
    $domTool->loadHTML($pageCode);
    $domTool->saveHTML();
    
    //Récupère les deux tableaux qui nous intéressent
    $tableauDetaille = $domTool->getElementsByTagName('table')->item(INDICE_TABLEAU_DETAILLE);
    $tableauRecap = $domTool->getElementsByTagName('table')->item(INDICE_TABLEAU_RECAP);
    
    //Instancie un objet DataTable pour le premier tableau
    $thead = $tableauDetaille->getElementsByTagName('thead')->item(0);
    $tbody = $tableauDetaille->getElementsByTagName('tbody')->item(0);
    $tfoot = null;
    //DataTable $o_tableauDetaille = new DataTable($thead, $tbody, $tfoot);
   
    

?>