<?php

////////////////////////////////////////////////////////////////////////////////
// Ce fichier permet de récupérer les données à partir du site :              //
//              http://www.prevision-meteo.ch/climat/journalier/station/date  //
////////////////////////////////////////////////////////////////////////////////

    //Variables  
    $day = 1;
    $month = 1;
    $year = 2010;
    $list_dataTableDetails = array();
    $list_dataTableRecap = array();

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

            //Instancie un objet DataTableDetails
            $details_thead = $tableauDetaille->getElementsByTagName('thead')->item(0);
            $details_tbody = $tableauDetaille->getElementsByTagName('tbody')->item(0);
            $details_tfoot = null;
            array_push($list_dataTableDetails, new DataTableDetails('a', $details_thead, $details_tbody, $details_tfoot));
            
            //Instancie un objet DataTableRecap
            $recap_thead = $tableauRecap->getElementsByTagName('thead')->item(0);
            $recap_tbody = $tableauRecap->getElementsByTagName('tbody')->item(0);
            $recap_tfoot = null;
            array_push($list_dataTableRecap, new DataTableRecap('a', $recap_thead, $recap_tbody, $recap_tfoot));
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
    echo $list_dataTableDetails[0]->getTemperatures();
    echo '<br />';
    echo $list_dataTableDetails[0]->getVitessesVent();
    echo '<br />';
    echo $list_dataTableRecap[0]->getDureeInsolation();

?>