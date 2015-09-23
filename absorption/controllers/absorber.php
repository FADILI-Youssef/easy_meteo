<?php

////////////////////////////////////////////////////////////////////////////////
// Ce fichier permet de récupérer les données à partir du site :              //
//              http://www.prevision-meteo.ch/climat/journalier/station/date  //
////////////////////////////////////////////////////////////////////////////////

    //Inclus les fichiers dont tu as besoin
    include_once(ABSORPTION_MODULE.'models/data_table.php');
    
    
    //Variables  
    $day = 1;
    $month = 1;
    $year = 2010;
    $list_dataTable = array();

    while ( $day.'-'.$month.'-'.$year != '2-1-2010' ) {
        
        //Récupère le code HTML de la page
        $pageCode = file_get_contents(WEB_SITE_SOURCE.'paris-orly/'.$year.'-'.$month.'-'.$day); //Format date : yyyy-m-j

        //Transforme le code pourque l'on puisse le traiter en dom
        $domTool = new DOMDocument();
        $domTool->loadHTML($pageCode);
        $domTool->saveHTML();

        if ($domTool->getElementsByTagName('table')->item(INDICE_TABLEAU_DETAILLE) != null) {
            //Récupère les deux tableaux qui nous intéressent
            $tableauDetaille = $domTool->getElementsByTagName('table')->item(INDICE_TABLEAU_DETAILLE);
            $tableauRecap = $domTool->getElementsByTagName('table')->item(INDICE_TABLEAU_RECAP);

            //Instancie un objet DataTable pour le premier tableau
            $thead = $tableauDetaille->getElementsByTagName('thead')->item(0);
            $tbody = $tableauDetaille->getElementsByTagName('tbody')->item(0);
            $tfoot = null;
            array_push($list_dataTable, new DataTable('a', $thead, $tbody, $tfoot));
        }
        
        //Change la date
        if ($day == 31) {
            if ($month == 12) {
                $month = 1;
                $year++;
            } else $month++;
            $day = 1;
        } else $day++;
        
    }
    $list_dataTable[0]->getTemperatures();

?>