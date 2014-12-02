<div class="container">
	<h1>Map</h1>
	<div id="map"></div>
</div>


<script src="//maps.googleapis.com/maps/api/js"></script>
<script>
	var theme = [
		{
			featureType: "all",
			stylers: [
				{ saturation: -80 }
			]
		},{
			featureType: "road.arterial",
			elementType: "geometry",
			stylers: [
				{ hue: "#00ffee" },
				{ saturation: 50 }
			]
		},{
			featureType: "poi.business",
			elementType: "labels",
			stylers: [
				{ visibility: "off" }
			]
		}
	]
	function initialize() {
		var map_canvas = document.getElementById('map');
		var myLatlng = new google.maps.LatLng(1.28444,103.843376);
		var map_options = {
			center: myLatlng,
			zoom: 15,
			mapTypeId: 'roadmap',
			disableDefaultUI: false,
			scrollwheel: true,
			styles: theme
		}
		var map = new google.maps.Map(map_canvas, map_options);
		var mapMarker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			title: 'marker'
		});
	}
	google.maps.event.addDomListener(window, 'load', initialize);
</script>