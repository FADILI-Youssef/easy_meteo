function linkAjax_res() {

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
            
            var villeInput = document.getElementById('ville');
            var villeName = villeInput.value;
            
            //Prépare les arguments
            var args = 'typeeol=' + nomTypeEolienne;
                    args += '&diameol=' + nomDiametreEolienne;
                    args += '&moisdeb=' + nomMoisDebut;
                    args += '&moisfin=' + nomMoisFin;
                    args += '&periode=' + nomPeriode;
                    args += '&svmv=' + nomSeuilVitesseVent;
                    args += '&st=' + nomSeuilTemperature;
                    args += '&sdi=' + nomSeuilDureeInsolation;
                    args += '&station=' + villeName;
            
            
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
        
        alert(resultat['fadilicorp']);
            
            
	}
}