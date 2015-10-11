 <section id="formulaire_recherche">
        
     <table class="wrapper" border="0">
         
         <tr>
        <td><fieldset>
            <legend>éolienne</legend>
            
                <div>
                    <label for="type_eolienne">Type éolienne</label>
                    <select id="type_eolienne"><option></option><option>Premier test</option><option>Second test</option></select>
                </div>
            
                <div>
                    <label for="diametre_eolienne">Diamètre éolienne</label>
                    <select id="diametre_eolienne"><option></option><option>Premier test</option><option>Second test</option></select>
                </div>
        </fieldset></td>
                

        <td><fieldset>
            <legend>période</legend>

                <div>
                    <label for="mois_debut">Mois de début</label>
                    <select id="mois_debut"><option></option><option>Premier test</option><option>Second test</option></select>
                </div>

                <div>
                    <label for="mois_fin">Mois de fin</label>
                    <select id="mois_fin"><option></option><option>Premier test</option><option>Second test</option></select>
                </div>

                <div>
                    <label for="periode">Période</label>
                    <select id="periode"><option></option><option>Premier test</option><option>Second test</option></select>
                </div>

            </fieldset></td>
                        
        <td><fieldset>
            <legend>seuils</legend>
            
                <div>
                    <label for="seuil_vitesse_moyenne_vent">Seuil vitesse du vent</label>
                    <input type="number" id="seuil_vitesse_moyenne_vent" min="0" max="250"/>
                </div>
            
                <div>
                    <label for="seuil_temperature">Seuil de température</label>
                    <input type="number" id="seuil_temperature" min="-30" max="50" />
                </div>
            
                <div>
                    <label for="seuil_duree_insolation">Seuil durée d'insolation</label>
                    <input type="number" id="seuil_duree_insolation" min="0" max="24" />
                </div>
            </fieldset></td> 
             
         </tr>
         <tr>  
         
        <td id="ville_td"><fieldset>
            <legend>ville</legend>
            
                <div>
                    <label for="ville">Ville/code postal</label>
                    <input type="text" id="ville" onkeyup="linkAjax();" />
                </div>
            </fieldset></td>
                

             <td id="submit_search_td" colspan="2"><input id="submit_to_periodic_display" type="submit" value="Rechercher" onclick="setBeingVisited_s()" /></td>
             
         </tr>
         
     </table>
            
                
     
</section>