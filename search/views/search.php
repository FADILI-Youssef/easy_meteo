 <section id="formulaire_recherche">
    <!-- Titre -->
    <h2>RECHERCHE</h2> 
     
     <!-- Formulaire de recherche -->
    <form methode="POST" action="">
        <!-- Ville -->
        <label for="ville">Ville : </label>
        <input type="text" id="ville" />

        <!-- Type éolienne -->
        <label for="type_eolienne">Type éolienne : </label>
        <select id="type_eolienne"></select>

        <!-- Diamètre éolienne -->
        <label for="diametre_eolienne">Diamètre éolienne : </label>
        <select id="diametre_eolienne"></select>

        <!-- Mois de début -->
        <label for="mois_debut">Mois de début : </label>
        <select id="mois_debut"></select>

        <!-- Mois de fin -->
        <label for="mois_fin">Mois de fin : </label>
        <select id="mois_fin"></select>

        <!-- Période -->
        <label for="periode">Période : </label>
        <select id="periode"></select>

        <!-- Seuil vitesse moyenne du vent -->
        <label for="seuil_vitesse_moyenne_vent">Seuil vitesse moyenne du vent : </label>
        <input type="number" id="seuil_vitesse_moyenne_vent" min="0" max="250"/>

        <!-- Seuil température -->
        <label for="seuil_temperature">Seuil de température : </label>
        <input type="number" id="seuil_temperature" min="-30" max="50" />

        <!-- Seuil durée d'insolation -->
        <label for="seuil_duree_insolation">Seuil durée d'insolation : </label>
        <input type="number" id="seuil_duree_insolation" min="0" max="24" />

        <!-- Bouton rechercher -->
        <input type="submit" value="Rechercher" />
     </form>
</section>