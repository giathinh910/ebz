<div class="container">
	<div style="text-align: center">
		<h2 class="gt-heading">Kết quả tìm kiếm</h2>
	</div>
	<?php foreach ($results as $key => $result): ?>
		<div>
			<h3><?php echo $result['loc_name'] ?></h3>
			<p><?php echo $result['loc_address'] ?></p>
			<a href="<?php echo base_url('location/view_location/'.$result['loc_id']) ?>" class="btn btn-success">Xem chi tiết</a>
		</div>
	<?php endforeach ?>
</div>