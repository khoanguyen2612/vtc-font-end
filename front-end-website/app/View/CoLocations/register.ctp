<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<?php echo $this->Html->css('ssl.css'). "\n"; ?>
<div class="ssl-procedure ssl-register">
	<div class="container">	
		<div class="row ssl-step ">
			<div class="col-xs-12 text-center">
				<h3><b>NHẬP THÔNG TIN ĐĂNG KÝ DỊCH VỤ</b></h3>
			</div>
			<div class="col-md-12">
				<div class="ssl-reg">
						<div class="ssl-01">
							<h4 class="text-center" style="font-weight: 600">GÓI DỊCH VỤ ĐĂNG KÝ</h4>					
							<div id="ssl_choise" name="ssl_id" class="ssl_choise text-center" >
								<strong id="ssl_choise">
									COLO <?php echo $id; ?>
								</strong>
							</div>
							<?php echo $this->Session->flash();?> 
						</div>
					</div>
			</div>
			<div class="ssl-dn-dk col-md-12">
				<div class="col-md-6">
					<div class="ssl-reg">
						<?php echo $this->Form->create('Account',array("url" => array('controller' => 'CoLocations','action' => 'register'))); ?>
						<input type="hidden" name="data[colo_id]" value="<?php echo $id; ?>">
						<div class="get_account_info ssl-02">
							<div class="text-center">
								<h4>ĐĂNG NHẬP</h4>
								<span class="blue">Bạn đã có tài khoản</span><br>
								<span>Chỉ cần Đăng nhập để thanh toán</span>							
							</div>
							<div class="form-group">
								<?php
								echo $this->Form->input('nickname',array(
									'type' => 'text',
									'label' => 'Tên đăng nhập:',
									'class' => 'form-control',
									'required' => true,
								));
								?>
							</div>
							<div class="form-group">
								<?php
								echo $this->Form->input('login_password',array(
									'type' => 'password',
									'class' => 'form-control',
									'label' => 'Mật khẩu:',
									'required' => true,
								));
								?>		
							</div>

						</div>
						<div align="center" class="button-ssl">
							<?php
							echo $this->Form->button('ĐĂNG NHẬP',array(
								'class' => 'btn btn-ssl',
							));
							?>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-6" >
				<div class="ssl-reg">
					<?php echo $this->Form->create('ServiceRequest',array("url" => array('controller' => 'CoLocations','action' => 'register'))); ?>
				<input type="hidden" name="data[colo_id]" value="<?php echo $id; ?>">
					<div class="get_account_info ssl-02">
						<div class="text-center">
							<h4>ĐĂNG KÝ</h4>						
						</div>
						<label>
							<i></i>
							Thông tin liên hệ
						</label>
						<div class="form-group">
							<label  class="col-lg-3 col-md-3 col-sm-4 col-xs-4">Họ tên:</label>
							<div class="col-lg-9 col-md-9 col-sm-8 col-xs-8">
								<?php
								echo $this->Form->input('name',array(
									'type' => 'text',
									'label' => false,
									'placeholder' => 'Nhập tên',
									'class' => 'form-control',
									'required' => true,
								));
								?>
							</div>
						</div>
						<div class="form-group">
							<label  class="col-lg-3 col-md-3 col-sm-4 col-xs-4">Email:</label>
							<div class="col-lg-9 col-md-9 col-sm-8 col-xs-8">
								<?php
								echo $this->Form->input('email',array(
									'type' => 'email',
									'class' => 'form-control',
									'label' => false,
									'placeholder' => 'Nhập email',
									'required' => true,
								));
								?>						            
							</div>
						</div>
						<div class="form-group">
							<label  class="col-lg-3 col-md-3 col-sm-4 col-xs-4">Điện thoại:</label>
							<div class="col-lg-9 col-md-9 col-sm-8 col-xs-8">
								<?php
								echo $this->Form->input('phone',array(
									'type' => 'text',
									'class' => 'form-control',
									'label' => false,
									'placeholder' => 'Nhập số điện thoại',
									'required' => true,
								));
								?>
							</div>
						</div>
						<div class="form-group">
							<label  class="col-lg-3 col-md-3 col-sm-4 col-xs-4">Công ty:</label>
							<div class="col-lg-9 col-md-9 col-sm-8 col-xs-8">
								<?php
								echo $this->Form->input('company',array(
									'type' => 'text',
									'class' => 'form-control',
									'label' => false,
									'placeholder' => 'Nhập tên tổ chức',
									'required' => true,
								));
								?>
							</div>
						</div>
					</div>
					<div align="center" class="button-ssl">
						<?php
						echo $this->Form->button('ĐĂNG KÝ NGAY',array(
							'class' => 'btn btn-ssl',
						));
						?>
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>
	</div>	
</div>
<style type="text/css">
.alert {
	margin-top:10px;
}
.ssl_choise {
	margin:auto;
	display:block;
	background: #005faf;
	width: 50%;
	height: 50px;
	color: #fff;
	font-size: 20px;
	border-radius:5px;
	padding-top:10px;
}
.ssl-01{
	margin: 20px 0px;
}
.ssl-02 .form-group {
	margin: 20px 0px;
	min-height: 30px;
}
.form-group input{
	padding:5px;	
}
.ssl-register h2{
	text-align: center;
	margin: 40px;
}
div.error-message{
	color:#c90425;
}
</style>