<div class="container">
	<form role="form" method="post" action="<?php echo base_url('location/add_location_exec') ?>">
		<div class="form-group">
			<label for="">Tên địa điểm</label>
			<input type="text" class="form-control" id="" placeholder="" name="placeName">
		</div>
		<div class="form-group">
			<label for="">Tọa độ</label>
			<input type="text" class="form-control" id="" placeholder="" name="coordination">
		</div>
		<div class="form-group">
			<label for="">Hình đại diện</label>
			<input type="text" class="form-control" id="" placeholder="" name="icon" value="http://localhost/resource/icon/200_flat_icons/png/64px/1.png">
		</div>
		<button type="submit" class="btn btn-success">Tạo</button>
	</form>
</div>