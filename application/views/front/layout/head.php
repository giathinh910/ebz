<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<title>EBZ</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<!-- bootstrap -->
	<?php echo link_tag('assets/ebz/css/bootstrap.min.css'); ?>
	<?php echo link_tag('assets/ebz/css/site.min.css'); ?>
	<!-- fontawesome -->
	<?php echo link_tag('assets/ebz/css/font-awesome.min.css'); ?>
	<!-- custom stylesheet -->
	<?php echo link_tag('assets/ebz/css/style.css'); ?>
	<!-- JQuery -->
	<script src="<?php echo base_url('assets/ebz/js/jquery.js');?>"></script>

	</head>

<body>

<nav id="gt-header" class="navbar navbar-default" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
		<a class="navbar-brand" href="<?php echo base_url() ?>" style="color: #fff"><i class="fa fa-map-marker"></i> EBZ digital location</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo base_url('location/add_location') ?>"><i class="fa fa-plus"></i> Tạo địa điểm</a></li>
				<?php
					if($this->session->userdata('current_user_id') != null) {
				?>
					<li><a href="<?php echo base_url('location/my_locations') ?>"><i class="fa fa-map-marker"></i> Địa điểm của tôi</a></li>
				<?php
					}
				?>

				<?php
					if($this->session->userdata('current_user_id') != null) {
				?>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user"></i> <?php echo $this->session->userdata('current_user_display_name'); ?><span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#"><i class="fa fa-gear"></i> Cài đặt</a></li>
						<li><a href="<?php echo base_url('user/logout') ?>"><i class="fa fa-lock"></i> Đăng xuất</a></li>
					</ul>
				</li>
				<?php
					} else {
				?>
				<li><a href="<?php echo base_url('user/login') ?>"><i class="fa fa-unlock"></i> Đăng nhập</a></li>
				<?php
					}
				?>
			</ul>
			<form class="navbar-form navbar-right" role="search"><div class="form-search search-only"><i class="search-icon glyphicon glyphicon-search"></i> <input class="form-control search-query"></div></form>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container -->
</nav>