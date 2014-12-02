<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- search form -->
		<form action="#" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Search..."/>
				<span class="input-group-btn">
					<button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
				</span>
			</div>
		</form>
		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu">
			<li class="active">
				<a href="index.html">
					<i class="fa fa-dashboard"></i> <span>Trang chủ</span>
				</a>
			</li>
			<li class="treeview active">
				<a href="#">
					<i class="fa fa-calendar"></i>
					<span>Chấm công</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="<?php echo base_url('attendance/view_attendance') ?>"><i class="fa fa-angle-double-right"></i> Bảng công</a></li>
					<li><a href="<?php echo base_url('attendance/add_attendance_table') ?>"><i class="fa fa-angle-double-right"></i> Tạo bảng chấm công</a></li>
					<li><a href=""><i class="fa fa-angle-double-right"></i> Xuất báo cáo</a></li>
				</ul>
			</li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>