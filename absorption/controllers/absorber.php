<?php

////////////////////////////////////////////////////////////////////////////////
// Ce fichier permet de récupérer les données à partir du site :              //
//              http://www.prevision-meteo.ch/climat/journalier/station/date  //
////////////////////////////////////////////////////////////////////////////////

    //Variables
    $list_dataTableDetails = array();
    $list_dataTableRecap = array();
    $dataTableFactory = DataTableFactory::getInstance();
    $dataTableDao = DataTableDao::getInstance();
    $stationDao = StationDao::getInstance();

    //Récupère la liste des stations
    $stations = $stationDao->getAll();

    //Récupères les données concernant les différentes stations
    foreach ($stations as $station) {
        
        $day = 1;
        $month = 1;
        $year = 2010;
        
        while ( $day.'-'.$month.'-'.$year != '1-2-2010' ) {

            //Récupère le code HTML de la page
            $pageCode = file_get_contents(WEB_SITE_SOURCE.$station->getNom().'/'.$year.'-'.$month.'-'.$day); //Format date : yyyy-m-j
            
            //Transforme le code pourque l'on puisse le traiter en dom
            $domTool = new DOMDocument();
            $domTool->loadHTML($pageCode);
            $domTool->saveHTML();

            if ($domTool->getElementsByTagName('table')->item(INDICE_TABLEAU_DETAILLE) != null) {
                
                //Récupère les deux tableaux qui nous intéressent
                $tableauDetaille = $domTool->getElementsByTagName('table')->item(INDICE_TABLEAU_DETAILLE);
                $tableauRecap = $domTool->getElementsByTagName('table')->item(INDICE_TABLEAU_RECAP);

                //Instancie un objet DataTableDetails
                $o_dataTableDetails = $dataTableFactory->getDataTable(F_DATA_TABLE_DETAILS);
                $o_dataTableDetails->setDate(new DateTime($year.'-'.$month.'-'.$day));
                $o_dataTableDetails->setStation($station);
                $o_dataTableDetails->setThead($tableauDetaille->getElementsByTagName('thead')->item(0));
                $o_dataTableDetails->setTbody($tableauDetaille->getElementsByTagName('tbody')->item(0));
                $o_dataTableDetails->setTfoot(null);     
                array_push($list_dataTableDetails, $o_dataTableDetails);

                //Instancie un objet DataTableRecap
                $o_dataTableRecap = $dataTableFactory->getDataTable(F_DATA_TABLE_RECAP);
                $o_dataTableRecap->setDate(new DateTime($year.'-'.$month.'-'.$day));
                $o_dataTableRecap->setStation($station);
                $o_dataTableRecap->setThead($tableauRecap->getElementsByTagName('thead')->item(0));
                $o_dataTableRecap->setTbody($tableauRecap->getElementsByTagName('tbody')->item(0));
                $o_dataTableRecap->setTfoot(null);
                array_push($list_dataTableRecap, $o_dataTableRecap);
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
    }

    //Enregistre les données
    for ($i = 0, $l = count($list_dataTableDetails); $i < $l; $i++)
       $dataTableDao->addClimat($list_dataTableDetails[$i], $list_dataTableRecap[$i]);
    

?>