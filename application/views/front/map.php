<div id="map" style="height: 550px"></div>
<script src="//maps.googleapis.com/maps/api/js"></script>

<script>
	(function( $ ) {
		var theme = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]}];

		function initialize() {
			var map_canvas = document.getElementById('map');
			var myLatlng = new google.maps.LatLng(21.027424, 105.832716);
			var map_options = {
				center: myLatlng,
				zoom: 14,
				mapTypeId: 'roadmap',
				disableDefaultUI: false,
				scrollwheel: true,
				styles: theme
			}
			var map = new google.maps.Map(map_canvas, map_options);
			
			getAllLocations(function(response) {
				// Convert response string to json object
				var locations = $.parseJSON(response);
				// Fetch all results
				for (var i = 0; i < locations.length; i++) {
					// Convert coordination string to array
					var cor = locations[i]['loc_coordination'].split(',');
					// Print all marker to the map
					var marker = new google.maps.Marker({
						map: map,
						position: new google.maps.LatLng(cor[0],cor[1]),
						icon: locations[i]['loc_icon'],
						title: locations[i]['loc_name']
					});
					var infowindow = new google.maps.InfoWindow();
					google.maps.event.addListener(marker, 'click', (function(marker, i) {
						return function() {
							infowindow.setContent(locations[i]['loc_brief']);
							infowindow.open(map, marker);
						}
					})(marker, i));
				}
			});
		}

		google.maps.event.addDomListener(window, 'load', initialize);

		function getAllLocations(handleData) {
			$.ajax({
				type: "GET",
				url: "http://www/ebz/location/ajax_get_location/all",
				dataType: "html",
				success: function(response){
					handleData(response);
				}
			});
		}
	})( jQuery ); // EOF
</script>