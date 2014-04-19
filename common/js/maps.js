$(function() {
	
	google.setOnLoadCallback(initialize);

      var markerClusterer = null;
      var map = null;
      var imageUrl = 'http://chart.apis.google.com/chart?cht=mm&chs=24x32&' +
          'chco=FFFFFF,008CFF,000000&ext=.png';
	
	/**********************************************
	 * carte Google Maps
	 **********************************************/

	function initialize(){
		var myLatLng = new google.maps.LatLng(46.763056, 7.5);
		var mapOptions={
			zoom: 6, // 0 à 21
			center: myLatLng, // centre de la carte
			mapTypeId: google.maps.MapTypeId.ROADMAP // ROADMAP, SATELLITE, HYBRID, TERRAIN
		},
		
		map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
		
		setMarkers(map,marker); // ajoute les points 1 à 1
	}
	
	function setMarkers(map,locations){
		for(var i=0; i<locations.length; i++){
			var station = locations[i];
			var myLatLng = new google.maps.LatLng(station[0],station[1]);
			var infoWindow = new google.maps.InfoWindow();
			var marker = new google.maps.Marker ({
				position: myLatLng,
				map: map,
				title: station[2]
			});
			
			(function(i){
				google.maps.event.addListener(marker, "click", function(){
					var station = locations[i];
					infoWindow.close();
					infoWindow.setContent(
						"<div id='infoWindow'><p>"
							+station[1]+"</p><p>"+station[2]+"</p><p>"+station[3]+"</p><p>"+station[4]+"</p><p>"+station[5]+"</p><p>"+station[6]+"</p><p>"+station[0]
						+"</p></div>"
					);
					infoWindow.open(map, this);
				});
			})(i);
		}
	}
	google.maps.event.addDomListener(window, 'load', initialize);
});