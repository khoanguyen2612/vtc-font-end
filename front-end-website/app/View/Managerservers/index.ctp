<div class="location_service">
	<div class="l_banner">
		<?php echo $this->Html->image('l_banner.jpeg',array('class'=>'img-responsive','id'=>'lbanner_img')); ?>
		<div class="l_title">
			<h1>DỊCH VỤ QUẢN TRỊ CLOUDSERVER</h1>
			<p>
				VTC mang đến không gian, hạ tầng chỗ đặt lý tưởng, công cụ quản lý thông minh, dịch vụ chất lượng, 
				cho phép bạn và doanh nghiệp của mình an tâm trao gửi niềm tin.
			</p>
		</div>
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
<script type="text/javascript">
	$('.mana_item a').click(function(event){
		//alert($(this).attr('pack-val'));
		$('input[name="pack_id"]').val($(this).attr('pack-val'));
		$('#submit').submit();
		event.preventDefault();
})
</script>
