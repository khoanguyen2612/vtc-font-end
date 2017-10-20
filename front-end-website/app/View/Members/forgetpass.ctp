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

<style type="text/css">
/*css forgetpass.ctp*/
.forget-form > div > h3{
	margin:100px 0px 30px 0px;
	padding-bottom: 10px;
	text-align: center;
	color:#0060af;
}
.forget-form .fg-note{
	margin: 20px 0;
}
.fg-logincontainer button{
	text-align: center;
	background: #f37636;
	color:#ffffff;
	width: 145px;
	padding:10px 10px;
}
.fg-logincontainer input{
	padding: 20px 10px;
	margin:20px 0px;
}
.fg-logincontainer {
    margin: 40px auto 100px auto;
    padding: 0 20px;
    max-width: 600px;
    font-size: 16px;
    font-family: Arial;
}

</style>