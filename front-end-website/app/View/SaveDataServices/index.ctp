<div class="location_service" id="save_service">
	<div class="mana_banner">
		<img src="img/dich-vu-sao-luu-du-lieu.png" alt="" id="lbanner_img" class="img-responsive" style="height: 100%;">
		<h1>DỊCH VỤ SAO LƯU DỮ LIỆU</h1>
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
<style type="text/css">
	#save_service .location_item h3{
		width: 230px !important;
		padding-left: 0px !important;
		padding-right: 0px !important;
	}
</style>
<script type="text/javascript">
	$('.location_item a').click(function(event){
		//alert($(this).attr('pack-val'));
		$('input[name="pack_id"]').val($(this).attr('pack-val'));
		$('#submit').submit();
		event.preventDefault();
})
</script>
