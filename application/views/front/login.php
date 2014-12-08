<div class="container">
	<div class="row">
		<?php
			if (!empty($flashMessage)) {
		?>
			<div class="alert alert-danger alert-dismissible col-xs-12 col-sm-6 col-sm-offset-3" role="alert">
				<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<i class="fa fa-times"></i>	<?php echo $flashMessage ?>
			</div>
		<?php
			}
		?>
		<div class="panel panel-default col-xs-12 col-sm-6 col-sm-offset-3">
			<form class="form-horizontal" role="form" style="margin: 30px auto 30px" method="post" action="<?php echo base_url('user/login_exec') ?>">
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Tên đăng nhập</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="" placeholder="Tên đăng nhập" name="username">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-3 control-label">Mật khẩu</label>
					<div class="col-sm-9">
						<input type="password" class="form-control" id="" placeholder="Mật khẩu" name="password">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-9">
						Chưa có tài khoản? <a href="#">Đăng ký ngay.</a>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-9">
						<button type="submit" class="btn btn-primary">Đăng nhập</button>
					</div>
				</div>
			</form>
		</div>
		<!-- /panel -->
	</div>
	<!-- /.row -->
</div>
<!-- /.container -->