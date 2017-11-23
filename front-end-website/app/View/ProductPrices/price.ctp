	<div class="search-domain">
		<div class="container-fluid">
			<h3 class="text-center">BẢNG GIÁ TÊN MIỀN</h3>
			<ul class="nav nav-tabs container">
	            <li>
	                <a href="<?php echo $this->Html->url(array('controller' => 'ProductPrices', 'action' => 'register_domain'), true); ?>">
	                 Đăng ký tên miền
	                </a>
	            </li>
	            <li>
	                <a href="">Chuyển đổi nhà cung cấp</a>
	            </li>
	            <li>
	                <a href="<?php echo $this->Html->url(array('controller' => 'ProductPrices', 'action' => 'result_search'), true); ?>">
	                Kiểm tra tên miền
	                </a>
	            </li>
	            <li class="active"><a href="">Bảng giá tên miền</a></li>
	        </ul>
			<hr>
		</div>
		<div class="container">
			<div class="row">
				<form>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 price-list">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<p class="p-add"> Đăng kí tên miền để bảo vệ thương hiệu của bạn</p>
						</div>
						<div>
							<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
								<input type="text" name="add-domain" class="form-control input-add" placeholder="Nhập tên miền muốn đăng kí...">
							</div>
							<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
								<button type="submit" class="btn btn-add-domain">Kiểm tra</button>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 price-domain-vn">
							<div class="table-responsive price-list-domain">
								<table class="table table-bordered domain-vn">
									<thead>
										<tr>
											<th> Tên miền Việt Nam</th>
											<th> Phí đăng kí năm đầu</th>
											<th> Phí gia hạn</th>
											<th> Phí chuyển tên miền</th>
											<th> Đăng ký</th>
										</tr>
									</thead>
									<tbody>
										
										<?php
											foreach ($data as $item) {
												if($item['ProductPrice']['domain_type']==1){
										?>
													<tr>
														<td><?php echo 'xyz'.$item['ProductPrice']['product_name'];?> </td>
														<td><?php if($item['ProductPrice']['price']==0){echo $this->Html->image('icon-free.png');}else{ echo $item['ProductPrice']['price'];}?></td>
														<td><?php if($item['ProductPrice']['bk_price']==0){echo $this->Html->image('icon-free.png');}else{ echo $item['ProductPrice']['bk_price'];}?></td>
														<td><?php if($item['ProductPrice']['price_transfer']==0){echo $this->Html->image('icon-free.png');}else{ echo $item['ProductPrice']['price_transfer'];}?></td>
														<td><button type="button" class="btn btn-register"> Đăng kí </button></td>
													</tr>	
										<?php
												}
											}
										?>
									</tbody>
								</table>
							</div>
						</div>	
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 price-domain-internal">
							<div class="table-responsive price-list-domain">
								<table class="table table-bordered domain-international">
									<thead>
										<tr>
											<th> Tên miền quốc tế</th>
											<th> Phí đăng kí năm đầu</th>
											<th> Phí gia hạn</th>
											<th> Phí chuyển tên miền</th>
											<th> Đăng ký</th>
										</tr>
									</thead>
									<tbody>
										<?php
											foreach ($data as $item) {
												if($item['ProductPrice']['domain_type']==0){
										?>
													<tr>
														<td><?php echo 'xyz'.$item['ProductPrice']['product_name'];?> </td>
														<td><?php if($item['ProductPrice']['price']==0){echo $this->Html->image('icon-free.png');}else{ echo $item['ProductPrice']['price'];}?></td>
														<td><?php if($item['ProductPrice']['bk_price']==0){echo $this->Html->image('icon-free.png');}else{ echo $item['ProductPrice']['bk_price'];}?></td>
														<td><?php if($item['ProductPrice']['price_transfer']==0){echo $this->Html->image('icon-free.png');}else{ echo $item['ProductPrice']['price_transfer'];}?></td>
														<td><button type="button" class="btn btn-register"> Đăng kí </button></td>
													</tr>	
										<?php
												}
											}
										?>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 other-domain-attached">
							<div class="service-attached">
								<h4 class="h4-other">Các dịch vụ đi kèm khi mua tên miền</h4>
							</div>
							<div class="table-responsive other-domain">
								<table class="table table-bordered other-domain-service">
									<thead>
										<tr>
											<th> Tên dịch vụ đi kèm</th>
											<th> Giá dịch vụ</th>
											<th> Chú thích về dịch vụ</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td> Khóa domain</td>
											<td><?php echo $this->Html->image('icon-free.png'); ?></td>
											<td></td>
										</tr>
										<tr>
											<td> Cài đặt DNS cho tên miền</td>
											<td><?php echo $this->Html->image('icon-free.png'); ?></td>
											<td></td>
										</tr>
										<tr>
											<td> Cập nhật Name Server</td>
											<td><?php echo $this->Html->image('icon-free.png'); ?></td>
											<td></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<style type="text/css">
	.search-domain .price-domain-vn table > thead > tr{
		border-top: 5px #bfe4f7 solid;
	}
	.search-domain .price-domain-internal table > thead > tr{
		border-top: 5px #ffe3d5 solid;
	}
</style>