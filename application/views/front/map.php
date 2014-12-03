<div class="container">
	<button href="#getlocation" id="get-locations" class="btn btn-success">Get location</button>
</div>

<div id="map" style="height: 550px"></div>

<script src="//maps.googleapis.com/maps/api/js"></script>
<script>
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
		<?php
			foreach ($places as $key => $place) {
		?>
		var marker<?php echo $place['loc_id'] ?> = new google.maps.Marker({
			position: <?php echo 'new google.maps.LatLng('.$place['loc_coordination'].')' ?>,
			map: map,
			icon: <?php echo '"'.$place['loc_icon'].'"' ?>,
			title: <?php echo '"'.$place['loc_name'].'"' ?>
		});
		<?php
			}
		?>
	}
	google.maps.event.addDomListener(window, 'load', initialize);

	$("#get-locations").on('click', function() {                
		$.ajax({
			type: "GET",
			url: "http://www/ebz/location/getLocations",
			dataType: "html",
			success: function(response){
				console.log(response);
			}
		});
	});
</script>