<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <?php echo $this->Html->css('ssl.css'). "\n"; ?>
	<div class="ssl-procedure ssl-register">
		<div class="container">
			
			<div class="row ssl-step ">
				<div class="col-xs-12 text-center">
					<h3><b>GÓI SSL LỰA CHỌN</b></h3>
				</div>
				<div class="col-md-12">
					<div class="ssl-reg">
						<div class="ssl-01">
							<strong>
							<select id="ssl_choise" name="ssl_id" class='ssl_choise' >
								<?php foreach ($ssl as $item) {
									if(isset($ssl_id)&&$ssl_id==$item['ProductPrice']['id']){
										echo '<option selected value="'.$item['ProductPrice']['id'].'">'.$item['ProductPrice']['product_name'].'</option>';
									}else{
										echo '<option value="'.$item['ProductPrice']['id'].'">'.$item['ProductPrice']['product_name'].'</option>';
									}
								} ?>
							</select>
							</strong>
						</div>
						<?php echo $this->Session->flash();?> 
					</div>
				</div>
				<div class="col-md-6">
					<div class="ssl-reg">
						<?php echo $this->Form->create('Account',array("url" => array('controller' => 'ssl','action' => 'register'))); ?>
						<div class="get_account_info ssl-02">
							<label>
								<i></i>
								Thông tin liên hệ
							</label>
							<!-- <form action="" method=""> -->

							<input name="data[ssl_id]" type="hidden" value="" class="value_ssl_id">
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
						<div align="center">
							<?php
								echo $this->Form->button('ĐĂNG NHẬP',array(
								'class' => 'btn btn-ssl',
								));
							?>
		               </div>
		           		</form>
					</div>
				</div>
				<div class="col-md-6">
					<div class="ssl-reg">
						<?php echo $this->Form->create('ServiceRequest',array("url" => array('controller' => 'ssl','action' => 'register'))); ?>
							<div class="get_account_info ssl-02">
								<label>
									<i></i>
									Thông tin liên hệ
								</label>
								<!-- <form action="" method=""> -->
								<input name="data[ssl_id]" type="hidden" value="" class="value_ssl_id">
									<div class="form-group">
										<label  class="col-lg-3 col-md-3 col-sm-4 col-xs-4">Họ tên:</label>
										<!-- <input type="text" name="name" class="col-lg-8 col-md-8 col-sm-8 col-xs-8"> -->
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
										<!-- <input type="email" name="email" class="col-lg-8 col-md-8 col-sm-8 col-xs-8"> -->
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
										<!-- <input type="text" name="phonenumber" class="col-lg-8 col-md-8 col-sm-8 col-xs-8"> -->
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
										<!-- <input type="text" name="organization" class="col-lg-8 col-md-8 col-sm-8 col-xs-8"> -->
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
							<div align="center">
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
<style type="text/css">
	.ssl-step .ssl-reg{
		/*margin: 0px 13%;*/
	}
	.ssl_choise {
		background: #005faf;
		width: 100%;
		height: 50px;
		color: #fff;
		font-size: 20px;
	}
	.ssl-01{
		margin: 20px 0px;
	}
	.ssl-02{
		margin: 45px 0px;
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
<script type="text/javascript">
	$(document).ready(function(){
	    var ssl_id;
	    ssl_id = $("#ssl_choise").val();
		jQuery(".value_ssl_id").val(ssl_id);
	    $("#ssl_choise").change(function(){	    	
	    	ssl_id = $("#ssl_choise").val();
	    	jQuery(".value_ssl_id").val(ssl_id);
	    	console.log(ssl_id);
	    });
	});
</script>
