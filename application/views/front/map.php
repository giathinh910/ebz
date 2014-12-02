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
	];
	<?php 
		$places = array(
			array (
				"placeName" => "Quốc tử giám",
				"coordination" => "new google.maps.LatLng(21.027424, 105.832716)",
				"icon" => "http://localhost/resource/icon/200_flat_icons/png/64px/16.png",
			),
			array (
				"placeName" => "Bệnh viện 108",
				 "coordination" => "new google.maps.LatLng(21.018904, 105.859667)",
				 "icon" => "http://localhost/resource/icon/200_flat_icons/png/64px/20.png",
			),
			array (
				"placeName" => "Bệnh viện nhi trung ương",
				 "coordination" => "new google.maps.LatLng(21.024673, 105.808683)",
				 "icon" => "http://localhost/resource/icon/200_flat_icons/png/64px/32.png",
			)
		)
	 ?>
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
		<?php
			foreach ($places as $key => $place) {
		?>
		var mapMarker = new google.maps.Marker({
			position: <?php echo $place['coordination'] ?>,
			map: map,
			icon: <?php echo '"'.$place['icon'].'"' ?>,
			title: <?php echo '"'.$place['placeName'].'"' ?>
		});
		<?php
			}
		?>
	}
	google.maps.event.addDomListener(window, 'load', initialize);
</script>