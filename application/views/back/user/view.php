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
	
	<div class="col-xs-6">
		<div class="box box-primary">
			<div class="box-header">
				
			</div><!-- /.box-header -->
			<div class="box-body">
				<form action="<?php echo base_url('user/update') ?>" method="POST">
					<?php foreach ($users as $key => $user): ?>
						<div class="form-group">
							<input class="form-control" type="hidden" value="<?php echo $user['usr_id'] ?>" name="id">
						</div>
						<div class="form-group">
							<label for="">Tên hiển thị</label>
							<input class="form-control" type="text" value="<?php echo $user['usr_display_name'] ?>" name="display_name">
						</div>
						<div class="form-group">
							<label for="">Tên đăng nhập</label>
							<input class="form-control" type="text" value="<?php echo $user['usr_username'] ?>" name="username">
						</div>
						<input class="btn btn-success" type="submit" value="Lưu">
					<?php endforeach ?>
				</form>
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