<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<?php echo $pageTitle ?>
			<small><?php echo $pageGroupTitle ?></small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Dashboard</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
	<div class="row">
	
	<div class="col-sm-12 col-xs-12">
		<div class="box box-primary">
			<div class="box-header">
				
			</div><!-- /.box-header -->
			<div class="box-body table-responsive">
				<table class="table" id="staffs-table">
					<thead>
						<tr>
							<th>Mã số</th>
							<th>Tên</th>
							<th>Địa chỉ</th>
							<th>Sở hữu</th>
							<th>Thao tác</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($locations as $key => $location): ?>
						<tr>
							<td><?php echo $location['loc_id'] ?></td>
							<td><?php echo $location['loc_name'] ?></td>
							<td><?php echo $location['loc_address'] ?></td>
							<td><?php echo $location['usr_username'] ?></td>
							<td>
								<a href="<?php echo base_url('location/view_location').'/'.$location['loc_id'] ?>" class="btn btn-sm btn-flat btn-info">Xem chi tiết</a>
								<a href="<?php echo base_url('location/delete_location').'/'.$location['loc_id'] ?>" class="btn btn-sm btn-flat btn-danger">Xóa</a>
							</td>
						</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div><!-- /.box-body -->

			<div class="box-footer">
			</div><!-- /.box-footer -->
		</div>
	</div><!-- ./col -->

	</div><!-- /.row -->
	</section><!-- /.content -->
</aside><!-- /.right-side -->

<?php
function permissionDecode($number) {
	switch ($number) {
		case '1':
			return 'Cấp 1';
			break;

		case '1':
			return 'Cấp 2';
			break;
		
		default:
			return 'Không';
			break;
	}
}
?>