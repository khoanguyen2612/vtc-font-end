<div class="location_service">
	<div class="l_banner">
		<?php echo $this->Html->image('l_banner.jpeg',array('id'=>'lbanner_img','class'=>'img-responsive')); ?>
		<div class="l_title">
			<h1>DỊCH VỤ CHO THUÊ CHỖ ĐẶT THIẾT BỊ</h1>
			<p> VTC mang đến không gian, hạ tầng chỗ đặt lý tưởng, công cụ quản lý thông minh, dịch vụ chất lượng, 
				cho phép bạn và doanh nghiệp của mình an tâm trao gửi niềm tin.
			</p>
		</div>
	</div>
	<?php echo $this->Form->create(false, array('url' => array('controller' => 'CoLocations', 'action' => 'submit_info'),'id' => 'Form_submit'));?>
	<input type="hidden" name="packvalue" value="">
	<?php echo $this->Form->end();?>
	<!-- for content page -->
	<?php echo stripslashes($content['0']['Staticpages']['head_service']); ?>
	<?php echo stripslashes($content['0']['Staticpages']['content']); ?>
	<!-- end content page -->
</div>
<div class="contact_us">
	<div class="container">
		<h3 class="text-center">LIÊN HỆ VỚI CHÚNG TÔI</h3>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
			<div class="sale">
				<div class="img_radius">
					<?php echo $this->Html->image('sale.jpeg') ?>
				</div>
				<h5>Nhân viên kinh doanh 1</h5>
				<p>Ms Thiên Thanh: </p>
				<span>(08) 4450 3077</span>
				<h5>Nhân viên kinh doanh 2</h5>
				<p>Ms Thiên Thanh:</p>
				<span> (08) 4450 3077</span>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
			<div class="messa_sp">
				<div class="img_radius">
					<?php echo $this->Html->image('messa_sp.jpeg') ?>
				</div>
				<h5>Chăm sóc khách hàng</h5>
				<span>19006868</span>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
			<div class="tech_sp">
				<div class="img_radius">
					<?php echo $this->Html->image('tech_sp.jpeg') ?>
				</div>
				<h5>Hỗ trợ kỹ thuật</h5>
				<p>Mr Thiên Thanh:</p>
				<span>(08) 4450 3077</span>
			</div>
		</div>
	</div>
</div>
<div class="contac_info">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contact_vtc">
				<h3>VTC CLOUD Nhà cung cấp tên miền và Cloud server số 1 Việt Nam</h3>
				<p>
					Nhà cung cấp tên miền và Cloud server số 1 Việt Nam <br>
					Trụ sở chính: Toà nhà VTC, 23 Phố Lạc Trung, Vĩnh Tuy, Hai Bà Trưng, Hà Nội  <br>
					VP miền Nam: Tầng 4, 88A-B Trần Huy Liệu, P.15, Q. Phú Nhuận, Tp. Hồ Chí Minh  <br>
					Hotline: Miền Nam: (08) 4450 3077 - Miền Bắc: (04) 4450 5566  <br>
					Email: cloud.info@vtc.vn  <br>
					Hotline: Miền Nam: (08) 4450 3077 - Miền Bắc: (04) 4450 5566
				</p>
			</div>
		</div>
	</div>
</div>
<style type="text/css">
.flash{
	color: #e80000;
	font-size: 24px;
	font-weight: 600;
	text-transform: uppercase;
}
</style>
<script type="text/javascript">
	$('.location_item a').click(function(event){
		//alert($(this).attr('pack-val'));
		$('input[name="packvalue"]').val($(this).attr('pack-val'));
		$('#Form_submit').submit();
		event.preventDefault();
	});
</script>