function linkAjax() {

    xhrArray[0] = getXmlHttpRequest();
    
    if ((xhrArray[0] != null) && (xhrArray[0] != false)) {
		if (xhrArray[0].readyState == 0 || xhrArray[0].readyState == 4) {
            var villeInput = document.getElementById('ville');
            var villeName = villeInput.value;
			xhrArray[0].open('GET', 'search/ajax/ajax.php?ville=' + villeName, true);
			xhrArray[0].onreadystatechange = affichageSuggestions;
			xhrArray[0].send(null);
            
		} else setTimeout('link_ajax_centrale()', 500);
        
	} else if (xhrArray[0] == null) alert('Erreur ajax');
}

function affichageSuggestions() {
    //window.location.href = 'search/ajax/ajax.php?ville=mar';
    if ((xhrArray[0].readyState == 4) && (xhrArray[0].status == 200)) {
        var resultat = JSON.parse(xhrArray[0].responseText);
        
        var liste = new Array();
        for (var i = 0, l = resultat.length; i < l; i++) {
                liste[i] = resultat[i][1];
        }
        
      
    $( "#ville" ).autocomplete({
      source: liste
    });
	}
}