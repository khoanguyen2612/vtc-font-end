<div class="container send_info">
	<div class="row centered-form">
		<div class="col-xs-12 col-sm-8 col-sm-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 style="text-align:center;margin: 0;font-weight: 600">NHẬP THÔNG TIN LIÊN HỆ</h3>
				</div>
				<div class="panel-body">
					<form role="form" method="POST" action="">
						<div class="form-group">
							<input type="text" name="data[ServiceRequest][name]" id="name" class="form-control input-sm" placeholder="Họ Tên">
							<p class="error"><?php echo isset($validationErrors['name'])? $validationErrors['name'][0]:''; ?></p>
						</div>
						<div class="form-group">
							<input type="email" name="data[ServiceRequest][email]" id="email" class="form-control input-sm" placeholder="Địa Chỉ Email">
							<p class="error"><?php echo isset($validationErrors['email'])? $validationErrors['email'][0]:''; ?></p>
						</div>		
						<div class="form-group">
							<input type="text" name="data[ServiceRequest][phone]" id="phone" class="form-control input-sm" placeholder="Số Điện Thoại">
							<p class="error"><?php echo isset($validationErrors['phone'])? $validationErrors['phone'][0]:''; ?></p>
						</div>
						<div class="form-group">
							<input type="text" name="data[ServiceRequest][address]" class="form-control input-sm" placeholder="Địa Chỉ Liên Hệ">
							<p class="error"><?php echo isset($validationErrors['address'])? $validationErrors['address'][0]:''; ?></p>
						</div>
						<input type="submit" value="GỬI YÊU CẦU" class="btn btn-info btn-block">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<style type="text/css">
.centered-form{
	margin-top: 60px;
}
.centered-form .panel{
	background: rgba(255, 255, 255, 0.8);
	box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}
.send_info{
	background-color: #847d7d;
	padding-bottom: 40px;
}
input[type=submit]{
	display: block;
	auto;
	200px !important;
}
.error{
		margin-left: 5px;
		color:#ea1e1e;
		5px 0px;
}
</style>
