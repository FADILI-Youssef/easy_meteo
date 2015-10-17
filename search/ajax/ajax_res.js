var resultatFinal = null;
var position = 0;
var mois_car = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];

function linkAjax_res(stationName) {

    xhrArray[1] = getXmlHttpRequest();
    
    if ((xhrArray[1] != null) && (xhrArray[1] != false)) {
		if (xhrArray[1].readyState == 0 || xhrArray[1].readyState == 4) {
            
            //Prépare les données récupérées
            var typeEolienne = document.getElementById('type_eolienne');
            var nomTypeEolienne = typeEolienne.value;
       
            var diametreEolienne = document.getElementById('diametre_eolienne');
            var nomDiametreEolienne = diametreEolienne.value;
            
            var moisDebut = document.getElementById('mois_debut');
            var nomMoisDebut = moisDebut.selectedIndex;
            
            var moisFin = document.getElementById('mois_fin');
            var nomMoisFin = moisFin.selectedIndex;
            
            var periode = document.getElementById('periode');
            var nomPeriode = periode.value;
            
            var seuilVitessVent = document.getElementById('seuil_vitesse_moyenne_vent');
            var nomSeuilVitesseVent = seuilVitessVent.value;
            
            var seuilTemperature = document.getElementById('seuil_temperature');
            var nomSeuilTemperature = seuilTemperature.value;
            
            var seuilDureeInsolation = document.getElementById('seuil_duree_insolation');
            var nomSeuilDureeInsolation = seuilDureeInsolation.value;
            
            
       
            //Prépare les arguments
            var args = 'typeeol=' + nomTypeEolienne;
                    args += '&diameol=' + nomDiametreEolienne;
                    args += '&moisdeb=' + nomMoisDebut;
                    args += '&moisfin=' + nomMoisFin;
                    args += '&periode=' + nomPeriode;
                    args += '&svmv=' + nomSeuilVitesseVent;
                    args += '&st=' + nomSeuilTemperature;
                    args += '&sdi=' + nomSeuilDureeInsolation;
                    args += '&station=' + stationName;
            
            
			xhrArray[1].open('GET', 'search/ajax/ajax_res.php?' + args, true);
			xhrArray[1].onreadystatechange = affichageSuggestions_res;
			xhrArray[1].send(null);
            
		} else setTimeout('link_ajax_centrale()', 500);
        
	} else if (xhrArray[1] == null) alert('Erreur ajax');
}

function affichageSuggestions_res() {
    //window.location.href = 'search/ajax/ajax.php?ville=mar';
    if ((xhrArray[1].readyState == 4) && (xhrArray[1].status == 200)) {
        var resultat = JSON.parse(xhrArray[1].responseText);
        
        //alert(resultat);
        document.getElementById('dit_res').innerHTML = resultat['duree_totale_insolation'];
        document.getElementById('dim_res').innerHTML = resultat['duree_moyenne_insolation'];
        document.getElementById('temp_res').innerHTML = resultat['temperature_moyenne'];
        document.getElementById('vit_res').innerHTML = resultat['vitesse_vent'];
        
        var joursParMois = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        
        var numJour = -1;
        var lastResult = new Array();
        
        for (var i = 0, l = joursParMois.length; i < l; i++) {
             var temp_last_result = new Array(); 
             for (var j = 0, k = joursParMois[i]; j < k; j++) {
                 
                 numJour++;
                 
                 for (var y = 0, z = 14; y < z; y++) {
                     
                     if (temp_last_result[y] == null)
                         temp_last_result[y] = 0;
                     
                     temp_last_result[y] += Math.floor(resultat['fadilicorp'][numJour][y][3]);
                     
                 }
             }
            
            lastResult[i] = temp_last_result;
        }
  
        resultatFinal = lastResult;
        //Mets en place les résultats
        afficherLignesTab();
	}
}

function afficherLignesTab() {
    
    var lignes = new Array(); 
    lignes[0] = document.getElementById('m_1');
    lignes[1] = document.getElementById('m_2');
    lignes[2] = document.getElementById('m_3');
    lignes[3] = document.getElementById('m_4');
    
    var decalage = 0;
    for (var i = 0; i < 4; i++) {
        
        lignes[0].getElementsByTagName('td')[i].innerHTML = resultatFinal[position][i + decalage];
        lignes[1].getElementsByTagName('td')[i].innerHTML = resultatFinal[position][i + 1 + decalage];
        
        if (i == 0) {
            
            lignes[2].getElementsByTagName('td')[i].innerHTML = '-';
            lignes[3].getElementsByTagName('td')[i].innerHTML = '-';
        } else {
            
            lignes[2].getElementsByTagName('td')[i].innerHTML = resultatFinal[position][i + 2 + decalage];
            lignes[3].getElementsByTagName('td')[i].innerHTML = resultatFinal[position][i + 3 + decalage];
        }
    
        decalage += 1;
    }
  
}

function c_suiv(source) {
    if (position != 11) {
        if (position == 10) {
            source.style.opacity = 0.3;
        } 
        
        position++;
        afficherLignesTab();
        document.getElementById('titre_periodes').innerHTML = '<strong>' + mois_car[position] + '</strong>';
        document.getElementById('c_prec_button').style.opacity = 1;
    }
}

function c_prec(source) {
    
    if (position != 0) {
        if (position == 1) {
            source.style.opacity = 0.3;
        } 
        
        position--;
        afficherLignesTab();
        document.getElementById('titre_periodes').innerHTML = '<strong>' + mois_car[position] + '</strong>';
        document.getElementById('c_suiv_button').style.opacity = 1;
    }
}