    <!DOCTYPE html>
    <html>

    <head>
        <title><?php echo $title_for_layout ?></title>

        <?php echo $this->html->meta('icon',
            'vtc-logo.png',
            array('type' => 'icon'));
        ?>
        <?php echo $this->Html->charset() . "\n"; ?>
        <?php
        echo $this->Html->meta(array('http-equiv' => 'X-UA-Compatible', 'content' => 'IE=edge,chrome=1'));
        echo $this->Html->meta(array('name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0'));
        echo $this->Html->meta('description', 'Cloud, Domain shopping cart, test', array('type' => 'description'), false);
        echo $this->Html->css('bootstrap.min.css') . "\n";
        echo $this->Html->script('jquery.min.js') . "\n";
        echo $this->Html->script('bootstrap.min.js') . "\n";
        echo $this->Html->css('cart-finish') . "\n";
        echo $this->Html->css('style') . "\n";
        echo $this->Html->css('http://fonts.googleapis.com/css?family=Ruge+Boogie') . "\n";
        ?>

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
                            <?php if (isset($login)) { ?>

                                <li class="hover_bg">
                                    <ul class="">
                                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <?php echo $login;
                                                echo $this->Html->image('user-icon.png'); ?><b class="caret"></b></a>
                                            <ul class="dropdown-menu menu-user">

                                                <li>
                                                    <a href="<?php echo $this->Html->url(array('controller' => 'members', 'action' => $profile), true); ?>">
                                                        <span class="glyphicon glyphicon-wrench"></span> Cài đặt</a></li>
                                                <li><a href="#"><span class="glyphicon glyphicon-earphone"></span> Liên hệ
                                                        hỗ trợ</a></li>
                                                <li>
                                                    <a href="<?php echo $this->Html->url(array('controller' => 'members', 'action' => 'logout'), true); ?>"><span
                                                                class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            <?php } else { ?>
                                <li class="hover_bg">
                                    <?php echo $this->Html->image('user-icon.png'); ?>
                                    <a href="<?php echo $this->Html->url(array('controller' => 'members', 'action' => 'login'), true); ?>">
                                        Đăng nhập
                                    </a>
                                    |
                                    <a href="<?php echo $this->Html->url(array('controller' => 'members', 'action' => 'register'), true); ?>">
                                        Đăng ký
                                    </a>
                                </li>
                            <?php } ?>

                            <!--// tue.phpmailer@gmail.com //
                           // Get number item cart for home page //-->
                            <li class="hover_bg">
                                <a href="<?php echo $this->Html->url('/cart/', true); ?>">
                                    <?php
                                    echo $this->Html->image("cart-icon.png", array("alt" => "icon"));
                                    echo " <span id='id_count_carts'>" . $n_item_cart . " </span>";
                                    ?>
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
                <a href="<?php echo $this->Html->url(array('controller' => 'home', 'action' => 'index'), true); ?>"><?php echo $this->Html->image('vtc-logo.png'); ?></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo $this->Html->url(array('controller' => 'home', 'action' => 'index'), true); ?>">Trang
                            chủ</a></li>
                    <li class="dropdown">
                        <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">máy chủ ảo</a>
                        <ul class="dropdown-menu">
                            <li><a href="Cloud_server_Window.html">Máy chủ Windows</a></li>
                            <li><a href="Cloud_server_Linux.html">Máy chủ linux</a></li>
                        </ul> -->
                        <a href="<?php echo $this->Html->url(array('controller' => 'cloudservers', 'action' => 'index'), true); ?>">máy
                            chủ lưu trữ</a>
                    </li>
                    <li class="dropdown"><a
                                href="<?php echo $this->Html->url(array('controller' => 'ssl', 'action' => 'index'), true); ?>">bảo
                            mật</a></li>
                    <li class="dropdown"><a href="#">DATa center</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">tên miền</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo $this->Html->url(array('controller' => 'ProductPrices', 'action' => 'register_domain'), true); ?>">Đăng
                                    ký tên miền</a></li>
                            <li><a href="domain_price.html">Bảng giá tên miền</a></li>
                            <li><a href="domain_transfer.html">Chuyển đổi nhà cung cấp</a></li>
                            <li>
                                <a href="<?php echo $this->Html->url(array('controller' => 'ProductPrices', 'action' => 'result_search'), true); ?>">Kiểm
                                    tra tên miền</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a
                                href="<?php echo $this->Html->url(array('controller' => 'News', 'action' => 'news_menulist'), true); ?>">tin
                            tức</a></li>
                    <li class="dropdown"><a href="#">liên hệ</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
            echo $this->fetch('content');
        ?>



        <div class="contac_info">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contact_vtc">
                        <h3>VTC CLOUD Nhà cung cấp tên miền và Cloud server số 1 Việt Nam</h3>
                        <p>
                            Nhà cung cấp tên miền và Cloud server số 1 Việt Nam <br>
                            Trụ sở chính: Toà nhà VTC, 23 Phố Lạc Trung, Vĩnh Tuy, Hai Bà Trưng, Hà Nội  <br>
                            VP miền Nam: Tầng 4, 88A-B Trần Huy Liệu, P.15, Q. Phú Nhuận, Tp. Hồ Chí Minh  <br>
                            Hotline: Miền Nam: (08) 4450 3077 - Miền Bắc: (04) 4450 5566  <br>
                            Email: cloud.info@vtc.vn  <br>
                            Hotline: Miền Nam: (08) 4450 3077 - Miền Bắc: (04) 4450 5566
                        </p>
                        <ul class="list-inline banklist text-center">
                            <li class="list-group-item">
                                <?php echo $this->Html->image('paypal.png', array('class' => 'img-responsive')); ?>
                            </li>
                            <li class="list-group-item">
                                <?php echo $this->Html->image('vietcom.png', array('class' => 'img-responsive')); ?>
                            </li>
                            <li class="list-group-item">
                                <?php echo $this->Html->image('techcom.png', array('class' => 'img-responsive')); ?>
                            </li>
                            <li class="list-group-item">
                                <?php echo $this->Html->image('viettin.png', array('class' => 'img-responsive')); ?>
                            </li>
                            <li class="list-group-item">
                                <?php echo $this->Html->image('vib.png', array('class' => 'img-responsive')); ?>
                            </li>
                            <li class="list-group-item">
                                <?php echo $this->Html->image('hdbank.png', array('class' => 'img-responsive')); ?>

                            </li>
                            <li class="list-group-item">
                                <?php echo $this->Html->image('agri.png', array('class' => 'img-responsive')); ?>

                            </li>
                            <li class="list-group-item">
                                <?php echo $this->Html->image('bidv.png', array('class' => 'img-responsive')); ?>
                            </li>
                            <li class="list-group-item">
                                <?php echo $this->Html->image('donga.png', array('class' => 'img-responsive')); ?>
                            </li>
                            <li class="list-group-item">
                                <?php echo $this->Html->image('baokim.png', array('class' => 'img-responsive')); ?>
                            </li>
                            <li class="list-group-item">
                                <?php echo $this->Html->image('soha.png', array('class' => 'img-responsive')); ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

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
                            <?php echo $this->Html->image('logo_footer.png'); ?>
                            <ul class="list-unstyled">
                                <li class="list-group-item">Toà nhà VTC,</li>
                                <li class="list-group-item"> 23 Phố Lạc Trung, </li>
                                <li class="list-group-item">Vĩnh Tuy, Hai Bà Trưng, Hà Nội</li>
                                <li class="list-group-item">Phone: (04) 4450 5566</li>
                                <li class="list-group-item">Mail: cloud.info@vtc.vn</li>
                                <li class="list-group-item">View Directions</li>
                                <?php echo $this->Html->image('logo_icon.png', array('class' => 'hidden-xs')); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="coppyright">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <span>Copyright © 2017 Codelovers. All rights reserved.</span>
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

        <?php /*echo $this->fetch('script'); */?>

    </body>

    </html>