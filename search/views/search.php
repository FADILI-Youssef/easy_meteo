 <section id="formulaire_recherche">
    <!-- Titre -->
    <h2>RECHERCHE</h2> 
     
     <!-- Formulaire de recherche -->
         <table border="0">
            <!-- Ville -->
            <tr>
                
                <!-- Type éolienne -->
            
                <td><label for="type_eolienne">Type éolienne</label><select id="type_eolienne"><option></option><option>Premier test</option><option>Second test</option></select></td>
                
                <td><label for="mois_debut">Mois de début</label><select id="mois_debut"><option></option><option>Premier test</option><option>Second test</option></select></td>
                

           
                
                <td><label for="seuil_vitesse_moyenne_vent">Seuil vitesse du vent</label><input type="number" id="seuil_vitesse_moyenne_vent" min="0" max="250"/></td>
                 </tr>

            <!-- Mois de début -->
            <tr>
                
                <td><label for="diametre_eolienne">Diamètre éolienne</label><select id="diametre_eolienne"><option></option><option>Premier test</option><option>Second test</option></select></td>

            <!-- Mois de fin -->
            
                <td><label for="mois_fin">Mois de fin</label><select id="mois_fin"><option></option><option>Premier test</option><option>Second test</option></select></td>
            
                <!-- Seuil température -->
           
                <td><label for="seuil_temperature">Seuil de température</label><input type="number" id="seuil_temperature" min="-30" max="50" /></td>
            
                </tr>

            <tr>
                
                 <!-- Diamètre éolienne -->
               <td><label for="ville">Ville/code postal</label><input type="text" id="ville" /></td>
                 

                <!-- Période -->
            
                <td><label for="periode">Période</label><select id="periode"><option></option><option>Premier test</option><option>Second test</option></select></td>
                
            
                

            <!-- Seuil durée d'insolation -->
            
                <td><label for="seuil_duree_insolation">Seuil durée d'insolation</label><input type="number" id="seuil_duree_insolation" min="0" max="24" /></td>
                </tr>

             <tr><td colspan="3"><input id="submit_to_periodic_display" type="submit" value="Rechercher" /></td></tr>
         </table>
            <!-- Bouton rechercher -->
            
                
     
</section>