<SCRIPT LANGUAGE="JavaScript">
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
</script>
<div class="search-domain">
		<div class="container-fluid">
			<h3 class="text-center">KIỂM TRA TÊN MIỀN</h3>
				<ul class="nav nav-tabs container">
			<li><a href="<?php echo $this->Html->url(array('controller'=>'ProductPrices','action'=>'register_domain'),true);?>">Đăng ký tên miền</a></li>
			<li><a href="">Chuyển đổi nhà cung cấp</a></li>
			<li class="active"><a href="<?php echo $this->Html->url(array('controller'=>'ProductPrices','action'=>'result_search'),true);?>">Kiểm tra tên miền</a></li>
			<li>
			<a href="<?php echo $this->Html->url(array('controller' => 'ProductPrices', 'action' => 'price'), true); ?>">Bảng giá tên miền</a>
			</li>
			</ul>
			<hr>
			<div class="container">
				<div id="check">
					<div class="row">
						<?php echo $this->Session->flash(); ?>
						<form action="" method="POST" name="checkavailble">
							<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
								<p><span>1</span>Nhập các tên miền cần kiểm tra</p>
								<textarea rows="4" cols="50" required name="dm_input" maxlength="200" onKeyUp="javascript:dodacheck(checkavailble.search);" ></textarea>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
								<p><span>2</span>Chọn ít nhất 01 loại tên miền</p>
								<ul class="nav nav-tabs">
									<li class="active"><a data-toggle="tab" href="#common"><span>Phổ biến</span></a></li>
									<li><a data-toggle="tab" href="#qt"><span>Quốc tế</span></a></li>
									<li><a data-toggle="tab" href="#vn"><span>Việt Nam</span></a></li>
								</ul>
								<div class="tab-content">
									<div id="common" class="tab-pane fade in active">
										<ul class="list-inline domain_name">
										<?php foreach ($data_dm as $key => $row): ?>
											<?php if($row['ProductPrice']['domain_common'] == 1): ?>
												<li><input type="checkbox" name="suffix_key[]" value="<?php echo $key  ?>"><label><?php echo $row['ProductPrice']['product_name'] ?></label></li>
											<?php endif; ?>
										<?php endforeach; ?>
										</ul>
									</div>
									<div id="qt" class="tab-pane fade">
										<ul class="list-inline domain_name">
											<?php foreach ($data_dm as $key => $row): ?>
												<?php if($row['ProductPrice']['domain_type'] == 0): ?>
												<li><input type="checkbox" name="suffix_key[]" value="<?php echo $key ?>"><label><?php echo $row['ProductPrice']['product_name'] ?></label>
												</li>
												<?php endif; ?>
											<?php endforeach; ?>
										</ul>
									</div>
									<div id="vn" class="tab-pane fade">
										<ul class="list-inline domain_name">
											<?php foreach ($data_dm as $key => $row): ?>
												<?php if($row['ProductPrice']['domain_type'] == 1): ?>
												<li><input type="checkbox" name="suffix_key[]" value="<?php echo $key ?>"><label><?php echo $row['ProductPrice']['product_name'] ?></label></li>
												<?php endif; ?>
											<?php endforeach; ?>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
								<p><span>3</span>Click để kiểm tra</p>
								<button type="submit" class="btn btn-success">Kiểm tra</button>
							</div>
						</form>
					</div>
					<hr>
					<?php if(isset($result)): ?>
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
											<?php foreach($result as $row): ?>
											<tr>	
													<?php if ($row['status'] == 'available'): ?>
													<td><?php echo $row['name']; ?></td>
													<td><?php echo "Có thể đăng ký"; ?></td>
													<td><?php echo $row['ProductPrice']['price']; ?></td>
													<td><?php echo $row['ProductPrice']['bk_price']; ?></td>
													<td><?php echo $row['ProductPrice']['price_transfer']; ?></td>
													<td><a class="btn btn-success" href="#" role="button">Đặt mua</a></td>

													<?php else: ?>

													<td><?php echo $row['name']; ?></td>
													<td><?php echo "Tên miền đã tồn tại"; ?></td>
													<td>X</td>
													<td>X</td>
													<td>X</td>
													<td>X</td>
													
													<?php endif; ?>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
					</div>
					<?php endif; ?>	
				</div>
			</div>
		</div>
	</div>
<style type="text/css">
        form ul.nav a{
            text-decoration: none !important;
            margin-top: 0px !important;
            margin-bottom:0px !important;
        }
</style>