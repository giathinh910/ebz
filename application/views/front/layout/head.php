<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<title>EBZ</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<!-- bootstrap -->
	<?php echo link_tag('assets/ebz/css/bootstrap.min.css'); ?>
	<!-- JQuery -->
	<script src="<?php echo base_url('assets/ebz/js/jquery.js');?>"></script>

	</head>

<body>

<nav class="navbar navbar-inverse" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
		<a class="navbar-brand" href="#">EBZ digital location</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Địa điểm<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="<?php echo base_url('location') ?>">Bản đồ</a></li>
						<li><a href="#">Cửa hàng</a></li>
						<li class="divider"></li>
						<li><a href="<?php echo base_url('location/add_location') ?>">Tạo địa điểm cho riêng bạn</a></li>
					</ul>
				</li>
				<li><a href="#">Thông tin</a></li>
				<li><a href="#">Liên hệ</a></li>
			</ul>
			<form class="navbar-form navbar-left" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Nhập từ khóa ...">
				</div>
				<button type="submit" class="btn btn-default">Tìm kiếm</button>
			</form>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Link</a></li>
				<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
					<li><a href="#">Action</a></li>
					<li><a href="#">Another action</a></li>
					<li><a href="#">Something else here</a></li>
					<li class="divider"></li>
					<li><a href="#">Separated link</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container -->
</nav>