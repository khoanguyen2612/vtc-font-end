<SCRIPT LANGUAGE="JavaScript">

<!-- Begin
var mikExp = /[$\\@\\\#%\^\&\*\(\)\[\]\+\_\{\}\`\~\=\|\!\-]/;
function dodacheck(val) {
var strPass = val.value;
var strLength = strPass.length;
var lchar = val.value.charAt((strLength) - 1);
if(lchar.search(mikExp) != -1) {
var tst = val.value.substring(0, (strLength) - 1);
val.value = tst;
   }
}

//  End -->
</script>
	
<div class="search-domain">
	<div class="container-fluid">
		<h3 class="text-center">KIỂM TRA TÊN MIỀN</h3>
		<ul class="nav nav-tabs container">
			<li><a href="<?php echo $this->Html->url(array('controller'=>'ProductPrices','action'=>'register_domain'),true);?>">Đăng ký tên miền</a></li>
			<li><a href="">Chuyển đổi nhà cung cấp</a></li>
			<li class="active"><a href="<?php echo $this->Html->url(array('controller'=>'ProductPrices','action'=>'result_search'),true);?>">Kiểm tra tên miền</a></li>
			<li><a href="">Bảng giá tên miền</a></li>
		</ul>
		<hr>
		<div class="tab-content container">
			<div id="check" class="tab-pane fade in active">
				<div class="row">
					<form name="abc" method="POST">
						<?php echo $this->Session->flash();?> 
						<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
							<p><span>1</span>Nhập các tên miền cần kiểm tra</p>
							<textarea rows="4" cols="50" name="search" onKeyUp="javascript:dodacheck(abc.search);" ></textarea>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
							<p><span>2</span>Chọn đuôi tên miền cần kiểm tra</p>
							<ul class="list-inline domain_name">
								<?php foreach ($data as $item) { ?>
								<li><input type="checkbox" name="product_id" value="<?php echo $item['ProductPrice']['id']; ?>"><label><?php echo $item['ProductPrice']['product_name']; ?></label></li>
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
				<?php if(isset($request1)) { ?>
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

												<?php if ($output['status'] == "available"){ ?>
													<td><?php echo $request1 ?></td>
													<td><?php echo "Có thể đăng ký"; ?></td>
													<td><?php echo $prod_name['ProductPrice']['price'] ?></td>
													<td><?php echo $prod_name['ProductPrice']['bk_price'] ?></td>
													<td><?php echo $prod_name['ProductPrice']['price_transfer'] ?></td>
													<td><a class="btn btn-success" href="#" role="button">Đặt mua</a></td>

												<?php } else { ?>
													<td><?php echo $request1 ?></td>
													<td><?php echo "Tên miền đã tồn tại"; ?></td>
													<td>X</td>
													<td>X</td>
													<td>X</td>
													<td>X</td>
												<?php } ?>
											</tr>

										</tbody>
									</table>
								</div>
							</div>
						</div>
				<?php } ?>
				<?php if(isset($request2)) { ?>
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
												<?php if ($output['status'] == "available"){ ?>
													<td><?php echo $request2 ?></td>
													<td><?php echo "Có thể đăng ký"; ?></td>
													<td><?php echo $prod_name['ProductPrice']['price'] ?></td>
													<td><?php echo $prod_name['ProductPrice']['bk_price'] ?></td>
													<td><?php echo $prod_name['ProductPrice']['price_transfer'] ?></td>
													<td><a class="btn btn-success" href="#" role="button">Đặt mua</a></td>
												<?php } else { ?>
													<td><?php echo $request2 ?></td>
													<td><?php echo "Tên miền đã tồn tại"; ?></td>
													<td>X</td>
													<td>X</td>
													<td>X</td>
													<td>X</td>
												<?php } ?>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>