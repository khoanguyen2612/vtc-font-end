<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title_for_layout ?></title>
        <?php echo $this->html->meta('icon','vtc-logo.png',array('type' => 'icon'));?>
        <?php echo $this->Html->charset() . "\n"; ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
        <?php echo $this->Html->css('bootstrap.min.css') . "\n"; ?>
        <?php echo $this->Html->script('jquery.min.js') . "\n"; ?>
        <?php echo $this->Html->script('bootstrap.min.js') . "\n"; ?>
        <script src='https://www.google.com/recaptcha/api.js?hl=vi'></script>
        <?php echo $this->Html->css('style.css') . "\n"; ?>
        <?php echo $this->Html->script('jssor.slider-26.3.0.min.js') . "\n"; ?>
    </head>
    <body>
        <div class="topnav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <a href="<?php echo $this->Html->url('/cart/', true); ?>">
                            <?php echo $this->Html->image('mana_cart.png'); ?>
                            Quản lý đơn hàng  (<?php echo " <span id='id_count_carts'>" . $n_item_cart . " </span>"; ?>)
                         </a>
                    </div>
                    <div class="col-lg-7">
                        <ul class="list-inline pull-right">
                            <li><a href="">Giới thiệu</a></li>
                            <li><a href="<?php echo $this->Html->url(array('controller' => 'News', 'action' => 'news_menulist'), true); ?>">Tin Tức</a></li>
                            <li><a href="">Liên hệ</a></li>
                            <li><a href="">Tuyển dụng</a></li>
                            <?php if (isset($login)) { ?>
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?php echo "<span class='glyphicon glyphicon-user'></span>  "; echo $login;?><b class="caret"></b></a>
                                <ul class="dropdown-menu menu-user">
                                <li>
                                    <a href="<?php echo $this->Html->url(array('controller' => 'members', 'action' => $profile), true); ?>"><span class="glyphicon glyphicon-wrench"></span> Cập Nhật Thông Tin Tài Khoản</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-earphone"></span> Liên hệ hỗ trợ</a></li>
                                <li>
                                    <a href="<?php echo $this->Html->url(array('controller' => 'members', 'action' => 'logout'), true); ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                                </li>
                                </ul>
                            </li>
                            <?php } else { ?>
                                <li>
                                    <a href="<?php echo $this->Html->url(array('controller' => 'members', 'action' => 'login'), true); ?>"><span class="glyphicon glyphicon-user"></span> Đăng Nhập | </a> <a href="<?php echo $this->Html->url(array('controller' => 'members', 'action' => 'register'), true); ?>">Đăng Ký</a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="logo_div">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="col-lg-6">
                            <?php echo $this->Html->image('vtc-logo.png',array('class'=>'logo','url' => array('controller' => 'Home', 'action' => 'index'))); ?>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-group list-inline">
                                <li class="list-group-item">
                                    <?php echo $this->Html->image('top-phone-icon.png',array('class'=>'pull-left')); ?>
                                    <p><strong>Miền Nam:</strong>(08) 4450 3077</p>
                                    <p><strong>Miền Nam:</strong>(08) 4450 3077</p>
                                </li>
                                <li class="list-group-item">
                                    <?php echo $this->Html->image('24h_phone_icon.png',array('class'=>'pull-left')); ?>
                                    <h3>(04) 4450 5566</h3>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-default" id="menuNavbar">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                    </button>   
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="<?php echo $this->Html->url(array('controller' => 'home', 'action' => 'index'), true); ?>">
                                <?php echo $this->Html->image('Home.png') ?>      
                            </a>
                        </li>
                        <li  class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TÊN MIỀN</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo $this->Html->url(array('controller' => 'ProductPrices', 'action' => 'price'), true); ?>">BẢNG GIÁ TÊN MIỀN</a>
                                </li>
                                <li>
                                    <a href="<?php echo $this->Html->url(array('controller' => 'ProductPrices', 'action' => 'result_search'), true); ?>">KIỂM TRA TÊN MIỀN</a>
                                </li>
                                <li>
                                    <a href="<?php echo $this->Html->url(array('controller' => 'ProductPrices', 'action' => 'register_domain'), true); ?>">ĐĂNG KÝ TÊN MIỀN</a>
                                </li>
                                <li>
                                    <a href="domain_transfer.html">CHUYỂN ĐỔI NHÀ CUNG CẤP</a>
                                </li>
                            </ul>
                        </li>
                        <li  class="dropdown">
                            <a href="<?php echo $this->Html->url(array('controller' => 'cloudservers', 'action' => 'index'), true); ?>">
                                CLOUD SERVER
                            </a>
                        </li> 
                        <li  class="dropdown"><a href="<?php echo $this->Html->url(array('controller' => 'Storage', 'action' => 'index'), true); ?>">CLOUD STORAGE</a></li>
                        <li  class="dropdown">
                            <a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">SSL</a>
                             <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo $this->Html->url(array('controller' => 'DefineSsl', 'action' => 'index'), true); ?>">
                                        SSL là gì ?
                                    </a>
                                </li> 
                                <li>
                                    <a href="<?php echo $this->Html->url(array('controller' => 'ssl', 'action' => 'index'), true); ?>">
                                        Đăng Ký dịch vụ SSL
                                    </a>
                                </li> 
                            </ul>
                        </li>
                        <li  class="dropdown"><a href="<?php echo $this->Html->url(array('controller' => 'CoLocations', 'action' => 'index'), true); ?>">CO-LOCATION</a></li>
                        <li  class="dropdown">
                            <a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">DỊCH VỤ GIA TĂNG</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo $this->Html->url(array('controller' => 'Managerservers', 'action' => 'index'), true); ?>">
                                        QUẢN TRỊ CLOUD SERVER
                                    </a>
                                </li> 
                                <li>
                                    <a href="<?php echo $this->Html->url(array('controller' => 'ManaPrivateServers', 'action' => 'index'), true); ?>">
                                        QUẢN TRỊ MÁY CHỦ RIÊNG
                                    </a>
                                </li> 
                                <li>
                                    <a href="<?php echo $this->Html->url(array('controller' => 'SaveDataServices', 'action' => 'index'), true); ?>">
                                        SAO LƯU DỮ LIỆU
                                    </a>
                                </li> 
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php echo $this->fetch('content');?>
        <footer>
            <div class="tfoot">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
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
                        <div class="col-md-9 col-lg-9">
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
                            <section class="col-md-4 col-lg-4">
                                <h4>Support</h4>
                                <ul class="list-group">
                                    <li class="list-group-item"><a href="">Product Support</a></li>
                                    <li class="list-group-item"><a href="">Contact Us</a></li>
                                    <li class="list-group-item"><a href="">Knowledge Base</a></li>
                                    <li class="list-group-item"><a href="">Tutorials</a></li>
                                </ul>
                            </section>
                        </div>
                        <div class="col-md-3 col-lg-3 text-right" id="address"> 
                            <ul class="list-unstyled">
                                <li class="list-group-item">Toà nhà VTC,</li>
                                <li class="list-group-item"> 23 Phố Lạc Trung, </li>
                                <li class="list-group-item">Vĩnh Tuy, Hai Bà Trưng, Hà Nội</li>
                                <li class="list-group-item">Phone: (04) 4450 5566</li>
                                <li class="list-group-item">Mail: cloud.info@vtc.vn</li>
                                <li class="list-group-item">View Directions</li>
                                <?php echo $this->Html->image('logo_icon.png',array('class'=>'hidden-xs')); ?>
                            </ul>
                            <?php echo $this->Html->image('logo_footer.png'); ?>
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
        <?php echo $this->fetch('script'); ?>
    </body>
    </html>