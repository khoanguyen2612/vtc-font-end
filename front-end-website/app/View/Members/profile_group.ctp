	<?php echo $this->Html->css('fileinput.min');?>
	<?php echo $this->Html->css('profile');?>
	<div class="container">
		<div class="row">
			<?php 
				echo $this->Form->create('Account',array('class'=>'form-horizontal','enctype' => 'multipart/form-data'));
			?>
			<div class="col-md-3">
				<div class="text-center">
					<div class="profile-user">
						<div class="kv-avatar">
			                <div class="">
			                    <!-- <input id="avatar-2" name="avatar" type="file" required> -->
			                    <?php echo $this->Form->input('avatar',array(
			                    	'id'=>'avatar-2',
			                    	'label'=>false,
			                    	'type'=>'file',
			                    	));
			                    ?>	                
			               	</div>
			            </div>
			            <div class="kv-avatar-hint"><small>Select file < 1500 KB</small></div>
    				</div>
				</div>
			</div>
			<div class="col-md-9 personal-info">
				<h3> Thông tin tổ chức</h3>
				<?php echo $this->Session->flash();?> 
					<div class="form-group">
						<label class="col-lg-3 control-label"> Tên doanh nghiệp:</label>
						<div class="col-lg-8">          
			            	<!-- <input type="text" class="form-control" id="indus_name" value="ABC"> -->
			            	<?php
				                echo $this->Form->input('organ_name',array(
				                    'type' => 'text',
				                    'class' => 'form-control',
				                    'label' => false,
				                    'value'=>$user['Organization']['organ_name']
				                    ));
				            ?>

			            </div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label"> Tên người đại diện: </label>
						<div class="col-lg-8">
							<!-- <input type="text" class="form-control" id="indus_user" value="AAA"> -->
							<?php
				                echo $this->Form->input('name',array(
				                    'type' => 'text',
				                    'class' => 'form-control',
				                    'label' => false,
				                    'value'=>$user['Account']['name']
				                    ));
				            ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label"> Email: </label>
						<div class="col-lg-8">
							<!-- <input type="text" class="form-control" id="indus_email" value="abc@rec.com"> -->
							<?php
				                echo $this->Form->input('email',array(
				                    'type' => 'email',
				                    'class' => 'form-control',
				                    'label' => false,
				                    'value'=>$user['Account']['email']
				                    ));
				            ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label"> Mã số thuế: </label>
						<div class="col-lg-8">
							<!-- <input type="text" class="form-control" id="tax_code" value="123456789"> -->
							<?php
				                echo $this->Form->input('tax_code',array(
				                    'type' => 'text',
				                    'class' => 'form-control',
				                    'label' => false,
				                    'value'=>$user['Organization']['tax_code']
				                    ));
				            ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label"> Tỉnh/Thành phố: </label>
						<div class="col-lg-8">
							<?php
				                echo $this->Form->input('address',array(
				                    'type' => 'text',
				                    'class' => 'form-control',
				                    'label' => false,
				                    'value'=>$user['Account']['address']
				                    ));
				            ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label"> Địa chỉ liên hệ: </label>
						<div class="col-lg-8">
							<!-- <input type="text" class="form-control" id="indus_address" value="Hoàn Kiếm"> -->
							<?php
				                echo $this->Form->input('add_contact',array(
				                    'type' => 'text',
				                    'class' => 'form-control',
				                    'label' => false,
				                    'value'=>$user['Account']['add_contact']
				                    ));
				            ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label"> Số điện thoại chính: </label>
						<div class="col-lg-8">
							<!-- <input type="text" class="form-control" id="indus_phone_main" value="042004445"> -->
							<?php
				                echo $this->Form->input('phonenumber',array(
				                    'type' => 'text',
				                    'class' => 'form-control',
				                    'label' => false,
				                    'value'=>$user['Account']['phonenumber']
				                    ));
				            ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label"> Số điện thoại phụ: </label>
						<div class="col-lg-8">
							<!-- <input type="text" class="form-control" id="indus_phone" value="042003333"> -->
							<?php
				                echo $this->Form->input('phonenumber2',array(
				                    'type' => 'text',
				                    'class' => 'form-control',
				                    'label' => false,
				                    'value'=>$user['Organization']['phonenumber2']
				                    ));
				            ?>

						</div>
					</div>
					<div class="form-group">
			            <label class="col-md-3 control-label"></label>
			            	<div class="col-md-8">
			              <!-- <input type="button" class="btn-save" value="Lưu thay đổi">
			              <span></span>
			              <input type="reset" class="btn-cancel" value="Hủy"> -->
	              				<?php
				                  echo $this->Form->button('Lưu thay đổi',array(
				                    'class' => 'btn btn-primary',
				                    'type' => 'submit',
				                  ));
				                  echo $this->Form->button('Hủy',array(
				                    'class' => 'btn btn-default',
				                    'type' => 'reset',
				                  ));
				                ?>
			           		</div>
			          </div>
					</div>
			</form>
		</div>
	</div>

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
	    if(empty($user["Account"]["avatar"])){
	   		echo $this->Html->image("profile-default.png");
		}
	    else{
	    	echo $this->Html->image("../uploads/images/".$user["Account"]["avatar"]);
	    }
	    ?><h6 class="text-muted">Click to select</h6>',
	    layoutTemplates: {main2: '{preview} {remove} {browse}'},
	    allowedFileExtensions: ["jpg", "png", "gif"]
    })
    </script>
<?php echo $this->fetch('script'); ?>
