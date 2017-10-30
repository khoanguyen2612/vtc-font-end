    <link href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.9.0/css/bootstrap-slider.min.css' rel='stylesheet' type='text/css'>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.9.0/bootstrap-slider.min.js" type="text/javascript"></script>
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
				<div class="col-lg-7">
					<div class="row"  id="store_op">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center">
							<img src="img/store_icon.png">
						</div>
						<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" id="select_hdd">
							<span style="width: 100%">
								<input id="hdd" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="2000" data-slider-step="10" data-slider-value="0"/>
							</span>
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="row" id="os_op">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center">
							<img src="img/setting_os.png">
						</div>
						<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" id="select_os">
							<a href="Cloud_server_Linux.html" class="choiced">LINUX</a>
							<a href="Cloud_server_Window.html">WINDOWS</a>
						</div>
					</div>
				</div>
			</div>
			<div class="cloud_content">
				<div class="row" id = "plan-data">
					<?php foreach ($data as $item) {
					 ?>
					<div class="col-md-6 col-lg-4 item-<?php echo $item['Plan']['id']?>" >
						<?php 
							if($best_seller==$item['Plan']['id']){ 
								echo '<div class="cloud_item cloud_topsell">
								<span id="cloud_top">Best Seller</span>';}
							else{ 
								echo '<div class="cloud_item">';} 
						?>
							<h4><?php echo $item['Productprice']['product_name']?></h4>
							<div class="price" >
								<h3 id="item-<?php echo $item['Plan']['id']?>" val = <?php echo $item['Productprice']['price']?>><?php echo $item['Productprice']['price']?><small>VND/THÁNG</small></h3>
								
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
					<!-- <div class="col-md-6 col-lg-4">
						<div class="cloud_item">
							<h4>CLOUD SERVER 1</h4>
							<div class="price">
								<h3>510.000<small>VND/THÁNG</small></h3>
								<p>Regularly $16.99</p>
							</div>
							<img src="img/narrow_cloud.png" class="img-responsive">
							<div class="cloud-config">
								<p>1 CPU</p>
								<p>1 RAM</p>
								<p>20 Dung lượng ổ cứng</p>
								<p class="cpu">1 Địa chỉ Internet</p>
								<a href="" class="btn btn-info">ĐĂNG KÝ</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="cloud_item">
							<h4>CLOUD SERVER 1</h4>
							<div class="price">
								<h3>510.000<small>VND/THÁNG</small></h3>
								<p>Regularly $16.99</p>
							</div>
							<img src="img/narrow_cloud.png" class="img-responsive">
							<div class="cloud-config">
								<p>1 CPU</p>
								<p>1 RAM</p>
								<p>20 Dung lượng ổ cứng</p>
								<p class="cpu">1 Địa chỉ Internet</p>
								<a href="" class="btn btn-info">ĐĂNG KÝ</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="cloud_item">
							<h4>CLOUD SERVER 1</h4>
							<div class="price">
								<h3>510.000<small>VND/THÁNG</small></h3>
								<p>Regularly $16.99</p>
							</div>
							<img src="img/narrow_cloud.png" class="img-responsive">
							<div class="cloud-config">
								<p>1 CPU</p>
								<p>1 RAM</p>
								<p>20 Dung lượng ổ cứng</p>
								<p class="cpu">1 Địa chỉ Internet</p>
								<a href="" class="btn btn-info">ĐĂNG KÝ</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="cloud_item">
							<h4>CLOUD SERVER 1</h4>
							<div class="price">
								<h3>510.000<small>VND/THÁNG</small></h3>
								<p>Regularly $16.99</p>
							</div>
							<img src="img/narrow_cloud.png" class="img-responsive">
							<div class="cloud-config">
								<p>1 CPU</p>
								<p>1 RAM</p>
								<p>20 Dung lượng ổ cứng</p>
								<p class="cpu">1 Địa chỉ Internet</p>
								<a href="" class="btn btn-info">ĐĂNG KÝ</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						
						<div class="cloud_item cloud_topsell">
							<span id="cloud_top">Best Seller</span>
							<h4>CLOUD SERVER 1</h4>
							<div class="price ">
								<h3>510.000<small>VND/THÁNG</small></h3>
								<p>Regularly $16.99</p>
							</div>
							<img src="img/narrow_bestcloud.png" class="img-responsive">
							<div class="cloud-config">
								<p>1 CPU</p>
								<p>1 RAM</p>
								<p>20 Dung lượng ổ cứng</p>
								<p class="cpu">1 Địa chỉ Internet</p>
								<a href="" class="btn btn-info">ĐĂNG KÝ</a>
							</div>
						</div>
					</div> -->
				</div>
			</div>
			<div class="addon_service">
				<h3>DỊCH VỤ BỔ SUNG</h3>
				<div class="row option">
					<div class="col-md-6 col-lg-6">
						<p>SSD Option <span>50Gb - 100,000</span> <strong> đ/tháng</strong> </p>
						<p>SSD Option <span>300Gb - 600,000</span> <strong>đ/tháng</strong> </p>
						<p>IP Option (1-2-4-8-16 IP) <span>100,000</span> <strong>đ/tháng</strong></p>
						<p>Load Balance <span>200,000</span> <strong>đ/tháng</strong></p>
						<p>Auto backup (snaptshot) <span>75,000</span> <strong>đ/tháng</strong> </p>
					</div>
					<div class="col-md-6 col-lg-6">
						<p>SSD Option <span>150Gb - 300,000</span> <strong>đ/tháng</strong></p>
						<p>SSD Option <span>700Gb - 1,400,000</span> <strong>đ/tháng</strong></p>
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
</style>
<script type="text/javascript">
	// With JQuery
	$("#hdd").slider({
		tooltip: 'always'
	});

$(document).ready(function(){
	$('#hdd').change(function(){
		$.ajax({
                url : "<?php echo $this->Html->url(array('controller'=>'Cloudservers','action'=>'price_hdd'))?>",
                type : "post",
                dataType:"html",
                data : {
                    hdd : $('#hdd').val(),
                    //arr: arr
                },
                success : function (result){
                	$('#plan-data').html(result)
                }
        	});
        });
 });
</script>
