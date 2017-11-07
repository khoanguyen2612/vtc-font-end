<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <?php echo $this->Html->css('ssl.css'). "\n"; ?>
	<div class="pay_step">
		<?php echo $this->Html->image('SSL.png',array('class'=>'img-responsive')); ?>
	</div>

	<div class="ssl-procedure ssl-register">
		<div class="container">
			
			<div class="row ssl-step ">
			<?php echo $this->Form->create('SslContact',array("url" => array('controller' => 'ssl','action' => 'register'))); 
			?>
				<div class="col-xs-12 text-center">
					<h3><b>GÓI SSL LỰA CHỌN</b></h3>
				</div>
				<div class="col-md-12">
					<div class="ssl-reg">
						<div class="ssl-01">
							<strong>
							<select id="" name="data[SslContact][ssl_id]" class='ssl_choise'>
								<!-- <option value="0">ALPHA SSL</option>
								<option value="1" selected='selected'>DOMAIN SSL</option>
								<option value="2">ORGANIZATION SSL</option>
								<option value="3">EXTENDED SSL</option> -->
								<?php foreach ($ssl as $item) {
									echo '<option value="'.$item['ProductPrice']['id'].'"">'.$item['ProductPrice']['product_name'].'</option>';
								} ?>
							</select>
							</strong>
						</div>
						<div class="get_account_info ssl-02">
							<label>
								<i></i>
								Thông tin liên hệ
							</label>
							<!-- <form action="" method=""> -->
							<?php echo $this->Session->flash();?> 
								<div class="form-group">
									<label  class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Họ tên:</label>
									<!-- <input type="text" name="name" class="col-lg-8 col-md-8 col-sm-8 col-xs-8"> -->
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
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
									<label  class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Email:</label>
									<!-- <input type="email" name="email" class="col-lg-8 col-md-8 col-sm-8 col-xs-8"> -->
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
										<?php
											echo $this->Form->input('email',array(
												'type' => 'email',
												'class' => 'form-control',
												'label' => false,
												'placeholder' => 'Nhập email',
												'required' => true,
											));
							            ?>						            </div>
								</div>
								<div class="form-group">
									<label  class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Điện thoại:</label>
									<!-- <input type="text" name="phonenumber" class="col-lg-8 col-md-8 col-sm-8 col-xs-8"> -->
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
										<?php
											echo $this->Form->input('phonenumber',array(
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
									<label  class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Công ty:</label>
									<!-- <input type="text" name="organization" class="col-lg-8 col-md-8 col-sm-8 col-xs-8"> -->
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
										<?php
											echo $this->Form->input('organ_name',array(
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

					</div>
				</div>
			<!-- <h2><a href="#" class="btn btn-ssl"><b>ĐĂNG KÝ NGAY</b></a><br></h2> -->
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
<style type="text/css">
	.ssl-step .ssl-reg{
		margin: 0px 13%;
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
		height: 30px;
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
