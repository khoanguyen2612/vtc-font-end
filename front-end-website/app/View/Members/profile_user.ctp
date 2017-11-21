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
				<h3> Thông tin cá nhân</h3>
				<?php echo $this->Session->flash();?> 
					<div class="form-group">
						<label class="col-lg-3 control-label">Họ và tên:</label>
						<div class="col-lg-8">          
			             	<!-- <input type="text" class="form-control" id="name" name="name" value="<?php //echo $user['name']?>"> -->
			             	<?php
				                echo $this->Form->input('name',array(
				                    'type' => 'text',
				                    'class' => 'form-control',
				                    'label' => false,
				                    'value'=>$user["name"]
				                    ));
				            ?>
			            </div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label"> Tên đăng nhập: </label>
						<div class="col-lg-8">
							<!-- <input type="text" class="form-control" name="nickname" value="<?php //echo $user['nickname']?>"> -->
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
					<div class="form-group">
						<label class="col-lg-3 control-label"> Email: </label>
						<div class="col-lg-8">
							<!-- <input type="email" class="form-control" name="email" value="<?php //echo $user['email']?>"> -->
							<?php
				                echo $this->Form->input('email',array(
				                    'type' => 'email',
				                    'class' => 'form-control',
				                    'label' => false,
				                    'value'=>$user["email"]
				                    ));
				            ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label"> Số CMTND: </label>
						<div class="col-lg-8">
							<!-- <input type="text" class="form-control" name="CMTND" value="<?php //echo $user['CMTND']?>"> -->
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
					<div class="form-group">
						<label class="col-lg-3 control-label"> Tỉnh/Thành phố: </label>
						<div class="col-lg-8">
							<!-- <input type="text" class="form-control" name="address" value="<?php //echo $user['address']?>"> -->
							<?php
				                echo $this->Form->input('address',array(
				                    'type' => 'text',
				                    'class' => 'form-control',
				                    'label' => false,
				                    'value'=>$user["address"]
				                    ));
				            ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label"> Địa chỉ liên hệ: </label>
						<div class="col-lg-8">
							<!-- <input type="text" class="form-control" name="add_contact" value="<?php //echo $user['add_contact']?>"> -->
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
					<div class="form-group">
						<label class="col-lg-3 control-label"> Số điện thoại: </label>
						<div class="col-lg-8">
							<!-- <input type="text" class="form-control" name="phonenumber" value="<?php //echo $user['phonenumber']?>"> -->
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
					<div class="form-group">
			            <label class="col-md-3 control-label"></label>
			            <div class="col-md-8">
			              <!-- <button type="submit" class="btn btn-primary" >Lưu thay đổi</button> -->
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
			              <!-- <button type="reset" class="btn btn-default">Hủy</button> -->
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
	    if(empty($user["avatar"])){
	   		echo $this->Html->image("profile-default.png");
		}
	    else{
	    	echo $this->Html->image("../uploads/images/".$user["avatar"]);
	    }
	    ?><h6 class="text-muted">Click to select</h6>',
	    layoutTemplates: {main2: '{preview} {remove} {browse}'},
	    allowedFileExtensions: ["jpg", "png", "gif"]
    })
    </script>
<?php echo $this->fetch('script'); ?>
