<!DOCTYPE html>
<html>

<head>
	<title><?php echo $title_for_layout?></title>
	<?php echo $this->html->meta('icon','img/vtc-logo.png', array('type' =>'icon')); ?>
	<meta charset="utf-8" >	
	<?php echo $this->Html->css('bootstrap.min'); ?>
	<?php echo $this->Html->css('fileinput.min'); ?>
    <?php echo $this->Html->script('jquery.min'); ?> 
	
    <?php echo $this->Html->script('bootstrap.min'); ?> 
	<link href='http://fonts.googleapis.com/css?family=Ruge+Boogie' rel='stylesheet' type='text/css'>
	<?php echo $this->Html->css('style'); ?>
	
    <?php echo $this->fetch('css'); ?>
</head>


<body>

		<div class="top-nav">
		<div class="container">
			<div class="row">
				<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
					<div class="btn-group" role="group">
						<div class="btn-group" role="group">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								LANGUAGE
								<?php echo $this->Html->image('lang-icon.png');?>
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<li><a href="#">ENGLISH</a></li>
								<li><a href="#">Tiếng Việt</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
					<div class="action">
						<ul class="list-inline">
							<li >
								<a href="" class="phone">
									<?php echo $this->Html->image('phone-icon.png');?>
									(04) 4450 5566
								</a>
							</li>
							<li>
								<a href="">
									<?php echo $this->Html->image('email-icon.png');?>
									cloud.info@vtc.vn 
								</a>
							</li>
							<li>
								<a href="">
									<?php echo $this->Html->image('suppot-icon.png');?>
									Hỗ trợ
								</a>
							</li>
								<?php if(isset($login)){?>
									<!-- <li class="dropdown btn-group" role="group">
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
											<?php echo $login; echo $this->Html->image('user-icon.png');?>
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li><a href="<?php echo $this->Html->url(array( 'controller' => 'members', 'action' => 'logout' ), true); ?>">LOGOUT</a></li>
										</ul>
								</li> -->
								<li>
									<ul class="nav pull-right">
										<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
											<?php echo $login; echo $this->Html->image('user-icon.png');?><b class="caret"></b></a>
											<ul class="dropdown-menu menu-user">
												
													<li><a href="<?php echo $this->Html->url(array( 'controller' => 'members', 'action' => $profile ), true); ?>"> <span class="glyphicon glyphicon-wrench"></span> Cài đặt</a></li>
													<li><a href="#"><span class="glyphicon glyphicon-earphone"></span> Liên hệ hỗ trợ</a></li>
													<li><a href="<?php echo $this->Html->url(array( 'controller' => 'members', 'action' => 'logout' ), true); ?>"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<?php }else{?>
								<li>
									<a href="<?php echo $this->Html->url(array( 'controller' => 'members', 'action' => 'login' ), true); ?>">
										<?php echo $this->Html->image('user-icon.png');?>
										Đăng nhập
									</a>
								</li>
								<?php } ?>

							<li>
								<a href="">
									<?php echo $this->Html->image('cart-icon.png');?>
									0
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>
				<a href="index.html"><?php echo $this->Html->image('vtc-logo.png');?></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">HOME</a></li>
					<li><a href="#">HOSTING</a></li>
					<li><a href="#">DOMAINS</a></li> 
					<li><a href="#">FEATURES</a></li> 
					<li><a href="#">SERVICES</a></li>
					<li><a href="#">BLOG</a></li>
					<li><a href="#">SUPPORT</a></li> 
					<li><a href="#">CONTACT</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<?php
		echo $this->fetch('content');
	?>
	<footer class="footer">
		<div class="tfoot">
			<div class="container">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<h3>HOTLINE </h3>
						<strong>(04) 4450 5566</strong>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<form action="" method="POST" role="form">
							<label for="send_mail">Đăng ký nhận  email</label for="email">
								<div class="form-group">
									<input type="text" class="form-control" id="send_mail" placeholder="Vui lòng ghi địa chỉ email tại đây!.....">
								</div>
								<button type="submit" class="btn btn-primary">SUBMIT</button>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="bfoot">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
						<section class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
							<h4>Hosting Packages</h4>
							<ul class="list-group">
								<li class="list-group-item"><a href="">Web Hosting</a></li>
								<li class="list-group-item"><a href="">Reseller Hosting</a></li>
								<li class="list-group-item"><a href="">VPS Hosting</a></li>
								<li class="list-group-item"><a href="">Dedicated Servers</a></li>
								<li class="list-group-item"><a href="">Windows Hosting</a></li>
								<li class="list-group-item"><a href="">Cloud Hosting</a></li>
								<li class="list-group-item"><a href="">Linux Servers</a></li>
							</ul>
						</section>
						<section class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
							<h4>Our Products</h4>
							<ul class="list-group">
								<li class="list-group-item"><a href="">Website Builder</a></li>
								<li class="list-group-item"><a href="">Web Design</a></li>
								<li class="list-group-item"><a href="">Logo Design</a></li>
								<li class="list-group-item"><a href="">Register Domains</a></li>
								<li class="list-group-item"><a href="">Traffic Booster</a></li>
								<li class="list-group-item"><a href="">Search Advertising</a></li>
								<li class="list-group-item"><a href="">Email Marketing</a></li>
							</ul>
						</section>
						<section class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
							<h4>Hosting Packages</h4>
							<ul class="list-group">
								<li class="list-group-item"><a href="">About Us</a></li>
								<li class="list-group-item"><a href="">Press & Media</a></li>
								<li class="list-group-item"><a href="">News / Blogs</a></li>
								<li class="list-group-item"><a href="">Careers</a></li>
								<li class="list-group-item"><a href="">Awards & Reviews</a></li>
								<li class="list-group-item"><a href="">Testimonials</a></li>
								<li class="list-group-item"><a href="">Affiliate Program</a></li>
							</ul>
						</section>
						<section class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
							<h4>Follow Us</h4>
							<ul class="list-inline">
								<a href="" class="icon fa_icon"></a>
								<a href="" class="icon tw_icon"></a>
								<a href="" class="icon gg_icon"></a>
								<a href="" class="icon yt_icon"></a>
								<a href="" class="icon in_icon"></a>
							</ul>
						</section>
						<section class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
							<h4>Resources</h4>
							<ul class="list-group">
								<li class="list-group-item"><a href="">How to Create a Website</a></li>
								<li class="list-group-item"><a href="">How to Transfer a Website</a></li>
								<li class="list-group-item"><a href="">Start a Web Hosting Business</a></li>
								<li class="list-group-item"><a href="">How to Start a Blog</a></li>

							</ul>
						</section>
						<section class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
							<h4>Support</h4>
							<ul class="list-group">
								<li class="list-group-item"><a href="">Product Support</a></li>
								<li class="list-group-item"><a href="">Contact Us</a></li>
								<li class="list-group-item"><a href="">Knowledge Base</a></li>
								<li class="list-group-item"><a href="">Tutorials</a></li>
							</ul>
						</section>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 text-right" id="address">
						<?php echo $this->Html->image('logo_footer.png');?>
						<ul class="list-unstyled">
							<li class="list-group-item">Toà nhà VTC,</li>
							<li class="list-group-item"> 23 Phố Lạc Trung, </li>
							<li class="list-group-item">Vĩnh Tuy, Hai Bà Trưng, Hà Nội</li>
							<li class="list-group-item">Phone: (04) 4450 5566</li>
							<li class="list-group-item">Mail: cloud.info@vtc.vn</li>
							<li class="list-group-item">View Directions</li>
							<?php echo $this->Html->image('logo_icon.png',array('class' => 'hidden-xs'));?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="coppyright">
			<div class="container">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<span>Copyright © 2015 ARKAHOST. All rights reserved.</span>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<ul class="list-inline text-right">
							<li class="list-group-item"><a href="">Terms of Service | </a></li>
							<li class="list-group-item"><a href="">Privacy Policy | </a></li>
							<li class="list-group-item"><a href="">Site Map</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
<?php echo $this->Html->script('jquery-1.11.3.min'); ?>
<?php echo $this->Html->script('jssor.slider-26.3.0.min'); ?>
<?php echo $this->Html->script('custom'); ?>
<?php echo $this->fetch('script'); ?>
</body>

</html>