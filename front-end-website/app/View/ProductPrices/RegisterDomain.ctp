<div class="search-domain">
		<div class="container-fluid">
			<h3 class="text-center">ĐĂNG KÍ THÊM TÊN MIỀN</h3>
			<ul class="nav nav-tabs container">
				<li class="active"><a data-toggle="tab" href="#regis">Đăng ký tên miền</a></li>
				<li><a data-toggle="tab" href="#transfer">Chuyển đổi nhà cung cấp</a></li>
				<li><a data-toggle="tab" href="#check">Kiểm tra tên miền</a></li>
				<li><a data-toggle="tab" href="#price_menu">Bảng giá tên miền</a></li>
			</ul>
			<hr>
		</div>
		<div class="container">
			<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 search-add">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<p class="p-add"> Đăng kí tên miền để bảo vệ thương hiệu của bạn</p>
						</div>
				<form action="" method="POST">
						<div>
							<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
								<input type="text" name="add-domain" class="form-control input-add" placeholder="Nhập tên miền muốn đăng kí...">
							</div>
							<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
								<button type="submit" class="btn btn-add-domain">Kiểm tra</button>
							</div>
						</div>
				</form>
						<?php if(isset($request)) { ?>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<p class="p-add"> Kết quả kiểm tra</p>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 add-domain-domain">
							<div class="table-responsive add-on">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th></th>
										<th>Tên miền</th>
										<th>Phí duy trì</th>
										<th> Phí đăng kí</th>
										<th> Thông tin Whois</th>
										<th>Thêm vào giỏ</th>
									</tr>
								</thead>
								<tbody>
							
									<?php
									$i=0;
									foreach($data as $item) { ?>
									<tr>
											
											<td><?php 

														if ($output1[$i]['status'] == "available")
														{
															echo "<img src='../app/webroot/img/icon-check.png'>";
														}
														else
														{
															echo "<img src='../app/webroot/img/icon-del.png'>";
														}

													// $i++;

											 ?></td>
											<td><p class="p-name"><?php echo ($test = $request['add-domain'].$item['ProductPrice']['product_name']); ?></p></td>
											<td><p class="p-money"><?php echo $item['ProductPrice']['price'] ?>VNĐ</p></td>
											<td><p class="img-fee"><?php echo $item['ProductPrice']['bk_price'] ?>VNĐ</p></td>
											<td>
												<?php if ($output1[$i]['status'] != 'available'){?>
														<form action="" method="POST">
															<input type="hidden" class="domain_name" name="domain_name" value='<?php echo $test?>'>
	
															<div class='btn btn-danger button1' data-toggle="modal" data-target="#myModal" >Whois <img src='../app/webroot/img/icon-whois.png'></div>
															<!-- Modal -->
													        <div class="modal fade" id="myModal" role="dialog">
													          <div class="modal-dialog modal-lg">
													            <div class="modal-content md-cn" id = "demo">
													                
													            </div>
													          </div>
													        </div>
														</form>

												<?php }
													$i++;
												?><!-- <button type='submit' class='btn btn-danger'>Whois <img src='../app/webroot/img/icon-whois.png'></button> -->
											</td>
											<td>
												<input type="checkbox" class="add-domain-checkbox" checked="true" name="">
												<label for="demo" class="demoCheck demoCheckLabel"></label>
											</td>
										
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
							<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
							</div>
							<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
								<button type="submit" class="btn btn-all"> Chọn tất cả</button>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 add-continue">
								<button type="submit" class="btn btn-add-continue"> Tiếp tục</button>
							</div>
						</div>
						<?php } ?>
						<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 explain">
							<p class="p-explain"> Bảng chú thích các kí hiệu</p>
							<table class="table table-bordered">
								<tbody>
									<tr>
										<td><img src="../app/webroot/img/icon-del.png"></td>
										<td>Tên miền đã được đăng kí, bạn không thể đăng kí tên miền này</td>
									</tr>
									<tr>
										<td><img src="../app/webroot/img/icon-check.png"></td>
										<td>Tên miền chưa đăng kí, bạn có thể đăng kí tên miền này</td>
									</tr>
									<tr>
										<td>
											<button type="submit" class="btn btn-danger">Whois <img src="../app/webroot/img/icon-whois.png"></button>
										</td>
										<td>Xem thông tin tin miền</td>
									</tr>
									<tr>
										<td><img src="../app/webroot/img/icon-empty.png"></td>
										<td>Tên miền có thể đăng kí, đang ở trạng thái chưa chọn</td>
									</tr>
									<tr>
										<td><img src="../app/webroot/img/icon-tick.png"></td>
										<td>Tên miền có thể đăng kí, đang ở trạng thái đã chọn</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
							
						</div>
					</div>
			</div>
		</div>
	</div>

<script type="text/javascript">
	$(document).ready(function(){
	$('.button1').click(function(){
		console.log($(this).parent().children(".domain_name").val());
		// alert('1');
		// $('#myModal').modal('show'); 

			$.ajax({
	                url : "<?php echo $this->Html->url(array('controller'=>'ProductPrices','action'=>'whois_domain'))?>",
	                type : "post",
	                dataType:"html",
	                data : {
	                    domain_name : $(this).parent().children(".domain_name").val(),
	                },
	                success : function (result){
	                	
	                	// alert('2')
	                	// var datadomain = jQuery.parseJSON(result);
	                	// obj = JSON.parse(obj);
	                	// console.log(obj);
						// alert( obj['code']);
	                	// alert(result);
	                	$('#demo').html(result);

	                }
	        	});
	        });
 }); 
</script>
<style type="text/css">
	.md-cn {
	    width: 100%;
	    padding: 0%;
	    height: auto;
	}
	.modal-lg{
	  padding: unset;
	}
	.modal-header {
	    padding: 20px;
	    background: #e67237;
	    color: #fff;
	}
	.whois-body{
	    margin: 10px 50px;
	    text-align: left;

	}
	.whois-section{
	    margin-bottom: 15px;

	}
	.whois-item{
	    background: #005faf;
	    color: #fff;
	    padding: 10px;
	    font-size: 24px;
	    }
	.whois-content {
	  line-height: 30px;
	  padding-top: 10px;
	}
	.whois-content-1 {
	  line-height: 15px;
	  padding-top: 20px;
	}
	.dcol {
	    float: left;
	    width: 50%;
	}
</style>