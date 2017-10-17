	<div class="top-nav">
		<div class="container">
			<div class="row">
				<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
					<div class="btn-group" role="group">
						<div class="btn-group" role="group">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								LANGUAGE
								<img src="../app/webroot/img/lang-icon.png">
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
							<li style="height: 41px;">
								<a href="" class="phone">
									<img src="../app/webroot/img/phone-icon.png">
									(04) 4450 5566
								</a>
							</li>
							<li>
								<a href="">
									<img src="../app/webroot/img/email-icon.png">
									cloud.info@vtc.vn 
								</a>
							</li>
							<li>
								<a href="">
									<img src="../app/webroot/img/suppot-icon.png">
									Hỗ trợ
								</a>
							</li>
							<li>
								<a href="<?php echo $this->Html->url(array( 'controller' => 'members', 'action' => 'login' ), true); ?>">
									<img src="../app/webroot/img/user-icon.png">
									Đăng nhập
								</a>
							</li>
							<li>
								<a href="">
									<img src="../app/webroot/img/cart-icon.png">
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
				<a href="index.html"><img src="../app/webroot/img/vtc-logo.png"></a>
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