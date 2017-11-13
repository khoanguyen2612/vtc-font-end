	<div class="container submit_info">
		<div class="row">
			<form class="form-horizontal" action="" method="post">
				<div class="col-lg-9">
					<h4>Quý khách vui lòng nhập đầy đủ thông tin dưới đây</h4>
					<div class="form-group">
						<label class="control-label col-sm-2" for="name">Họ tên:</label>
						<div class="col-sm-10">
							<input type="name" class="form-control" id="name" name="data[LocationOrder][name]" required>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="birth">Ngày sinh</label>
						<div class="col-sm-10">          
							<input type="date" class="form-control" id="birth"  name="data[LocationOrder][birth]" required="">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="cmnd">Số CMND</label>
						<div class="col-sm-10">          
							<input type="text" class="form-control" id="cmnd" name="data[LocationOrder][cmnd]">
							<p class="error"><?php echo isset($validationErrors['cmnd'])? $validationErrors['cmnd'][0]:''; ?></p>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="phone">Số điện thoại:</label>
						<div class="col-sm-10">          
							<input type="text" class="form-control" id="phone"  name="data[LocationOrder][phone]">
							<p class="error"><?php echo isset($validationErrors['phone'])? $validationErrors['phone'][0]:''; ?></p>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="email">Email</label>
						<div class="col-sm-10">          
							<input type="text" class="form-control" id="email"  name="data[LocationOrder][email]">
							<p class="error"><?php echo isset($validationErrors['email'])? $validationErrors['email'][0]:''; ?></p>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="addr">Địa chỉ liên lạc:</label>
						<div class="col-sm-10">          
							<input type="text" class="form-control" id="addr"  name="data[LocationOrder][addr]" required>
						</div>
					</div>
					<div class="form-group">        
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-info">Gửi</button>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<h4>Thông tin gói đăng ký</h4>
					<p class="package_name">Tên gói: 
						<select id="packlist" name="id">
							<?php foreach($id as $row): ?>
								<option value="<?php echo $row['CoLocation']['id'] ?>" <?php if($order_package['CoLocation']['id'] == $row['CoLocation']['id']){ echo 'selected'; } ?>>
									<?php echo $row['CoLocation']['name'] ?>
								</option>
							<?php endforeach; ?>
						</select>
					</p>
					<div class="package_info">
						<p id="space">Không gian máy chủ: <span><?php echo $order_package['CoLocation']['space'] ?></span></p>
						<p id="power">Công suất điện: <span><?php echo $order_package['CoLocation']['power'] ?></span></p>
						<p id="info_band">Lưu lượng thông tin: <span><?php echo $order_package['CoLocation']['info_band'] ?></span></p>
						<p id="bandwith">Băng thông internet: <span><?php echo $order_package['CoLocation']['bandwith'] ?></span></p>
						<p id="ip">Số địa chỉ IP: <span><?php echo $order_package['CoLocation']['ip'] ?></span></p>
						<p id="price">Giá:<span><?php echo $order_package['CoLocation']['price'] ?></span> VNĐ/THÁNG</p>
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
<script type="text/javascript">
	$(document).ready(function(){
		$('#packlist').change(function(){
			$.ajax({
				url : "<?php echo $this->Html->url(array('controller' => 'location','action' =>'ajax'))?>",
				type : "post",
				dataType:"json",
				data : {
					id : $(this).val()
				},
				success : function (result){
					$('#space span').text(result.CoLocation.space);
					$('#power span').text(result.CoLocation.power);
					$('#info_band span').text(result.CoLocation.info_band);
					$('#bandwith span').text(result.CoLocation.bandwith);
					$('#ip span').text(result.CoLocation.ip);
					$('#price span').text(result.CoLocation.price);
				}
			});
		});
	});
</script>