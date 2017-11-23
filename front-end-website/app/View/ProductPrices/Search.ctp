<div class="search-domain">
		<div class="container-fluid">
			<h3 class="text-center">KIỂM TRA TÊN MIỀN</h3>
				<ul class="nav nav-tabs container">
					<li>
						<a href="<?php echo $this->Html->url(array('controller'=>'ProductPrices','action'=>'register_domain'),true);?>">
						Đăng ký tên miền
						</a>
					</li>
					<li>
						<a href="">Chuyển đổi nhà cung cấp</a>
					</li>
					<li class="active">
						<a href="<?php echo $this->Html->url(array('controller'=>'ProductPrices','action'=>'result_search'),true);?>">
						Kiểm tra tên miền
						</a>
					</li>
					<li>
						<a href="<?php echo $this->Html->url(array('controller' => 'ProductPrices', 'action' => 'price'), true); ?>">Bảng giá tên miền</a>
					</li>
				</ul>
			<hr>
			<div class="tab-content container">
				<div id="check" class="tab-pane fade in active">
					<div class="row">
						<form action="" method="POST">
							<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
								<p><span>1</span>Nhập các tên miền cần kiểm tra</p>
								<textarea rows="4" cols="50" name="search"></textarea>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">							
									<ul class="list-inline domain_name">
										<?php foreach ($data as $item) { ?>
												<li><input type="radio" name="product_id" value="<?php echo $item['product_price']['id'] ?>"><label><?php echo $item['product_price']['product_name'] ?></label></li>
										<?php }  ?>
									</ul>							
							</div>
							<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
								<p><span>3</span>Click để kiểm tra</p>
								<button type="submit">Kiểm tra</button>
							</div>
						</form>
					</div>
					<hr>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<p><span>4</span>Kết quả kiểm tra tên miền</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


 <!-- 	$.ajax({
        type: "POST",
        data: "submit=1&username="+username+"&email="+email+"&password="+password+"&passconf="+passconf,
        url: "http://rt.ja.com/includes/register.php",
        success: function(data)
        {   
            //alert(data);
            $('#userError').html(data);
            $("#userError").html(userChar);
            $("#userError").html(userTaken);
        }
    });   -->