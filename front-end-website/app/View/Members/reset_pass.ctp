
  <?php echo $this->Html->css('style_mb');?>
	<div class="forget-form fg-logincontainer">
		<div class="fg-note">
			<h3><b>Thay mới Mật Khẩu</b></h3>
			<!-- <p>Quý khách bị quên mật khẩu? Hãy nhập địa chỉ email và bắt đầu quá trình khôi phục.</p> -->
		</div>
		<div>
			<!-- <form class="" action=""> -->
			<?php echo $this->Session->flash();?> 
			<?php echo $this->Form->create('Account',array()); 
			?>
			<div class="form-group">
				<label class="control-label" >Mật khẩu mới</label><br>
				<!-- <input type="email" class="form-control" id="email" placeholder="Địa chỉ Email" name="email"> -->
				<?php
	                echo $this->Form->input('original_password',array(
	                    'type' => 'password',
	                    'class' => 'form-control',
	                    'label' => false,
	                    'placeholder' => 'Mật khẩu mới',
	                    ));
	              ?>
			</div>
			<div class="form-group">
				<label class="control-label" >Xác nhận lại Mật khẩu</label><br>
				<!-- <input type="email" class="form-control" id="email" placeholder="Địa chỉ Email" name="email"> -->
				<?php
	                echo $this->Form->input('confirm_password',array(
	                    'type' => 'password',
	                    'class' => 'form-control',
	                    'label' => false,
	                    'placeholder' => 'nhập lại Mật khẩu mới',
	                    ));
	              ?>
			</div>
			<div class="form-group" align="center">        
			    <!-- <button type="submit" class="btn">Xác nhận</button> -->
			    <?php
                  echo $this->Form->button('Xác nhận',array(
                    'class' => 'btn',
                    'id' => 'submit',
                  ));
                ?>
			</div>
			</form>
		</div>
	</div>
	<div class="footer">

	</div>

