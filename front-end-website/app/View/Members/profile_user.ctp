	<?php echo $this->Html->css('fileinput.min');?>
	<?php echo $this->Html->css('profile');?>
	<?php echo $this->Form->create('Account',array('class'=>'form-horizontal','enctype' => 'multipart/form-data'));?>
	<div class="container">
		<div class="row" style="padding: 20px 0px;">
			<?php echo $this->Session->flash();?> 
			<div class="col-md-2" style="padding-top: 40px;">
				<div class="text-center">
					<div class="profile-user">
						<div class="kv-avatar">
							<div class="">
								<?php echo $this->Form->input('avatar',array(
									'id'=>'avatar-2',
									'label'=>false,
									'type'=>'file',
								));
								?>            
							</div>
						</div>
						<div class="kv-avatar-hint"><small>Ảnh tải lên nhỏ hơn 1,5M</small></div>	
					</div>
				</div>
			</div>
			<div class="col-md-10">
				<div class="row">
					<div class="col-lg-12">
						<table style="width: 100%;">
							<tr>
								<td>
									<h3 style="color: #005faf;margin-top: 10px;text-align: left;" style=""> Thông tin cá nhân</h3>
								</td>
								<td>
									<div class="form-group">
										<label class="col-lg-3 control-label"> Địa chỉ liên hệ: </label>
										<div class="col-lg-8">
											<?php
											echo $this->Form->input('add_contact',array(
												'type' => 'text',
												'class' => 'form-control',
												'label' => false,
												'value'=>$user["add_contact"]
											));
											?>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label class="col-lg-3 control-label"> Tên đăng nhập: </label>
										<div class="col-lg-8">
											<?php
											echo $this->Form->input('nickname',array(
												'type' => 'text',
												'class' => 'form-control',
												'label' => false,
												'disabled'=>true,
												'value'=>$user["nickname"]
											));
											?>
										</div>
									</div>
								</td>
								<td>
									<div class="form-group">
										<label class="col-lg-3 control-label"> Số CMTND: </label>
										<div class="col-lg-8">
											<?php
											echo $this->Form->input('CMTND',array(
												'type' => 'text',
												'class' => 'form-control',
												'label' => false,
												'value'=>$user["CMTND"]
											));
											?>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label class="col-lg-3 control-label">Họ</label>
										<div class="col-lg-8">          
											<?php
											echo $this->Form->input('fname',array(
												'type' => 'text',
												'class' => 'form-control',
												'label' => false,
												'value'=>$user["fname"]
											));
											?>
										</div>
									</div>
								</td>
								<td>
									<div class="form-group">
										<label class="col-lg-3 control-label"> Số điện thoại: </label>
										<div class="col-lg-8">
											<?php
											echo $this->Form->input('phonenumber',array(
												'type' => 'text',
												'class' => 'form-control',
												'label' => false,
												'value'=> $user["phonenumber"]
											));
											?>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label class="col-lg-3 control-label">Tên</label>
										<div class="col-lg-8">          
											<?php
											echo $this->Form->input('lname',array(
												'type' => 'text',
												'class' => 'form-control',
												'label' => false,
												'value'=>$user["lname"]
											));
											?>
										</div>
									</div>
								</td>
								<td>
									<div class="form-group">
										<label class="col-lg-3 control-label"> Quốc gia </label>
										<div class="col-lg-8">
											<select name="data[Account][country]" class="form-control" id="prf_country" required>
												<option value>Chọn quốc gia</option>
												<option value="VN" <?php echo (isset($user['Account']['country']) && $user['Account']['country'] == 'VN')?'selected':''; ?>>Việt Nam</option>
												<option value="US" <?php echo (isset($user['Account']['country']) && $user['Account']['country'] == 'US')?'selected':''; ?>>United States</option>
											</select>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<label class="col-lg-3 control-label"> Email: </label>
										<div class="col-lg-8">
											<?php
											echo $this->Form->input('email',array(
												'type' => 'email',
												'class' => 'form-control',
												'label' => false,
												'value'=>$user["email"]
											));
											?>
										</div>
									</div></td>
									<td>
										<div class="form-group">
											<label class="col-lg-3 control-label"> Tỉnh/Thành phố: </label>
											<div class="col-lg-8">
												<select name="data[Account][address]" class="form-control" id="choice_ct">
													<?php if(!empty($user['Account']['address'])): ?>
														<option value="<?php echo $user['Account']['address'] ?>"><?php echo $user['Account']['address'] ?></option>
													<?php else:?>
														<option value>Chọn tỉnh/thành phố</option>
													<?php endif;?>
												</select>
											</div>
										</div>

									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="text-center">
						<?php echo $this->Form->button('Lưu thay đổi',array(
							'class' => 'btn btn-primary action',
							'type' => 'submit',
						));
						echo $this->Form->button('Hủy',array(
							'class' => 'btn btn-primary action',
							'type' => 'reset',
							'style' => 'background-color:#f47636'
						));
						?>
					</div>
				</div>
			</div>	
		</div>
		<?php echo $this->Form->end(); ?>
		<style type="text/css">
		select option{
			text-align: center;
		}
		.krajee-default.file-preview-frame .kv-file-content,.kv-preview-data,.file-preview-other-frame{
			width: 100% !important;
		}
		.krajee-default.file-preview-frame{
			float: none !important;
		}
		label.control-label{
			display: inline-block;
			text-align: left !important;
			padding: 10px 0px !important;
		}
		.form-horizontal .form-group{
			margin:8px 0px !important;
		}
		button.action{
			margin: 5px 20px;
			border-radius: unset !important;
			border:0px !important;
			width: 165px !important;
		}
		.file-preview{
			height: 150px;
		}
	</style>
	<?php echo $this->Html->script('fileinput.min');?>
	<script>
		$("#avatar-2").fileinput({
			overwriteInitial: true,
			maxFileSize: 1500,
			showClose: false,
			showCaption: false,
			showBrowse: false,
			browseOnZoneClick: true,
			removeLabel: '',
			removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
			removeTitle: 'Cancel or reset changes',
	// elErrorContainer: '#kv-avatar-errors-2',
	msgErrorClass: 'alert alert-block alert-danger',
	defaultPreviewContent: '<?php 
	if(empty($user["avatar"])){
		echo $this->Html->image("profile-default.png");
	}
	else{
		echo $this->Html->image("../uploads/images/".$user["avatar"]);
	}
	?><h6 class="text-muted">Click để chọn ảnh</h6>',
	layoutTemplates: {main2: '{preview} {remove} {browse}'},
	allowedFileExtensions: ["jpg", "png", "gif"]
});

		$('#prf_country').on('change', function() {
			$.ajax({
				url: "<?php echo $this->Html->url(array("controller" => "Members","action" => "get_city")); ?>",
				type: 'POST',
				dataType: 'html',
				data: {country: $(this).val()},
			})
			.done(function(data) {
				console.log(data);
				$('#choice_ct').html(data);
			});	
		});
	</script>
	<?php echo $this->fetch('script'); ?>