function linkAjax_station() {

    xhrArray[2] = getXmlHttpRequest();
    
    if ((xhrArray[2] != null) && (xhrArray[2] != false)) {
		if (xhrArray[2].readyState == 0 || xhrArray[2].readyState == 4) {
            
            //Prépare les données récupérées  
            var villeInput = document.getElementById('ville');
            var villeName = villeInput.value;
      
			xhrArray[2].open('GET', 'search/ajax/ajax_station.php?ville=' + villeName, true);
			xhrArray[2].onreadystatechange = affichageSuggestions_station;
			xhrArray[2].send(null);
            
		} else setTimeout('link_ajax_centrale()', 500);
        
	} else if (xhrArray[2] == null) alert('Erreur ajax');
}

function affichageSuggestions_station() {
    //window.location.href = 'search/ajax/ajax.php?ville=mar';
    if ((xhrArray[2].readyState == 4) && (xhrArray[2].status == 200)) {
        var resultat = JSON.parse(xhrArray[2].responseText);
        
        var longitude = resultat['longitude'];
        var latitude = resultat['latitude'];
        
        defCoord_mp(latitude, longitude);
	}
}