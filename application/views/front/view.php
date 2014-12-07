<?php
	function fieldCheck($field) {
		return ($field == '') ? 'Không có' : $field ;
	}
?>
<div class="container">
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url() ?>">Trang chủ</a></li>
		<li><a href="<?php echo base_url('location') ?>">Địa điểm</a></li>
		<li class="active">
			<?php echo $location[0]['loc_name']; ?>
		</li>
	</ol>
	<div class="row">
		<div class="gt-contact-info col-xs-12 col-sm-3">
			<div class="panel panel-primary">
				<!-- <div class="panel-heading" style="padding: 7px 15px">
					<h3 style="font-size: 18px; margin: 10px 0">Thông tin liên hệ</h3>
				</div> -->
				<div class="list-group">
					<div href="#" class="list-group-item">
						<h4 class="list-group-item-heading">Tên</h4>
						<p class="list-group-item-text"><?php echo $location[0]['loc_name'] ?></p>
					</div>
					<div href="#" class="list-group-item">
						<h4 class="list-group-item-heading">Phân loại</h4>
						<p class="list-group-item-text"><?php echo fieldCheck($location[0]['loc_category']) ?></p>
					</div>
					<div href="#" class="list-group-item">
						<h4 class="list-group-item-heading">Địa chỉ</h4>
						<p class="list-group-item-text"><?php echo $location[0]['loc_address'] ?></p>
					</div>
					<div href="#" class="list-group-item">
						<h4 class="list-group-item-heading">Tỉnh thành</h4>
						<p class="list-group-item-text"><?php echo $location[0]['prv_name'] ?></p>
					</div>
					<div href="#" class="list-group-item">
						<h4 class="list-group-item-heading">Điện thoại</h4>
						<p class="list-group-item-text"><?php echo fieldCheck($location[0]['loc_phone']) ?></p>
					</div>
					<div href="#" class="list-group-item">
						<h4 class="list-group-item-heading">Email</h4>
						<?php if ($location[0]['loc_email'] != ''): ?>
							<a class="list-group-item-text" href="<?php echo $location[0]['loc_email'] ?>"><?php  ?></a>
						<?php else: ?>
							<p class="list-group-item-text">Không có</p>
						<?php endif ?>
					</div>
				</div>
			</div>
			<div class="btn-group btn-group-md" role="group" aria-label="Thao tác">
				<a href="<?php echo base_url('location/edit_location/'.$location[0]['loc_id']) ?>" class="btn btn-default">Sửa</a>
				<a onclick="return confirm('Địa điểm bị xóa không thể được phục hồi. Bạn chắc chắn muốn xóa?');" href="<?php echo base_url('location/delete_location/'.$location[0]['loc_id']) ?>" class="btn btn-danger">Xóa</a>
			</div>
		</div>
		<!-- /.contact-info -->
		<div class="gt-catalog col-xs-12 col-sm-9">
			<?php echo $location[0]['loc_detail'] ?>
		</div>
		<!-- /.catalog -->
	</div>
</div>