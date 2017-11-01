<!DOCTYPE html>
<html>

<head>
	<title><?php echo $title_for_layout?></title>

    <?php echo $this->html->meta('icon',
        'vtc-logo.png',
        array('type' =>'icon'));
    ?>

    <?php echo $this->Html->charset() . "\n"; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
    <?php echo $this->Html->css('bootstrap.min.css'). "\n"; ?>
    <?php echo $this->Html->script('jquery.min.js'). "\n"; ?>
    <?php echo $this->Html->script('bootstrap.min.js'). "\n"; ?>
    <?php echo $this->Html->css('style.css'). "\n"; ?>
    <link href='http://fonts.googleapis.com/css?family=Ruge+Boogie' rel='stylesheet' type='text/css'>
    <?php echo $this->Html->script('jssor.slider-26.3.0.min.js'). "\n"; ?>

</head>


<body>
    <div class="top-nav">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12col-lg-12">
                    <div class="action">
                        <ul class="list-inline list-group col-lg-8">
                            <li>
                                <?php echo $this->Html->image('phone-icon.png'); ?>
                                (04) 4450 5566
                            </li>
                            <li>
                                <?php echo $this->Html->image('email-icon.png'); ?>
                                cloud.info@vtc.vn 
                            </li>
                            <li class="hover_bg">
                                <?php echo $this->Html->image('user-icon.png'); ?>
                                <a href="<?php echo $this->Html->url(array('controller'=>'members','action'=>'login'),true);?>">
                                    Đăng nhập
                                </a>
                                |
                                <a href="<?php echo $this->Html->url(array('controller'=>'members','action'=>'register'),true);?>">
                                    Đăng ký
                                </a>
                            </li>
                            <li class="hover_bg">
                                <a href="domain_cart.html">
                                    <?php echo $this->Html->image('cart-icon.png'); ?>
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
                <a href="<?php echo $this->Html->url(array('controller'=>'home','action'=>'index'),true);?>"><?php echo $this->Html->image('vtc-logo.png'); ?></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo $this->Html->url(array('controller'=>'home','action'=>'index'),true);?>">Trang chủ</a></li>
                    <li  class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">máy chủ ảo</a>
                        <ul class="dropdown-menu">
                            <li><a href="Cloud_server_Window.html">Máy chủ Windows</a></li>
                            <li><a href="Cloud_server_Linux.html">Máy chủ linux</a></li>
                        </ul>
                    </li> 
                    <li  class="dropdown"><a href="">máy chủ lưu trữ</a></li>
                    <li  class="dropdown"><a href="#">DATa center</a></li>
                    <li  class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">tên miền</a>
                        <ul class="dropdown-menu">
                            <li><a href="Domain_search.html">Đăng ký tên miền</a></li>
                            <li><a href="domain_price.html">Bảng giá tên miền</a></li>
                            <li><a href="domain_transfer.html">Chuyển đổi nhà cung cấp</a></li>
                            <li><a href="Domain_search.html">Kiểm tra tên miền</a></li>
                        </ul>
                    </li>
                    <li  class="dropdown"><a href="#">tin tức</a></li>
                    <li  class="dropdown"><a href="#">liên hệ</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <?php
        echo $this->fetch('content');
    ?>
    <footer>
        <div class="tfoot">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <form action="" method="POST">
                            <label for="send_mail">Đăng ký nhận  email</label>
                            <div>
                                <input type="text" class="form-control" id="send_mail" placeholder="Vui lòng ghi địa chỉ email tại đây!.....">
                                <button type="submit" class="btn btn-primary">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
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
                        <img src="img/logo_footer.png">
                        <ul class="list-unstyled">
                            <li class="list-group-item">Toà nhà VTC,</li>
                            <li class="list-group-item"> 23 Phố Lạc Trung, </li>
                            <li class="list-group-item">Vĩnh Tuy, Hai Bà Trưng, Hà Nội</li>
                            <li class="list-group-item">Phone: (04) 4450 5566</li>
                            <li class="list-group-item">Mail: cloud.info@vtc.vn</li>
                            <li class="list-group-item">View Directions</li>
                            <img src="img/logo_icon.png" class="hidden-xs">
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
    <div class="online_sp">
        <div id="hotline">
            <?php echo $this->Html->image('online_icon1.png'); ?>
            <span>Hotline:</span>
            <strong class="phone">04) 4450 5566</strong>
        </div>
        <div id="tech_ol">
            <?php echo $this->Html->image('online_icon2.png'); ?>
            <span>Hỗ trợ kỹ thuật:</span>
            <strong class="phone">0123.456.789</strong>
        </div>
        <div id="tv_ol">
            <a href="">
            <?php echo $this->Html->image('online_icon3.png'); ?>
                <strong>Tư vấn trực tuyến</strong>
            </a>
        </div>
    </div>
    <?php echo $this->Html->script('home_page.js'). "\n"; ?>
    <script type="text/javascript">jssor_1_slider_init();</script>
    
    <?php echo $this->fetch('script'); ?>
</body>
</html>