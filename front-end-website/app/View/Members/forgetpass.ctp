
  <?php echo $this->Html->css('style_mb');?>
 	<div class="forget-form fg-logincontainer">
		<div class="fg-note">
			<h3><b>Khôi phục mật khẩu</b></h3>
			<p>Quý khách bị quên mật khẩu? Hãy nhập địa chỉ email và bắt đầu quá trình khôi phục.</p>
		</div>
		<div>
			<!-- <form class="" action=""> -->
			<?php echo $this->Session->flash();?> 
			<?php echo $this->Form->create('Send_mail',array("url" => array('controller' => 'members','action' => 'forgetpass'),)); 
			?>
			<div class="form-group">
				<label class="control-label" for="email">Địa chỉ Email:</label><br>
				<!-- <input type="email" class="form-control" id="email" placeholder="Địa chỉ Email" name="email"> -->
				<?php
	                echo $this->Form->input('email',array(
	                    'type' => 'email',
	                    'class' => 'form-control',
	                    'label' => false,
	                    'placeholder' => 'Địa chỉ Email',
	                    ));
	              ?>
			</div>
			<div class="form-group" align="center">        
			    <!-- <button type="submit" class="btn">Xác nhận</button> -->
			    <?php
                  echo $this->Form->button('Xác nhận',array(
                    'class' => 'btn btn-login',
                    'id' => 'submit',
                  ));
                ?>
			</div>
			</form>
		</div>
	</div>
	<div class="footer">

	</div>
