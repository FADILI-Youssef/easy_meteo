<?php

///////////////////////////////////////////////////////////////////////////////
// Ce fichier permet de récupérer les données à partir du site :             //
//              http://www.prevision-meteo.ch/climat/journalier/nancy-essey  //
///////////////////////////////////////////////////////////////////////////////

    //Récupère le code HTML de la page
    $pageCode = file_get_contents(WEB_SITE_SOURCE.'paris-orly/2015-09-17');

    //Transforme le code pourque l'on puisse le traiter en dom
    $domTool = new DOMDocument();
    $domTool->loadHTML($pageCode);
    $domPageCode = $domTool->saveHTML(); //$domPageCode contient le code du site visé utilisable en dom
    
    //Récupère les deux tableaux qui nous intéressent
    $tableauDetaille = $domTool->getElementsByTagName('table')->item(INDICE_TABLEAU_DETAILLE);
    $tableauRecap = $domTool->getElementsByTagName('table')->item(INDICE_TABLEAU_RECAP);
    var_dump($tableauRecap);

?>