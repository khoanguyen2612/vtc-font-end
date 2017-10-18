<section>
    <!--/ tue.phpmailer@gmail.com  fix to DieuBT header /-->
    <div class="top-nav">
        <div class="container">
            <div class="row">
                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                    <div class="btn-group" role="group">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                LANGUAGE
                                <?php echo $this->Html->image('lang-icon.png',array('class' => ''));?>
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
                            <li>
                                <a href="" class="phone">
                                    <?php echo $this->Html->image('phone-icon.png',array('class' => ''));?>
                                    (04) 4450 5566
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <?php echo $this->Html->image('email-icon.png',array('class' => ''));?>
                                    cloud.info@vtc.vn
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <?php echo $this->Html->image('suppot-icon.png',array('class' => ''));?>
                                    Hỗ trợ
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Html->url(array( 'controller' => 'members', 'action' => 'login' ), true); ?>">
                                    <?php echo $this->Html->image('user-icon.png',array('class' => ''));?>
                                    Đăng nhập
                                </a>
                            </li>
                            <li>
                                <a href="domain_cart.html">
                                    <?php echo $this->Html->image('cart-icon.png',array('class' => ''));?>
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
                <?php echo $this->Html->image('vtc-logo.png', array('class' => '')); ?>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <!--<a href="Home.html">HOME</a>-->
                        <?php echo $this->Html->link(
                            'HOME',
                            array(
                                'controller' => 'home',
                                'action' => 'index',
                                'full_base' => true
                            )
                        ); ?>

                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">DOMAINS</a>
                        <ul class="dropdown-menu">
                            <li><a href="Domain_search.html">Đăng ký tên miền</a></li>
                            <li><a href="#">Bảng giá tên miền</a></li>
                            <li><a href="#">Chuyển đổi nhà cung cấp</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">HOSTING</a></li>
                    <li class="dropdown"><a href="#">FEATURES</a></li>
                    <li class="dropdown"><a href="#">SERVICES</a></li>
                    <li class="dropdown"><a href="#">BLOG</a></li>
                    <li class="dropdown"><a href="#">SUPPORT</a></li>
                    <li class="dropdown"><a href="#">CONTACT</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!--/ end tue.phpmailer@gmail.com  fix to DieuBT header /-->

</section>

