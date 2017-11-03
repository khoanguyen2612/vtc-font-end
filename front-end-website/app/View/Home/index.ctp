	<div class="banner">
		<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1920px;height:600px;overflow:hidden;visibility:hidden;background-color:#24262e;">
			<div data-u="slides" style="cursor:default;position:relative;top:0px;left:400px;width:1520px;height:600px;overflow:hidden;">
				<div>
					<img data-u="image" src="img/slide_img1.jpg" />
					<img data-u="thumb" src="img/slide_thumb_img1.jpg" />
				</div>
				<div>
					<img data-u="image" src="img/slide_img2.jpg" />
					<img data-u="thumb" src="img/slide_thumb_img2.jpg" />
				</div>
				<div>
					<img data-u="image" src="img/slide_img3.jpg" />
					<img data-u="thumb" src="img/slide_thumb_img3.jpg" />
				</div>
			</div>
			<!-- Thumbnail Navigator -->
			<div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;top:0px;width:400px;height:600px;" data-autocenter="2" data-scale-left="0.75">
				<div data-u="slides">
					<div data-u="prototype" class="p" style="width:355px;height:130px;">
						<div data-u="thumbnailtemplate" class="t"></div>
						<svg viewbox="0 0 16000 16000" class="cv">
						</svg>
					</div>
				</div>
			</div>
			<!-- Arrow Navigator -->
			<div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:430px;" data-autocenter="2">
				<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
					<img src="img/button_prev.png" height="100%">
				</svg>
			</div>
			<div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2">
				<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
					<img src="img/button_next.png" height="100%">
				</svg>
			</div>
		</div>
	</div>
	<div class="slect_search_domain">
		<div class="container">
			<form action="Domain_search.html" method="GET">
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
					<label>Tìm kiếm tên miền của bạn:</label>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" id="search">
					<input type="text" name="" id="input" class="form-control" placeholder="Viết tên miền của bạn vào đây....">
					<i class="btn" id="choice_list_domain"><span class="caret"></span></i>
					<ul class="list-group list-unstyled" id="menu_list">
						<li><input type="checkbox" name=""> <span>.com</span></li>
						<li><input type="checkbox" name=""> <span>.net</span></li>
						<li><input type="checkbox" name=""> <span>.org</span></li>
						<li><input type="checkbox" name=""> <span>.vn</span></li>
						<li><input type="checkbox" name=""> <span>.biz</span></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
					<button type="submit">Tìm kiểm</button>
				</div>
			</form>
		</div>
	</div>
	<div class="clouds-plan">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" id="cloud_head">
					<h3>CÁC GÓI DỊCH VỤ ĐANG BÁN CHẠY</h3>
					<p>Đăng ký ngay bây giờ để dùng miễn phí mọi tính năng của Cloud Server trong 7 ngày
					</p>
					<p>Bạn có thể tạo được 2 server với cấu hình 2 CPU - 2 GB RAM với tổng cộng 160 GB ổ cứng.</p>
				</div>
			</div>
			<div class="row">
				<?php foreach ($planw as $item) { ?>	
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 text-center">
					<?php 
						if($best_seller==$item['Plan']['id']){
							echo '
								<span class="top-sell-icon">Best Seller</span>
								<div class="cloud-item best_seller">';
						}else{
							echo '<div class="cloud-item">';
						}
					?>
						<h4><?php echo $item['ProductPrice']['product_name']?></h4>
						<div class="cloud-register">
							<h3><?php echo number_format($item['ProductPrice']['price'])?><small> VND/THÁNG</small></h3>
							
						</div>
						<div class="cloud-config">
							<p><?php echo $item['Plan']['cpu']?> CPU</p>
							<p><?php echo $item['Plan']['ram']?> RAM</p>
							<p><?php echo $item['Plan']['hdd']?>G Dung lượng ổ cứng</p>
							<p class="cpu"><?php echo $item['Plan']['ip']?> Địa chỉ Internet</p>
							<a href="" class="btn btn-info">ĐĂNG KÝ</a>
						</div>
					</div>
				</div>
					
				<?php }?>
			</div>
		</div>
	</div>
	<div class="our_service">
		<div class="container">
			<div class="row">
				<h3 class="text-center">DỊCH VỤ CỦA CHÚNG TÔI</h3>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 cloud-server">
					<img src="img/our_service_icon1.png" class="img-responsive">
					<h4 class="text-left">VTC Cloud Server</h4>
					<p class="text-left">
						<a href="">http://cloud.vtc.vn/content.php?id=6</a>
					</p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 cloud-strorage">
					<img src="img/our_service_icon2.png" class="img-responsive">
					<h4 class="text-left">VTC Cloud Storage</h4>
					<p class="text-left">
						<a href="">http://cloud.vtc.vn/content.php?id=6</a>
					</p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 cloud-small">
					<img src="img/our_service_icon3.png" class="img-responsive">
					<h4 class="text-left">VTC Cloud Storage</h4>
					<p class="text-left">
						<a href="">http://cloud.vtc.vn/content.php?id=6</a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="mid_slide">
		<div class="container-fluid">
			<div id="link_navi">
				<ul>
					<li class="item_1"><img src="img/slide_icon1.png"><a href="javascript:void(0)">Mua .VN tặng Email Server</a></li>
					<li class="item_2"><img src="img/slide_icon2.png"><a href="javascript:void(0)">Tên miền Tiếng Việt .VN</a></li>
					<li class="item_3"><img src="img/slide_icon3.png"><a href="javascript:void(0)">Chuyển nhượng quyền sử dụng .VN</a></li>
					<li class="item_4"><img src="img/slide_icon4.png"><a href="javascript:void(0)">Mua Hosting tặng website</a></li>
					<li class="item_5"><img src="img/slide_icon5.png"><a href="javascript:void(0)">Tên miền 1K + Hosting</a></li>
				</ul>
			</div>
			<div id="image">
				<img src="img/slide_pic5.png" class="img-responsive">
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="contact_us">
		<div class="container">
			<h3 class="text-center">LIÊN HỆ VỚI CHÚNG TÔI</h3>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
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
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
				<div class="messa_sp">
					<div class="img_radius">
						<img src="img/messa_sp.jpeg">
					</div>
					<h5>Chăm sóc khách hàng</h5>
					<span>19006868</span>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
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
	<div class="pay_step">
		<img src="img/regis_now.jpeg" class="img-responsive">
	</div>
	<div class="news_area">
		<div class="container">
			<h4 class="text-center title_area">TIN TỨC</h4>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<div id="post_news">
						<h4 class="text-center"><a href="">Tin tức</a></h4>
						<ul class="list-group">
							<li class="list-group-item">
								<a href="">
									<span>01.09.2017</span>
									<span>Ra mắt sản phẩm mới</span>
								</a>
							</li>
							<li class="list-group-item">
								<a href="">
									<span>01.09.2017</span>
									<span>Phương thức thanh toán mới</span>
								</a>
							</li>
							<li class="list-group-item">
								<a href="">
									<span>01.09.2017</span>
									<span>Áp dụng nghiệp vụ chuyển nhương tên miền</span>
								</a>
							</li>
							<li class="list-group-item">
								<a href="">
									<span>01.09.2017</span>
									<span>Ra mắt sản phẩm mới</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<div id="post_noti">
						<h4 class="text-center"><a href="">Thông báo</a></h4>
						<ul class="list-group">
							<li class="list-group-item">
								<a href="">
									<span>01.09.2017</span>
									<span>Ra mắt sản phẩm mới</span>
								</a>
							</li>
							<li class="list-group-item">
								<a href="">
									<span>01.09.2017</span>
									<span>Phương thức thanh toán mới</span>
								</a>
							</li>
							<li class="list-group-item">
								<a href="">
									<span>01.09.2017</span>
									<span>Áp dụng nghiệp vụ chuyển nhương tên miền </span>
								</a>
							</li>
							<li class="list-group-item">
								<a href="">
									<span>01.09.2017</span>
									<span>Ra mắt sản phẩm mới</span>
								</a>
							</li>
						</ul>
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