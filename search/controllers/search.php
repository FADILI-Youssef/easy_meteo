<?php

    //Prépare les données à afficher
    $mois = '<option></option>'
            .'<option>Janvier</option>'
            .'<option>Février</option>'
            .'<option>Mars</option>'
            .'<option>Avril</option>'
            .'<option>Mai</option>'
            .'<option>Juin</option>'
            .'<option>Juillet</option>'
            .'<option>Aout</option>'
            .'<option>Septembre</option>'
            .'<option>Octobre</option>'
            .'<option>Novembre</option>'
            .'<option>Décembre</option>';

    $typeEolienneDao = TypeEolienneDao::getInstance();
    $nomsEoliennes = $typeEolienneDao->getNoms();

    
    //Inclus la vue de la recherche
    include_once(SEARCH_MODULE.'views/search.php');

?>