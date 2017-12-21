    <div class="logo_div">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="col-lg-6 col-md-4">
                    <?php echo $this->Html->image('vtc-logo.png',array('class'=>'logo', 'url' => array('controller' => 'home', 'action' => 'index'))); ?>
                </div>
                <!--tue.phpmailer@gmail.com
                add infor for menu home-->
                <div class="col-lg-6 col-md-8">
                    <div class="cart-header col-md-offset-6 col-md-6 col-sm-offset-6 col-sm-6 col-xs-12 pull-right">
                        <i class="fa fa-cart-plus" style="color:#fff;font-size:20px;"></i>
                        <span> Bạn đang có: sản phẩm</span>
                    </div>
                    <div class="user-header col-md-12">
                        <p>Xin chào <b> </b> !</p>
                        <a href="#"><b>Danh sách khách hàng</b></a>
                        |<a href="#">Thông tin tài khoản</a>
                        |<a href="#">Thay đổi mật khấu</a>
                        |<a href=""><b>Thoát</b></a>
                    </div>
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
                    <a href="<?php echo $this->Html->url(array('controller' => 'home', 'action' => 'index'), true); ?>" style="padding: 9px;">
                        <i class="fa fa-home" style="color:#fff;font-size:32px;"></i>
                    </a>
                </li>
                <li  class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tên Miền Việt Nam</a>
                </li>
                <li  class="dropdown">
                    <a href="#">Tên Miền Quốc Tế</a>
                </li>
                <li  class="dropdown"><a href="#">Bảng giá dịch vụ</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nhân Viên Kinh Doanh</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo $this->Html->url(array('controller' => 'GroupSales', 'action' => 'view'), true); ?>">Quản Lý Nhóm</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!--// The above will output fast message for Note!-->
<!--// tue.phpmailer@gmail.com //-->
<div id="flash_message" class="flashMessage message alert">
    <?php echo $this->Session->flash(); ?>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        var message = $(".flashMessage" ).contents().find("code").text();
        if ( message == '' || message.length == 0) {
            $("#flash_message").css('display', 'none');
        }
        else {
            $("#flash_message").css('display', 'block');
        }
        console.log('flashMessage: ' + message);
    })
</script>
