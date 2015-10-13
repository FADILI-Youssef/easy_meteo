 <section id="formulaire_recherche">
    
     <table class="wrapper" border="0">
         
         <tr>
        <td><fieldset>
            <legend>éolienne</legend>
            
                <div>
                    <label for="type_eolienne">Type éolienne</label>
                    <select id="type_eolienne"><?php echo $optionsTypes; ?></select>
                </div>
            
                <div>
                    <label for="diametre_eolienne">Diamètre éolienne</label>
                    <input type="range" id="diametre_eolienne" />
                </div>
        </fieldset></td>
                

        <td><fieldset>
            <legend>période</legend>

                <div>
                    <label for="mois_debut">Mois de début</label>
                    <select id="mois_debut" onchange="onDebut()"><?php echo $mois; ?></select>
                </div>

                <div>
                    <label for="mois_fin">Mois de fin</label>
                    <select id="mois_fin"><?php echo $mois; ?></select>
                </div>

                <div>
                    <label for="periode">Période</label>
                    <input type="number" id="periode" min="1" max="5" />
                </div>

            </fieldset></td>
                        
        <td><fieldset>
            <legend>seuils</legend>
            
                <div>
                    <label for="seuil_vitesse_moyenne_vent">Seuil vitesse du vent</label>
                    <input type="range" id="seuil_vitesse_moyenne_vent" min="0" max="250" step="1" />
                </div>
            
                <div>
                    <label for="seuil_temperature">Seuil de température</label>
                    <input type="range" id="seuil_temperature" min="-30" max="50" step="1" />
                </div>
            
                <div>
                    <label for="seuil_duree_insolation">Seuil durée d'insolation</label>
                    <input type="range" id="seuil_duree_insolation" min="0" max="24" step="1" />
                </div>
            </fieldset></td> 
             
         </tr>
         <tr>  
         
        <td id="ville_td"><fieldset>
            <legend>ville</legend>
            
                <div>
                    <label for="ville">Ville/code postal</label>
                    <input type="text" id="ville" onkeyup="linkAjax();" />
                    <input type="hidden" id="station" />
                </div>
            </fieldset></td>
                

             <td id="submit_search_td" colspan="2"><input id="submit_to_periodic_display" type="submit" value="Rechercher" onclick="setBeingVisited_s(); linkAjax_res();" /></td>
             
         </tr>
         
     </table>
                
     
</section>