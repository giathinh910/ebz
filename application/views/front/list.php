<div class="container">
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url() ?>">Trang chủ</a></li>
		<li><a href="<?php echo base_url('location') ?>">Địa điểm của bạn</a></li>
	</ol>
	<div class="page-header">
	 	<h1>Địa điểm của bạn <small>Quản lý địa điểm</small></h1>
	</div>
</div>


<?php
	if (!empty($successMessage)) {
?>
	<div class="container">
		<div class="alert alert-warning alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<i class="fa fa-info-circle"></i>	<?php echo $successMessage ?>
		</div>
	</div>
<?php
	}
?>

<div class="container">


	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>Tên</th>
					<th>Địa chỉ</th>
					<th>Tỉnh</th>
					<th>Ảnh đại diện</th>
					<th>Thao tác</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($locations as $key => $location): ?>
					<tr>
						<th><?php echo $location['loc_name'] ?></th>
						<th><?php echo $location['loc_address'] ?></th>
						<th><?php echo $location['prv_name'] ?></th>
						<th><?php echo $location['loc_avatar'] ?></th>
						<th>
							<a href="<?php echo base_url('location/edit_location/'.$location['loc_id']) ?>" class="btn btn-default">Sửa</a>
							<a onclick="return confirm('Địa điểm bị xóa không thể được phục hồi. Bạn chắc chắn muốn xóa?');" href="<?php echo base_url('location/delete_location/'.$location['loc_id']) ?>" class="btn btn-danger">Xóa</a>
						</th>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>