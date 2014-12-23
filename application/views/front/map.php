<div class="gt-map-wrapper">
	<div class="overlay">
		<img src="<?php echo base_url('assets/ebz/images/loader.gif') ?>" alt="">
	</div>
	<div id="map" class="gt-home-map"></div>
</div>

<?php if ($this->session->userdata('current_user_id') == null): ?>
	<div class="container">
		<div class="pricing">
			<ul>
				<li class="unit price-success">
					<div class="price-title">
						<h3>Đăng ký</h3>
						<p>Không giới hạn tài khoản trên một người</p>
					</div>
				</li>
				<li class="unit price-primary active">
					<div class="price-title">
						<h3>Miễn phí</h3>
						<p>và sẽ luôn như vậy</p>
					</div>
					<div class="price-foot">
						<a href="<?php echo base_url('location/user/sign_up'); ?>" class="btn btn-primary">Tạo tài khoản ngay</a>
					</div>
				</li>
				<li class="unit price-warning">
					<div class="price-title">
						<h3>Tạo địa điểm</h3>
						<p>Không giới hạn số lượng</p>
					</div>
				</li>
			</ul>
		</div>
	</div>
<?php else: ?>
	<div class="container" style="text-align: center">
		<h2 class="gt-heading">Địa điểm mới nhất</h2>
	</div>
<?php endif ?>

<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="timeline">
				<dl>
					<?php
						$count = 0;
						$class = '';
					?>
					<?php foreach ($locations as $key => $location): ?>
						<?php $count ++; ?>
						<?php
							if ($count % 2 != 0):
								$class='pos-left';
							else:
								$class='pos-right';
							endif
						?>
						<?php if ($count <= 10): ?>
							<dd class="<?php echo $class ?> clearfix">
								<div class="circ"></div>
								<div class="time"><?php echo $location['usr_display_name'] ?></div>
								<div class="events">
									<div class="pull-left"><img class="events-object img-rounded" src="<?php echo $location['loc_icon']; ?>"></div>
									<div class="events-body">
										<h4 class="events-heading"><?php echo $location['loc_name']; ?></h4>
										<p><?php echo $location['loc_brief'] ?></p>
										<a href="<?php echo base_url('location/view_location/'.$location['loc_id']) ?>" class="btn btn-primary">Chi tiết</a>
										<br>
										<br>
									</div>
								</div>
							</dd>
						<?php endif ?>
					<?php endforeach ?>
			</div>
		</div>
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
			}).done(function() {
				$( '.gt-map-wrapper .overlay' ).fadeOut( 200, function(){
					$(this).remove();
				});
			});
		}

		var theme = [{"featureType":"water","stylers":[{"visibility":"on"},{"color":"#b5cbe4"}]},{"featureType":"landscape","stylers":[{"color":"#efefef"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#83a5b0"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#bdcdd3"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#e3eed3"}]},{"featureType":"administrative","stylers":[{"visibility":"on"},{"lightness":33}]},{"featureType":"road"},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":20}]},{},{"featureType":"road","stylers":[{"lightness":20}]}];

		function initialize() {
			var map_canvas = document.getElementById('map');
			<?php
				if (isset($users)) {
					echo 'var myLatlng = new google.maps.LatLng('.$users[0]['prv_coordination'].');';
				} else {
					echo 'var myLatlng = new google.maps.LatLng(21.027424, 105.832716);';
				}
			?>
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