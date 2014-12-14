<?php if (empty($location)): ?>
	<div class="container">
		<div class="alert alert-danger" role="alert">
			<i class="fa fa-info-circle"></i> Bạn không có quyền sửa địa điểm này.
		</div>
	</div>
<?php else: ?>
	<div class="container">
		<ol class="breadcrumb breadcrumb-arrow">
			<li><a href="<?php echo base_url() ?>">Trang chủ</a></li>
			<li><a href="<?php echo base_url('location') ?>">Địa điểm</a></li>
			<li class="active"><a href="<?php echo base_url('location/view_location/'.$location[0]['loc_id']) ?>"><?php echo $location[0]['loc_name']; ?></a></li>
		</ol>
	</div>

	<?php	if (!empty($successMessage)): ?>
		<div class="container">
			<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<i class="fa fa-info-circle"></i> <?php echo $successMessage ?>. <strong><a href="<?php echo base_url('location/view_location/'.$location[0]['loc_id']) ?>" class="alert-link">Xem ngay</a></strong>
			</div>
		</div>
	<?php endif ?>
	<div class="container">
		<form role="form" method="post" action="<?php echo base_url('location/update_location_exec') ?>" style="margin-bottom: 50px" class="row">
			<div class="col-xs-12 col-sm-4">
				<input type="hidden" value="<?php if (isset($location)) echo $location[0]['loc_id'] ?>" name="id">
				<div class="form-group">
					<label for="">Tên địa điểm</label>
					<input type="text" class="form-control" id="" placeholder="" name="name" value="<?php if (isset($location)) echo htmlspecialchars($location[0]['loc_name']) ?>">
				</div>
				<div class="form-group">
					<label for="">Địa chỉ</label>
					<input type="text" class="form-control" id="" placeholder="" name="address" value="<?php if (isset($location)) echo htmlspecialchars($location[0]['loc_address']) ?>">
				</div>
				<div class="form-group">
					<label for="">Ngành nghề / Dịch vụ</label>
					<select name="category" id="" class="form-control">
						<?php foreach ($categories as $key => $category):
							$selected = ($category['ctg_id'] == $location[0]['loc_category_id'] ? 'selected' : '');
							echo '<option value="'.$category['ctg_id'].'" '.$selected.'>'.$category['ctg_name'].'</option>';
						endforeach ?>
					</select>
				</div>
				<div class="form-group">
					<label for="">Tỉnh thành</label>
					<select name="province" id="" class="form-control">
						<?php foreach ($provinces as $key => $province):
							$selected = ($province['prv_id'] == $location[0]['loc_province_id'] ? 'selected' : '');
							echo '<option value="'.$province['prv_id'].'" '.$selected.'>'.$province['prv_name'].'</option>';
						endforeach ?>
					</select>
				</div>
				<div class="form-group">
					<label for="">Điện thoại</label>
					<input type="text" class="form-control" id="" placeholder="" name="phone" value="<?php if (isset($location)) echo htmlspecialchars($location[0]['loc_phone']) ?>">
				</div>
				<div class="form-group">
					<label for="">Email</label>
					<input type="text" class="form-control" id="" placeholder="" name="email" value="<?php if (isset($location)) echo htmlspecialchars($location[0]['loc_email']) ?>">
				</div>
				<div class="form-group">
					<label for="">Tọa độ</label>
					<input type="text" class="form-control" id="" placeholder="" name="coordination" value="<?php if (isset($location)) echo htmlspecialchars($location[0]['loc_coordination']) ?>">
					<p style="font-size: 0.8em; font-style: italic">Ví dụ: 21.027424,105.832716. Hướng dẫn tại <a href="https://support.google.com/maps/answer/18539?hl=vi">đây</a>. Lấy tọa độ tại <a href="https://www.google.com/maps">đây</a></p>
				</div>
				<div class="form-group">
					<label for="">Hình đại diện</label>
					<input type="text" class="form-control" id="icon-receiver" placeholder="" name="icon" value="<?php if (isset($location)) echo htmlspecialchars($location[0]['loc_icon']) ?>">
					<p style="font-size: 0.8em; font-style: italic">Chọn icon có sẵn bằng nút bên dưới hoặc dán link icon/logo của bạn vào</p>
				</div>
				<button type="button" id="icon-picker" class="btn btn-info" data-toggle="modal" data-target="#icon-list">Danh sách icon</button>
			</div>
			<div class="col-xs-12 col-sm-8">
				<div class="form-group">
					<label for="">Sơ lược</label>
					<p style="font-size: 0.8em; font-style: italic">Sẽ hiển thị cùng logo của bạn trên bản đồ</p>
					<textarea name="brief" id="brief" cols="30" rows="5" class="form-control" placeholder="Nhập thông tin sơ lược sẽ hiển thị trên map"><?php if (isset($location)) echo htmlspecialchars($location[0]['loc_brief']) ?></textarea>
				</div>
				<div class="form-group">
					<label for="">Trang catalog</label>
					<textarea name="detail" id="detail" cols="30" rows="10" class="form-control" placeholder="Viết trang catalog của bạn tại đây"><?php if (isset($location)) echo $location[0]['loc_detail'] ?></textarea>
				</div>
				<button type="submit" class="btn btn-success btn-lg pull-right">Cập nhật</button>
			</div>
		</form>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="icon-list" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="myModalLabel">Chọn biểu tượng</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<?php
							for ($i=1; $i <=200 ; $i++) { 
						?>
						<div class="col-xs-4 col-sm-2">
							<div class="img-container">
								<img src="<?php echo base_url('assets/ebz/images/icon/'.$i.'.png') ?>" alt="">
							</div>
						</div>
						<?php
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="<?php echo base_url('assets/ebz/plugins/ckeditor/ckeditor.js');?>"></script>
	<script>
		CKEDITOR.replace( 'detail', {
			customConfig: 'config_full.js'
		});
	</script>
	<script>
		jQuery(document).ready(function($) {
			$('.img-container').on('click', function() {
				var img_src = $(this).find('img').attr('src');
				$('input#icon-receiver').val(img_src);
				$('#icon-list').modal('hide');
			})
		});
	</script>
<?php endif ?>