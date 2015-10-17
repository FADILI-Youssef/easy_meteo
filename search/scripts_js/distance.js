var lat = null; var lng = null;
			var station = new Array();
			var stationProche =  null;   

            function initialiser_mp() {
            
                var latlng = new google.maps.LatLng(46.5, 2.5);
                var options = {
                    center: latlng,
                    zoom: 6,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };

                var carte = new google.maps.Map(document.getElementById("carte"), options);
					
				var StationParis = new google.maps.Marker({
							position: new google.maps.LatLng(48.7219, 2.3524),
							animation: google.maps.Animation.DROP,
							title:"paris-orly",
							map: carte
							});
							
				var StationMarseille = new google.maps.Marker({
							position: new google.maps.LatLng(43.4381, 5.2161),
							animation: google.maps.Animation.DROP,
							title:"marseille",
							map: carte
							});
							
				var StationBordeaux = new google.maps.Marker({
							position: new google.maps.LatLng(44.8332, -0.7193),
							animation: google.maps.Animation.DROP,
							title:"bordeaux-merignac",
							map: carte
							});			
				
				if (lat != null && lng!= null){
					station.push(StationParis);
					station.push(StationMarseille);
					station.push(StationBordeaux);
					for (var i=0; i<station.length; i++){
						var lat2 = station[i].getPosition().lat();
						var lng2 = station[i].getPosition().lng();
						if (stationProche == null){
							stationProche = station[i];
						}
						else{
							if (convertDistance_mp(lat, lat2, lng, lng2) < 
								convertDistance_mp(lat, stationProche.getPosition().lat(), lng, stationProche.getPosition().lng())){
								stationProche = station[i];
							}
						}
					}
					var ville = new google.maps.Marker({
							position: new google.maps.LatLng(lat, lng),
							animation: google.maps.Animation.DROP,
							title:"Ville",
							map: carte
							});	
					//alert("La plus proche: "+stationProche.getTitle());
                    document.getElementById('station_plus_proche').innerHTML = stationProche.getTitle();
                    linkAjax_res(stationProche.getTitle());
				}
            }
			
			function defCoord_mp(add1, add2){

				var coord = new Object();
				lat = add1;
				lng = add2;
				coord.latitude = lat;
				coord.longitude = lng;
				initialiser_mp();
			}
			
			function convertDistance_mp(lat1, lat2, lon1, lon2){
				var R = 6371;
				var x1 = lat1 * Math.PI / 180;
				var x2 = lat2 * Math.PI / 180;
				var y1 = (lat2-lat1) * Math.PI / 180;
				var y2 = (lon2-lon1) * Math.PI / 180;

				var a = Math.sin(y1/2) * Math.sin(y1/2) +
						Math.cos(x1) * Math.cos(x2) *
						Math.sin(y2/2) * Math.sin(y2/2);
				var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));

				var d = R * c;
				return d;
			}