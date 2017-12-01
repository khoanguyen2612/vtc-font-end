    <link href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.9.0/css/bootstrap-slider.min.css' rel='stylesheet' type='text/css'>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.9.0/bootstrap-slider.min.js" type="text/javascript"></script>

    <?php echo $this->Html->css('style_cloud.css'). "\n"; ?>
	<div class="cloud_server">
		<div class="container">
			<div class="cloud_head text-center">
				<h3>
					CLOUD SERVER <br>
					Nhanh, ổn định, nhiều sự lựa chọn
				</h3>
				<p>
					Được hỗ trợ kỹ thuật 24/7 qua điện thoại, email và helpdesk. <br>
					Xem thêm Cloud Server Windows Xem thêm Quản Trị Máy Chủ
				</p>
			</div>
			<div class="row cloud_op">
				<div class="col-lg-3">
					<!-- <div class="row"  id="store_op"> -->
						<!-- <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center">
							<img src="img/store_icon.png">
						</div>
						<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" id="select_hdd">
							<span style="width: 100%">
								<input id="hdd" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="2000" data-slider-step="10" data-slider-value="0"/>
							</span>
						</div> -->
					<!-- </div> -->
				</div>
				<div class="col-lg-6">
					<div class="row" id="os_op">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center">
							<img src="img/setting_os.png">
						</div>
						<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" id="select_os">
							<!-- <a href="#CSLinux" class="choiced">LINUX</a>
							<a href="#CSWindown">WINDOWS</a> -->
							<ul class="nav nav-tabs">
								<li id='linux' class="active"><a data-toggle="tab" href="#CSLinux">LINUX</a></li>
								<li><a data-toggle="tab" href="#CSWindown">WINDOWS</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="cloud_content tab-content"  id = "plan-data">
				<div id="CSLinux" class="tab-pane fade in active">
					<div class="row" id='cll'>
						<?php foreach ($datal as $item) {
						 ?>
						<div class="col-md-6 col-lg-4 item-<?php echo $item['Plan']['id']?>" >
							<?php 
								if($best_seller==$item['Plan']['id']){ 
									echo '<div class="cloud_item cloud_topsell">
									<span id="cloud_top">Best Seller</span>';}
								else{ 
									echo '<div class="cloud_item">';} 
							?>
								<h4><?php echo $item['ProductPrice']['product_name']?></h4>
								<div class="price" >
									<h3 id="item-<?php echo $item['Plan']['id']?>" val = <?php echo number_format($item['ProductPrice']['price']);?>><?php echo number_format($item['ProductPrice']['price'], 0, ',', '.')?><small>VND/THÁNG</small></h3>
									
								</div>
								<?php 
									if($best_seller==$item['Plan']['id']){ 
										echo '<img src="img/narrow_bestcloud.png" class="img-responsive">';}
									else{ 
										echo '<img src="img/narrow_cloud.png" class="img-responsive">';} 
								?>
								<div class="cloud-config">
									<p><?php echo $item['Plan']['cpu']?> CPU</p>
									<p><?php echo $item['Plan']['ram']?> RAM</p>
									<p class='hdd-hdd' plan_id = <?php echo $item['Plan']['id']?> val = <?php echo $item['Plan']['hdd']?>><?php echo $item['Plan']['hdd']?>G Dung lượng ổ cứng</p>
									<p class="cpu"><?php echo $item['Plan']['ip']?> Địa chỉ Internet</p>
									<a href="" class="btn btn-info">ĐĂNG KÝ</a>
								</div>
							</div>
						</div>
						<?php }?>
					</div>
				</div>
				<div id="CSWindown" class="tab-pane fade">
					<div class="row" id='clw'>
						<?php foreach ($dataw as $item) {
						 ?>
						<div class="col-md-6 col-lg-4 item-<?php echo $item['Plan']['id']?>" >
							<?php 
								if($best_seller==$item['Plan']['id']){ 
									echo '<div class="cloud_item cloud_topsell">
									<span id="cloud_top">Best Seller</span>';}
								else{ 
									echo '<div class="cloud_item">';} 
							?>
								<h4><?php echo $item['ProductPrice']['product_name']?></h4>
								<div class="price" >
									<h3 id="item-<?php echo $item['Plan']['id']?>" val = <?php echo $item['ProductPrice']['price']?>><?php echo number_format($item['ProductPrice']['price'], 0, ',', '.')?><small>VND/THÁNG</small></h3>
									
								</div>
								<?php 
									if($best_seller==$item['Plan']['id']){ 
										echo '<img src="img/narrow_bestcloud.png" class="img-responsive">';}
									else{ 
										echo '<img src="img/narrow_cloud.png" class="img-responsive">';} 
								?>
								<div class="cloud-config">
									<p><?php echo $item['Plan']['cpu']?> CPU</p>
									<p><?php echo $item['Plan']['ram']?> RAM</p>
									<p class='hdd-hdd' plan_id = <?php echo $item['Plan']['id']?> val = <?php echo $item['Plan']['hdd']?>><?php echo $item['Plan']['hdd']?>G Dung lượng ổ cứng</p>
									<p class="cpu"><?php echo $item['Plan']['ip']?> Địa chỉ Internet</p>
									<a href="" class="btn btn-info">ĐĂNG KÝ</a>
								</div>
							</div>
						</div>
						<?php }?>
					</div>
				</div>
			</div>

			<div class="addon_service">
				<h3>DỊCH VỤ BỔ SUNG</h3>
				<div class="row option">
					<div class="col-md-6 col-lg-6">
						<p>HDD Option <span>10GB - 100GB</span> <strong>50,000đ/10GB/tháng</strong> </p>
						<p>HDD Option <span>100GB - 200GB</span> <strong>28,000đ/10GB/tháng</strong> </p>
						<p>HDD Option <span>200GB - 500GB</span> <strong>22,000đ/10GB/tháng</strong></p>
						<p>HDD Option <span>500GB - 1000GB</span> <strong>20,000đ/10GB/tháng</strong></p>
						<p>HDD Option <span>trên 1000GB</span> <strong>18,000đ/10GB/tháng</strong> </p>
					</div>
					<div class="col-md-6 col-lg-6">
						<p>IP Option (1-2-4-8-16 IP) <span>100,000</span> <strong>đ/tháng</strong></p>
						<p>Load Balance <span>200,000</span> <strong>đ/tháng</strong></p>
						<p>Plesk (WebHost) <span>300,000</span> <strong>đ/tháng</strong></p>
						<p>Image Storage Space 50Gb - Free /<span>100Gb - 375,000</span><strong>đ/tháng</strong></p>
						<p>Cpanel <span>300,000</span> <strong>đ/tháng</strong></p>
					</div>
				</div>
				<div class="table-responsive">
					<table class="table table-responsive">
						<thead>
							<tr>
								<th></th>
								<th>Plan 2</th>
								<th>Plan 3</th>
								<th>Plan 4</th>
								<th>Plan 5</th>
								<th>Plan 6</th>
								<th>Plan 7</th>
								<th>Plan 8</th>
								<th>Plan 9</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>OS windows Option đ/tháng</td>
								<td>1.000.000</td>
								<td>1.000.000</td>
								<td>1.000.000</td>
								<td>1.000.000</td>
								<td>1.000.000</td>
								<td>1.000.000</td>
								<td>1.000.000</td>
								<td>1.000.000</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
<style type="text/css">
	.slider.slider-horizontal {
	    width: 90%;
	}
	.nav-tabs>li {
	    float: left;
	    margin-bottom: -1px;
	    width: 50%;
	}
	#select_os a {
	    text-decoration: none !important;
	    color: #29353f;
	    display: inline-block;
	    width: 100%;
	    float: left;
	    text-align: center;
	    padding: 20px 0px;
	    cursor: pointer;
	}
	.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
	    color: #555;
	    cursor: default;
	    
    	border: 1px solid #29353f;
	    background-color: #29353f !important;
	    color: #fff !important;
	}
</style>
<script type="text/javascript">
	// With JQuery
	$("#hdd").slider({
		tooltip: 'always'
	});

$(document).ready(function(){
	$('#hdd').change(function(){
		if($('#linux').hasClass('active')){ var linux=1;}
		$.ajax({
                url : "<?php echo $this->Html->url(array('controller'=>'Cloudservers','action'=>'price_hdd'))?>",
                type : "post",
                dataType:"html",
                data : {
                    hdd : $('#hdd').val(),
                    linux : linux,
                },
                success : function (result){
                	$('#plan-data').html(result)
                }
        	});
        });
 });
</script>
