    <?php echo $this->Html->css('ssl.css'). "\n"; ?>
	<div class="pay_step">
		<?php echo $this->Html->image('SSL.png',array('class'=>'img-responsive')); ?>
	</div>
	<div class="ssl-complete cart">
		<div class="container">
			<div class="row">
				<p class="congra"><?= $this->Html->image('icon-wonder.png'); ?>	ĐĂNG KÍ THÀNH CÔNG<br>
				Cảm ơn Quý khách đã đăng ký sử dụng dịch vụ tại VTC</p>
			</div>
			<div class="row note">
				<p>Thông tin đơn hàng đăng ký đã được gửi vào email (tên email đăng kí tài khoản)</p>
				<p>Để sử dụng dịch vụ đã đăng ký, Quý khách vui lòng thanh toán theo hình thức phù hợp nhất. Nếu có bất kỳ thắc mắc liên quan đến thanh toán hoặc xuất hoá đơn, Quý khách vui lòng liên hệ với VTC theo số điện thoạ(04)4450556 hoặc gửi yêu cầu đến hộp thư cloud.info@vtc.vn để VTC hỗ trợ Quý khách một cách kịp thời nhất</p>
			</div>

		</div>
	</div>

	<style>
		.ssl-complete{
			margin-top: 40px;
			margin-bottom: 70px;
		}
		.ssl-complete .row{
			position: relative;
			max-width: 900px;
			0px auto 0px auto;
			text-align: center;
		}

		.ssl-complete img{
			position: absolute;
			10%;
			30px;
		}
		.ssl-complete .congra {
		    padding-top: 10px;
		    padding-bottom: 10px;
		    margin-bottom: 0px;
		}
		.cart p.congra {
		     height: auto; 
		}
		.ssl-complete .note{
			background: #f3f3f3;
			text-align: left;
			40px 40px;
		}

	</style>
