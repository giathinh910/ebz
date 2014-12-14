<div class="container">
	<div class="row">
		<?php
			if (!empty($flashMessage)) {
		?>
			<div class="alert alert-danger alert-dismissible col-xs-12 col-sm-6 col-sm-offset-3" role="alert">
				<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<i class="fa fa-times"></i> <?php echo $flashMessage ?>
			</div>
		<?php
			}
		?>
		<div class="panel panel-default col-xs-12 col-sm-6 col-sm-offset-3">
			<form class="form-horizontal" role="form" style="margin: 30px auto 30px" method="post" action="<?php echo base_url('user/signup_exec') ?>">
				<div class="form-group">
					<label for="" class="col-sm-4 control-label">Tên hiển thị</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="" placeholder="Tên hiển thị" name="display_name">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-4 control-label">Tên đăng nhập</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="" placeholder="Tên đăng nhập" name="username">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-4 control-label">Tỉnh thành</label>
					<div class="col-sm-8">
						<select class="form-control" name="province">
							<?php foreach ($provinces as $key => $province): ?>
								<option value="<?php echo $province['prv_id'] ?>"><?php echo $province['prv_name'] ?></option>
							<?php endforeach ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-4 control-label">Email</label>
					<div class="col-sm-8">
						<input type="email" class="form-control" id="" placeholder="Email" name="email">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-4 control-label">Mật khẩu</label>
					<div class="col-sm-8">
						<input type="password" class="form-control" id="" placeholder="Mật khẩu" name="password[]">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-4 control-label">Nhập lại mật khẩu</label>
					<div class="col-sm-8">
						<input type="password" class="form-control" id="" placeholder="Nhập lại mật khẩu" name="password[]">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-4 col-sm-8">
						<button type="submit" class="btn btn-primary">Tạo tài khoản</button>
					</div>
				</div>
			</form>
		</div>
		<!-- /panel -->
	</div>
	<!-- /.row -->
</div>
<!-- /.container -->