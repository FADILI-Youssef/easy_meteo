<table border="0">
            <!-- Ville -->
            <tr>
                <td><label for="ville">Ville</label></td><td><input type="text" id="ville" /></td>
                

            <!-- Type éolienne -->
            
                <td><label for="type_eolienne">Type éolienne</label></td><td><select id="type_eolienne"><option></option><option>Premier test</option><option>Second test</option></select></td>
                

            <!-- Diamètre éolienne -->
               
                 <td><label for="diametre_eolienne">Diamètre éolienne</label></td><td><select id="diametre_eolienne"><option></option><option>Premier test</option><option>Second test</option></select></td>
                 </tr>

            <!-- Mois de début -->
            <tr>
                <td><label for="mois_debut">Mois de début</label></td><td><select id="mois_debut"><option></option><option>Premier test</option><option>Second test</option></select></td>
                

            <!-- Mois de fin -->
            
                <td><label for="mois_fin">Mois de fin</label></td><td><select id="mois_fin"><option></option><option>Premier test</option><option>Second test</option></select></td>
            
                
            <!-- Période -->
            
                <td><label for="periode">Période</label></td><td><select id="periode"><option></option><option>Premier test</option><option>Second test</option></select></td>
                </tr>

            <!-- Seuil vitesse moyenne du vent -->
            <tr>
                <td><label for="seuil_vitesse_moyenne_vent">Seuil vitesse moyenne du vent</label></td><td><input type="number" id="seuil_vitesse_moyenne_vent" min="0" max="250"/></td>
                

            <!-- Seuil température -->
           
                <td><label for="seuil_temperature">Seuil de température</label></td><td><input type="number" id="seuil_temperature" min="-30" max="50" /></td>
                

            <!-- Seuil durée d'insolation -->
            
                <td><label for="seuil_duree_insolation">Seuil durée d'insolation</label></td><td><input type="number" id="seuil_duree_insolation" min="0" max="24" /></td>
                </tr>

             <tr><td colspan="2"><input id="submit_to_periodic_display" type="submit" value="Rechercher" /></td></tr>
         </table>