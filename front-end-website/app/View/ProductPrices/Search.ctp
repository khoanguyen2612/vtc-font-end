
<div class="search-domain">
		<div class="container-fluid">
			<h3 class="text-center">KIỂM TRA TÊN MIỀN</h3>
			<ul class="nav nav-tabs container">
				<li><a data-toggle="tab" href="#regis">Đăng ký tên miền</a></li>
				<li><a data-toggle="tab" href="#transfer">Chuyển đổi nhà cung cấp</a></li>
				<li class="active"><a data-toggle="tab" href="#check">Kiểm tra tên miền</a></li>
				<li><a data-toggle="tab" href="#price_menu">Bảng giá tên miền</a></li>
			</ul>
			<hr>
			<div class="tab-content container">
				<div id="regis" class="tab-pane fade ">
					<h3>regis</h3>
					<p>Some content.</p>
				</div>
				<div id="transfer" class="tab-pane fade">
					<h3>Menu 1</h3>
					<p>transfer content in menu 1.</p>
				</div>
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