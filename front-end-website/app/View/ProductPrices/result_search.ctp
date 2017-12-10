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
							<textarea rows="4" cols="50" required name="dm_input" maxlength="200" onKeyUp="javascript:dodacheck(this);" style="padding: 10px;" oninvalid="this.setCustomValidity('Bạn chưa nhập tên miền kiểm tra')" oninput="setCustomValidity('')"></textarea>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
							<p><span>2</span>Chọn ít nhất 01 loại tên miền</p>
							<ul class="nav nav-tabs" role="tablist" id="select_type">
								<li role="presentation" class="active">
									<a href="#common" aria-controls="common" role="tab" data-toggle="tab">
										<input type="radio" role="tab-controll" name="tab" checked>
										<label><span></span>Phổ biến</label>
									</a>
								</li>
								<li role="presentation">
									<a href="#qt" aria-controls="qt" role="tab" data-toggle="tab">
										<input type="radio" role="tab-controll" name="tab">
										<label><span></span>Quốc tế</label>
									</a>
								</li>
								<li role="presentation">
									<a href="#vn" aria-controls="vn" role="tab" data-toggle="tab">
										<input type="radio" role="tab-controll" name="tab">
										<label><span></span>Việt Nam</label>
									</a>
								</li>
							</ul>
							<div class="tab-content">
								<div id="common" class="tab-pane fade in active">
									<ul class="list-inline domain_name">
										<?php $s_id=0; ?>
										<?php foreach ($data_dm as $key => $row): ?>
											<?php if($row['ProductPrice']['domain_common'] == 1): ?>
												<li>
													<input type="checkbox" id="check_<?php echo $s_id; ?>" name="suffix_key[]" value="<?php echo $key  ?>">
													<label for="check_<?php echo $s_id;$s_id++; ?>">
														<span></span><?php echo $row['ProductPrice']['product_name'] ?>
													</label>
												</li>
											<?php endif; ?>
										<?php endforeach; ?>
									</ul>
								</div>
								<div id="qt" class="tab-pane fade">
									<ul class="list-inline domain_name">
										<?php foreach ($data_dm as $key => $row): ?>
											<?php if($row['ProductPrice']['domain_type'] == 0): ?>
												<li>
													<input type="checkbox" id="check_<?php echo $s_id; ?>" name="suffix_key[]" value="<?php echo $key ?>">
													<label for="check_<?php echo $s_id;$s_id++; ?>">
														<span></span><?php echo $row['ProductPrice']['product_name'] ?>
													</label>
												</li>
											<?php endif; ?>
										<?php endforeach; ?>
									</ul>
								</div>
								<div id="vn" class="tab-pane fade">
									<ul class="list-inline domain_name">
										<?php foreach ($data_dm as $key => $row): ?>
											<?php if($row['ProductPrice']['domain_type'] == 1): ?>
												<li>
													<input id="check_<?php echo $s_id; ?>" type="checkbox" name="suffix_key[]" value="<?php echo $key ?>">
													<label for="check_<?php echo $s_id;$s_id++; ?>">
														<span></span><?php echo $row['ProductPrice']['product_name'] ?>
													</label></li>
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
									<table class="table table-hover">
										<thead>
											<tr>
												<th class="dm_head_result">Tên miền</th>
												<th class="dm_head_result">Tình trạng</th>
												<th class="dm_head_result">Phí đăng ký đầu năm</th>
												<th class="dm_head_result">Phí gia hạn</th>
												<th class="dm_head_result">Phí chuyển tên miền</th>
												<th class="dm_head_result">Nút đăng ký</th>
												<th class="dm_head_result">Thêm vào giỏ hàng</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach($result as $row): ?>

												<?php if ($row['status'] == 'available'): ?>
													<tr>
														<td><?php echo $row['name']; ?></td>
														<td><?php echo "Có thể đăng ký"; ?></td>
														<td class="mn_count"><?php echo number_format($row['ProductPrice']['price'], 0, ',', '.'); ?> VND</td>
														<td class="mn_count"><?php echo number_format($row['ProductPrice']['bk_price'], 0, ',', '.'); ?> VND</td>
														<td>
															<?php echo number_format( $row['ProductPrice']['price_transfer'], 0, ',', '.'); ?> VND
														</td>
														<td><a class="btn btn-success" href="#" role="button">Đặt mua</a></td>
														<td><a href=""><?php echo $this->Html->image("cart_btn.png") ?></a></td>
													</tr>
												<?php else: ?>
													<tr style="background-color:#b1b1b1">
														<td><?php echo $row['name']; ?></td>
														<td><?php echo "Không thể đăng ký"; ?></td>
														<td class="mn_count"><?php echo number_format($row['ProductPrice']['price'], 0, ',', '.'); ?> VND</td>
														<td class="mn_count"><?php echo number_format($row['ProductPrice']['bk_price'], 0, ',', '.'); ?> VND</td>
														<td>
															<?php echo number_format( $row['ProductPrice']['price_transfer'], 0, ',', '.'); ?> VND
														</td>
														<td>
															<a class="btn btn-success search_owner" href="#" role="button">Tra WHOIS</a>
														</td>
														<td style="background-color: #fff"></td>
													</tr>
												<?php endif; ?>

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
	<script type="text/javascript">
		$(function () {
			$('.nav-tabs').on('click', 'a[role=tab] input[type=radio]', function(event) {
				event.stopPropagation();
				$(this).parent().tab('show');
			});
			$('.nav-tabs').on('show.bs.tab', 'a[role=tab]', function() {
				$(this).find('input[type=radio]').prop('checked', true);
			});
		});
	</script>
	<style type="text/css">
	.result a:hover{
		color: #0060af !important;
	}
	form ul.nav a{
		text-decoration: none !important;
		margin-top: 0px !important;
		margin-bottom:0px !important;
	}
	.mn_count{
		color: #0060af;
	}
	.result tbody tr{
		border-right: solid 1px #73777a;
	}
	.result tbody tr:last-child{
		border-bottom: solid 1px #73777a;
	}
	.result tr .dm_head_result{
		border-top:solid 1px #005faf;
		border-bottom:solid 1px #005faf;
		border-right:solid 1px #2a7fc2;
		border-left:solid 1px #2a7fc2;
		text-align: center;
		background-color: #005faf;
		color: #fdfbfb;
		font-weight: 500;
	}
	.result tr td{
		border-left: solid 1px #2f3032;
		border-color: #2f3336;
	}

	.result tr td{
		border-top:0px !important;
		border-bottom: none;
	}
	.result a[role="button"]{
		border-radius: 0px;
	}
	.search_owner{
		background-color: #fff !important;
		color: #b8b8b8;
	}
	#select_type{
		border-bottom: none;
	}
	#select_type li a{
		background-color: unset !important;
		color: #2d3740 !important;
		border:0px !important;
		text-transform: capitalize !important;
		padding-left: 0px !important;
	}
	input[type="radio"],.domain_name input[type=checkbox] {
		display:none;
	}
	input[role=tab-controll] + label > span{
		margin:-2px 10px 0 0;
		vertical-align: middle;
		padding: 0px !important;
		display:inline-block;
		width:22px;
		height:22px;
		cursor:pointer;
		background:url(<?php echo $this->Html->url('/img/tick_radio.png') ?>) left top no-repeat;
	}
	input[role=tab-controll]:checked + label span{
		background:url(<?php echo $this->Html->url('/img/tick_radio.png') ?>) -28px top no-repeat;
	}
	.domain_name input[type=checkbox]  + label > span{
		margin:-4px 3px 0 0;
		vertical-align: middle;
		padding: 0px !important;
		display:inline-block;
		width:20px;
		height:20px;
		cursor:pointer;
		background:url(<?php echo $this->Html->url('/img/checbox.png') ?>) -4px top no-repeat;
	}
	.domain_name input[type=checkbox]:checked  + label span{
		background:url(<?php echo $this->Html->url('/img/checbox.png') ?>) -30px top no-repeat;
	}
	.domain_name li{
		width: 20%;
		float: left !important;
	}
</style>