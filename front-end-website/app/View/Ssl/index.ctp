<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <?php echo $this->Html->css('ssl.css'). "\n"; ?>
	<div class="pay_step">
		<img src="img/SSL.png" class="img-responsive">
	</div>
	<div class="slect_search_domain domain-ssl">
		<div class="container">
			<form action="" method="">
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
					<label>Tìm kiếm gói SSL</label>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9" id="search">
					<input type="text" name="domain" id="input" class="form-control" placeholder="http://Tên miền">
				</div>
			</form>
		</div>
	</div>
	<div class="ssl-plan">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<h3><b>KHỞI TẠO NGAY HTTPS CÙNG SSL GLOBALSIGN TẠI VTC</b></h3>
					
				</div>
			</div>
			<form id="domainSSLform" action="" method="post">
				<input name="ssl_id" type="hidden" value="" id="value_code">
			<div class="row">
				<?php foreach ($data as $item) { ?>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 text-center">
						<div class=" ssl-item">
							<div class="ssl-name">
								<h4><b><?php echo $item['ProductPrice']['product_name'] ?></b></h4>
								<p><b>Fast & Economical</b></p>
							</div>	
							<div class="ssl-1">
									<p>Free .com/ .net/<br>.org/ .info/ .biz</p>
							</div>
							<div class="ssl-price">
								<h2><b><?php echo number_format( $item['ProductPrice']['price'],0,',','.')?> đ/năm</b></h2>
							</div>
							<div class="ssl-2">
								<p><i class="material-icons" style="font-size:15px">lock</i>https:// Tên miền</p>
							</div>
							<div class="ssl-3">
								<ul>
									<li>Cấp phát nhanh chóng.</li>
									<li>Lựa chọn lý tưởng cho các website non trẻ</li>
								</ul>
									<!-- <a href="#" class="btn btn-ssl">ĐĂNG KÝ NGAY</a><br> -->
									<input onclick="submitdomainSSLform('<?php echo $item['ProductPrice']['id'] ?>')" type="button" class="btn btn-ssl" value="ĐĂNG KÝ NGAY"><br>
									<a href="#"> Xem chi tiết</a>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
			</form>
		</div>
	</div>
	<div class="ssl-procedure">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<h3><b>QUY TRÌNH ĐĂNG KÍ</b></h3>
				</div>
			</div>
			<div class="row ssl-step">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="ssl-step1 ff5c93">
						<span><b>01</b></span>
						<div class="rectangle"></div>
						<div class=" triangle"></div>
					</div>
					<div class="ssl-step2">
						<p>Khách hàng ký hợp đồng với TENTEN khách hàng giữ 1 bản,VTC giữ 1 bản.</p>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="ssl-step1 c65c5c1">
						<span><b>02</b></span>
						<div class="rectangle"></div>
						<div class=" triangle"></div>
					</div>
					<div class="ssl-step2">
						<p>Khách hàng thanh toán 100% giá trị hợp đồng cho VTC.</p>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="ssl-step1 fecc2b">
						<span><b>03</b></span>
						<div class="rectangle"></div>
						<div class=" triangle"></div>
					</div>
					<div class="ssl-step2">
						<p>Khách hàng gửi bản Softcopy Bộ hồ sơ đăng ký theo yêu cầu cụ thể với từng loại SSL.</p>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="ssl-step1 cc8ce3">
						<span><b>04</b></span>
						<div class="rectangle"></div>
						<div class=" triangle"></div>
					</div>
					<div class="ssl-step2">
						<p>VTC tiến hành đăng ký Chứng thư số SSL cho khách hàng, đồng thời phối hợp, điều chỉnh và bổ sung các thông tin cần thiết để đáp ứng tiêu chuẩn kiểm duyệt. Sau đó VTC gửi lại khách hàng “Bản khai đăng ký sử dụng Chứng thư số SSL”.ký theo yêu cầu cụ thể với từng loại SSL.</p>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="ssl-step1 fa987f">
						<span><b>05</b></span>
						<div class="rectangle"></div>
						<div class=" triangle"></div>
					</div>
					<div class="ssl-step2">
						<p>Khách hàng ký, đóng dấu và các thỏa thuận sử dụng SSL theo mẫu của GlobalSign, sau đó gửi bản scan định dạng PDF vào địa chỉ mail của VTC.</p>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="ssl-step1 c83c2f8">
						<span><b>06</b></span>
						<div class="rectangle"></div>
						<div class=" triangle"></div>
					</div>
					<div class="ssl-step2">
						<p>VTC và GlobalSign tiến hành kiểm duyệt, cấp phát Chứng thư số SSL GlobalSign cho khách hàng.</p>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="ssl-step1 c8acf5a">
						<span><b>07</b></span>
						<div class="rectangle"></div>
						<div class=" triangle"></div>
					</div>
					<div class="ssl-step2">
						<p>Hệ thống cấp phát SSL GlobalSign và gửi thông báo hướng dẫn kích hoạt SSL tới Địa chỉ mail Admin của Website do khách hàng đăng ký.</p>
					</div>
				</div>
			</div>
			<div class="row ssl-note">
				<p>Nếu quý khách hàng có bất cứ thắc mắc nào về SSL, vui lòng gửi email đến hòm thư: ssl@VTC.vn để đc giải đáp</p>
			</div>

			<h2><a href="<?php echo $this->Html->url(array('controller' => 'ssl','action' => 'register'));?>" class="btn btn-ssl"><b>ĐĂNG KÝ NGAY</b></a><br></h2>
		</div>	
	</div>

<style type="text/css">
	
</style>
<script type="text/javascript">
	function submitdomainSSLform(code) {

                jQuery("#value_code").val(code);
                jQuery("#domainSSLform").submit();
            }
</script>