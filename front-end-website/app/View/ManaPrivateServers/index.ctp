<div class="location_service">
	<div class="mana_banner">
		<img src="img/mana_server.jpg" alt="" id="lbanner_img" class="img-responsive">
		<h1>DỊCH VỤ QUẢN TRỊ MÁY CHỦ RIÊNG</h1>
	</div>
	<?php echo $this->Session->flash(); ?>
	<!-- for content page -->
	<?php echo stripslashes($content['0']['Staticpages']['head_service']); ?>
	<?php echo stripslashes($content['0']['Staticpages']['content']); ?>
	<!-- end content page -->
	<?php echo $this->Form->create(false,array('id'=>'submit'));?>
	<input type="hidden" name="pack_id" value="">
	<?php echo $this->Form->end();?>
</div>
<div class="contact_us">
	<div class="container">
		<h3 class="text-center">LIÊN HỆ VỚI CHÚNG TÔI</h3>
		<div class="row">
			<div class="col-md-6 col-lg-4">
				<div class="sale">
					<div class="img_radius">
						<img src="img/sale.jpeg">
					</div>
					<h5>Nhân viên kinh doanh 1</h5>
					<p>Ms Thiên Thanh: </p>
					<span>(08) 4450 3077</span>
					<h5>Nhân viên kinh doanh 2</h5>
					<p>Ms Thiên Thanh:</p>
					<span> (08) 4450 3077</span>
				</div>
			</div>
			<div class="col-md-6 col-lg-4">
				<div class="messa_sp">
					<div class="img_radius">
						<img src="img/messa_sp.jpeg">
					</div>
					<h5>Chăm sóc khách hàng</h5>
					<span>19006868</span>
				</div>
			</div>
			<div class="col-md-6 col-lg-4">
				<div class="tech_sp">
					<div class="img_radius">
						<img src="img/tech_sp.jpeg">
					</div>
					<h5>Hỗ trợ kỹ thuật</h5>
					<p>Mr Thiên Thanh:</p>
					<span>(08) 4450 3077</span>
				</div>
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
					Trụ sở chíToà nhà VTC, 23 Phố Lạc Trung, Vĩnh Tuy, Hai Bà Trưng, Hà Nội  <br>
					VP miền Tầng 4, 88A-B Trần Huy Liệu, P.15, Q. Phú Nhuận, Tp. Hồ Chí Minh  <br>
					Hotline: Miền (08) 4450 3077 - Miền Bắ(04) 4450 5566  <br>
					Email: cloud.info@vtc.vn  <br>
					Hotline: Miền (08) 4450 3077 - Miền Bắ(04) 4450 5566
				</p>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$('.mana_item  a').click(function(event){
		//alert($(this).attr('pack-val'));
		$('input[name="pack_id"]').val($(this).attr('pack-val'));
		$('#submit').submit();
		event.preventDefault();
})
</script>
