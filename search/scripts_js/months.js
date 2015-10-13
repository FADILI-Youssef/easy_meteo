var mois = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
    
function onDebut() {

    var index = document.getElementById('mois_debut').selectedIndex;
    var moisFin = mois.slice(index - 1);
    
    var moisOptions = '<option></option>';
    for (var i = 0, l = moisFin.length; i < l; i++)
        moisOptions += '<option>' + moisFin[i] + '</option>';
    
    document.getElementById('mois_fin').innerHTML = moisOptions;
}

