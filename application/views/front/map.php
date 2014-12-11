<div id="map" class="gt-home-map"></div>

<div class="container">
	<div class="row">
		<div class="jumbotron">
			<h1>Địa chỉ số EBZ</h1>
			<p>Tạo địa chỉ của bạn ngay hôm nay hoàn toàn miễn phí.</p>
			<p><a class="btn btn-primary btn-lg" href="<?php echo base_url('location') ?>" role="button">Tạo ngay</a></p>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<h2>Địa điểm mới</h2>
		<?php foreach ($categories as $key => $category): ?>
			<div class="list-group col-sm-6">
				<p class="list-group-item active">
					<?php echo $category['ctg_name'] ?>
				</p>
				<?php $i = 0; ?>
				<?php foreach ($locations as $key => $location): ?>
					<?php if ($location['loc_category_id'] == $category['ctg_id'] && $i <5): ?>
						<a href="<?php echo base_url('location/view_location/'.$location['loc_id']) ?>" class="list-group-item"><?php echo $location['loc_name'] ?></a>
						<?php $i++; ?>
					<?php endif ?>
				<?php endforeach ?>
			</div>
		<?php endforeach ?>
	</div>
</div>

<script src="//maps.googleapis.com/maps/api/js"></script>
<script>
	(function( $ ) {

		function escapeHtml(text) {
			var map = {
				'&': '&amp;',
				'<': '&lt;',
				'>': '&gt;',
				'"': '&quot;',
				"'": '&#039;'
			};
			return text.replace(/[&<>"']/g, function(m) { return map[m]; });
		}

		function ajaxGetData(url, handleData) {
			$.ajax({
				type: "GET",
				url: url,
				dataType: "json",
				success: function(response){
					handleData(response);
				}
			});
		}

		var theme = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]}];

		function initialize() {
			var map_canvas = document.getElementById('map');
			var myLatlng = new google.maps.LatLng(21.027424, 105.832716);
			var map_options = {
				center: myLatlng,
				zoom: 15,
				mapTypeId: 'roadmap',
				disableDefaultUI: false,
				scrollwheel: false,
				styles: theme
			}

			var map = new google.maps.Map(map_canvas, map_options);
			
			ajaxGetData("<?php echo base_url('location/ajax_get_location/all') ?>", function(locations) {
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
							var infoContent =
							"<h2 style='font-size: 24px'>"+escapeHtml(locations[i]['loc_name'])+"</h2>"+
							"<address style='font-weight: 700'>"+escapeHtml(locations[i]['loc_address'])+"</address>"+
							"<p>"+escapeHtml(locations[i]['loc_brief'])+"</p>"+
							"<a href=<?php echo base_url('location/view_location') ?>/"+locations[i]['loc_id']+" class='btn btn-info pull-right' style='margin-bottom: 15px'>Chi tiết</a>";
							infowindow.setContent(infoContent);
							infowindow.open(map, marker);
						}
					})(marker, i));
				}
			});
		}
		google.maps.event.addDomListener(window, 'load', initialize);

		$(document).on('ready', function() {
		})

		$(window).on('resize', function() {
		})
	})( jQuery ); // EOF
</script>