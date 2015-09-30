 <section id="formulaire_recherche">
    <!-- Titre -->
    <h2>RECHERCHE</h2> 
     
     <!-- Formulaire de recherche -->
            <!-- Ville -->
            <span>
                <label for="ville">Ville</label><input type="text" id="ville" />
            

            <!-- Type éolienne -->
            <span>
                <label for="type_eolienne">Type éolienne</label><select id="type_eolienne"><option></option><option>Premier test</option><option>Second test</option></select>
            </span>

            <!-- Diamètre éolienne -->
             <span>   
                <label for="diametre_eolienne">Diamètre éolienne</label><select id="diametre_eolienne"><option></option><option>Premier test</option><option>Second test</option></select>
             </span>

            <!-- Mois de début -->
            <span>
                <label for="mois_debut">Mois de début</label><select id="mois_debut"><option></option><option>Premier test</option><option>Second test</option></select>
            </span>

            <!-- Mois de fin -->
            <span>
                <label for="mois_fin">Mois de fin</label><select id="mois_fin"><option></option><option>Premier test</option><option>Second test</option></select>
            </span>

            <!-- Période -->
            <span>
                <label for="periode">Période</label><select id="periode"><option></option><option>Premier test</option><option>Second test</option></select>
            </span>

            <!-- Seuil vitesse moyenne du vent -->
            <span>
                <label for="seuil_vitesse_moyenne_vent">Seuil vitesse moyenne du vent</label><input type="number" id="seuil_vitesse_moyenne_vent" min="0" max="250"/>
            </span>

            <!-- Seuil température -->
            <span>
                <label for="seuil_temperature">Seuil de température</label><input type="number" id="seuil_temperature" min="-30" max="50" />
            </span>

            <!-- Seuil durée d'insolation -->
            <span>
                <label for="seuil_duree_insolation">Seuil durée d'insolation</label><input type="number" id="seuil_duree_insolation" min="0" max="24" />
            </span>

            <!-- Bouton rechercher -->
            
                <input id="submit_to_periodic_display" type="submit" value="Rechercher" />
     
</section>