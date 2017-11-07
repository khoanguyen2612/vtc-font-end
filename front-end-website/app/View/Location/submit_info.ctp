	<div class="container submit_info">
		<div class="row">
			<form class="form-horizontal" action="" method="post">
				<div class="col-lg-9">
					<h4>Quý khách vui lòng nhập đầy đủ thông tin dưới đây</h4>
					<div class="form-group">
						<label class="control-label col-sm-2" for="name">Họ tên:</label>
						<div class="col-sm-10">
							<input type="name" class="form-control" id="name" name="data[ServiceRequest][name]" required>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="birth">Ngày sinh</label>
						<div class="col-sm-10">          
							<input type="date" class="form-control" id="birth"  name="data[ServiceRequest][birth]" required="">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="cmnd">Số CMND</label>
						<div class="col-sm-10">          
							<input type="text" class="form-control" id="cmnd" name="data[ServiceRequest][cmnd]">
							<p class="error"><?php echo isset($validationErrors['cmnd'])? $validationErrors['cmnd'][0]:''; ?></p>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="phone">Số điện thoại:</label>
						<div class="col-sm-10">          
							<input type="text" class="form-control" id="phone"  name="data[ServiceRequest][phone]">
							<p class="error"><?php echo isset($validationErrors['phone'])? $validationErrors['phone'][0]:''; ?></p>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="email">Email</label>
						<div class="col-sm-10">          
							<input type="text" class="form-control" id="email"  name="data[ServiceRequest][email]">
							<p class="error"><?php echo isset($validationErrors['email'])? $validationErrors['email'][0]:''; ?></p>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="addr">Địa chỉ liên lạc:</label>
						<div class="col-sm-10">          
							<input type="text" class="form-control" id="addr"  name="data[ServiceRequest][addr]" required>
						</div>
					</div>
					<div class="form-group">        
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-info">Gửi</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<style type="text/css">
	.submit_info label{
		text-transform: uppercase;
		text-align: left !important;
	}
	.submit_info input{
		border-radius: 3px;
	}
	.submit_info input[type=date]{
		width: 160px;
	}
	.submit_info .error{
		color:#ea1e1e;
		padding: 5px 0px;
	}
	.submit_info .package_info{
		margin-top: 30px;
	}
	.submit_info .package_name{
		margin-top: 20px;
	}
	.submit_info h4{
		margin: 30px auto 30px auto;
	}
	.submit_info button{
		display: block;
		margin: auto;
	}
</style>
