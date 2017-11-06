	<div class="location_service">
		<div class="mana_banner">
			<?php echo $this->Html->image('mana_server.jpg',array('id'=>'lbanner_img','class'=>'img-responsive')) ?>
			<h1>DỊCH VỤ quản trị máy chủ</h1>
		</div>
		<div class="l_head">
			<div class="container">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 text-center">
						<?php echo $this->Html->image('location_icon1.png'); ?>
						<h5>Bảo mật đa tẦng</h5>
						<p>
							Máy chủ của bạn được 
							kiểm soát bởi hệ thống camer
							giám sát bảo mật bằng vân tay ,
							theo dõi từ xa
						</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 text-center">
						<?php echo $this->Html->image('location_icon2.png'); ?>
						<h5>Bảo mật đa tẦng</h5>
						<p>
							Máy chủ của bạn được 
							kiểm soát bởi hệ thống camer
							giám sát bảo mật bằng vân tay ,
							theo dõi từ xa
						</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 text-center">
						<?php echo $this->Html->image('location_icon4.png'); ?>
						<h5>Bảo mật đa tẦng</h5>
						<p>
							Máy chủ của bạn được 
							kiểm soát bởi hệ thống camer
							giám sát bảo mật bằng vân tay ,
							theo dõi từ xa
						</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 text-center">
						<?php echo $this->Html->image('location_icon3.png'); ?>
						<h5>Bảo mật đa tẦng</h5>
						<p>
							Máy chủ của bạn được 
							kiểm soát bởi hệ thống camer
							giám sát bảo mật bằng vân tay ,
							theo dõi từ xa
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="mana_service">
			<div class="container">
				<div class="mana_head">

					<div class="flash">
					<?php echo $this->Session->flash(); ?> 
					</div>
					<h3>CÁC GÓI DỊCH VỤ CHÍNH</h3>
					<p>
						* Bảng giá dưới đây chưa bao gồm VAT
					</p>
				</div>
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<div class="mana_item">
							<h4>Cài đặt và cấu hình</h4>
							<p>
								Việc cài đặt và cấu hình máy chủ được thực hiện hoàn toàn miễn phí 
								và trọn gói theo yêu cầu của khách hàng tại thời điểm kích hoạt gói 
								dịch vụ mới. Khách hàng cũng có thể lựa chọn dịch vụ này khi cần 
								thực hiện thao tác cài đặt và cấu hình lại hệ điều hành.
							</p>
							<?php echo $this->Html->link('ĐĂNG KÝ NGAY',array(
							'controller' => 'managerservers',
							'action' => 'submit_info',
							1
							)); ?>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<div class="mana_item">
							<h4>Hỗ trợ miễn phí</h4>
							<p>
								VTC Digicom luôn sẵn sàng hỗ trợ khách hàng trong phạm vi 
								trách nhiệm của nhà cung cấp dịch vụ và hơn thế nữa để đảm
								bảo sự ổn định của website khách hàng. 
								Chi tiết vui lòng tham khảo.
							</p>
							<?php echo $this->Html->link('ĐĂNG KÝ NGAY',array(
							'controller' => 'managerservers',
							'action' => 'submit_info',
							1
							)); ?>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<div class="mana_item">
							<h4>Quản trị máy chủ trọn gói</h4>
							<p>
								Để đảm bảo chất lượng hỗ trợ kỹ thuật ở mức cao nhất, 
								VTC Digicom cung cấp dịch vụ quản trị máy chủ trọn gói.
							</p>
							<?php echo $this->Html->link('ĐĂNG KÝ NGAY',array(
							'controller' => 'managerservers',
							'action' => 'submit_info',
							1
							)); ?>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<div class="mana_item">
							<h4>Xử lý theo sự cố</h4>
							<p>
								Thích hợp với những khách hàng có khả năng tự quản lý máy 
								chủ riêng và thường xuyên duy trì được độ ổn định của website,
								dịch vụ hỗ trợ xử lý theo sự cố được VTC Digicom cung cấp để 
								đảm bảo khách hàng luôn nhận được những hỗ trợ khi cần thiết
								Thông tin chi tiết dịch vụ này được mô tả tại đây.
							</p>
							<?php echo $this->Html->link('ĐĂNG KÝ NGAY',array(
							'controller' => 'managerservers',
							'action' => 'submit_info',
							1
							)); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<style type="text/css">
		.flash{
			margin-top: 30px;
			color: #e80000;
			font-size: 24px;
			font-weight: 600;
			text-transform: uppercase;
			text-align: center;	
		}
	</style>