<div class="search-domain">
	<div class="container-fluid">
		<h3 class="text-center">KIỂM TRA TÊN MIỀN</h3>
		<ul class="nav nav-tabs container">
			<li class="active"><a data-toggle="tab" href="#regis">Đăng ký tên miền</a></li>
			<li><a data-toggle="tab" href="#transfer">Chuyển đổi nhà cung cấp</a></li>
			<li><a data-toggle="tab" href="#check">Kiểm tra tên miền</a></li>
			<li><a data-toggle="tab" href="#price_menu">Bảng giá tên miền</a></li>
		</ul>
		<hr>
		<div class="tab-content container">
			<div id="regis" class="tab-pane fade">
				<div class="row">
					<!-- register domain div -->
				</div>
			</div>
			<div id="transfer" class="tab-pane fade">
				<div class="row">
					<!-- transerfer div -->
				</div>
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
								<li><input type="radio" name="product_id" value="<?php echo $item['product_price']['id']; ?>"><label><?php echo $item['product_price']['product_name']; ?></label></li>
								<?php }  ?>
							</ul>

						</div>
						<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
							<p><span>3</span>Click để kiểm tra</p>
							<button type="submit" class="btn btn-success">Kiểm tra</button>
						</div>
					</form>
				</div>
				<hr>
				<?php if(isset($request)){?>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<p><span>4</span>Kết quả kiểm tra tên miền</p>
						<div class="table-responsive result">
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>Tên miền</th>
										<th>Tình trạng</th>
										<th>Phí đăng ký đầu năm</th>
										<th>Phí gia hạn</th>
										<th>Phí chuyển tên miền</th>
										<th>Nút đăng ký</th>
									</tr>
								</thead>
								<tbody>

									<tr>

										<td><?php echo $request['search'] ?></td>
										<td>
											<?php 
												 	if ($output['status'] == "available")
												 	{
												 		echo "Có thể đăng ký";
												 	}
												 	else
												 	{
												 		echo "Tên miền đã tồn tại";
												 	}


											 ?>
										</td>
										<td><?php echo $prod_name['Domain']['price'] ?></td>
										<td><?php echo $prod_name['Domain']['bk_price'] ?></td>
										<td><?php echo $prod_name['Domain']['price_transfer'] ?></td>
										<td><a class="btn btn-success" href="#" role="button">Đặt mua</a></td>

									</tr>

								</tbody>
							</table>
						</div>
					</div>
				</div>
				<?php }?>
			</div>
			<div id="price_menu" class="tab-pane fade">
				<div class="row">
					<!-- price_dmain div -->
				</div>
			</div>
		</div>
	</div>
</div>