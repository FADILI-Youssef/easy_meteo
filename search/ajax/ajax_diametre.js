function linkAjax_diametre() {

    xhrArray[3] = getXmlHttpRequest();
    
    if ((xhrArray[3] != null) && (xhrArray[3] != false)) {
		if (xhrArray[3].readyState == 0 || xhrArray[3].readyState == 4) {
            
            //Prépare les données récupérées  
            var idStation = document.getElementById('type_eolienne').value;
           
			xhrArray[3].open('GET', 'search/ajax/ajax_diametre.php?idte=' + idStation, true);
			xhrArray[3].onreadystatechange = affichageSuggestions_diametre;
			xhrArray[3].send(null);
            
		} else setTimeout('linkAjax_diametre()', 500);
        
	} else if (xhrArray[3] == null) alert('Erreur ajax');
}

function affichageSuggestions_diametre() {
    //window.location.href = 'search/ajax/ajax_diametre.php?idte=1';
    if ((xhrArray[3].readyState == 4) && (xhrArray[3].status == 200)) {
    
        var resultat = JSON.parse(xhrArray[3].responseText);
        document.getElementById('diametre_eolienne').min = resultat['diametre_min'];
        document.getElementById('diametre_eolienne').max = resultat['diametre_max'];
	}
}