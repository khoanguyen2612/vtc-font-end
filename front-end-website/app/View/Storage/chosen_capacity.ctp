    <!--// Storage menu //-->
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
                    <li><a href="#"><i class="fa fa-home" style="color:#fff;font-size:20px;"></i></a></li>
                    <li  class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Đăng ký dịch vụ</a>
                    </li>
                    <li  class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lịch sử giao dịch</a>
                    </li>
                    <li  class="dropdown"><a href="#">Bảng giá dịch vụ</a></li>
                    <li  class="dropdown"><a href="#">Quản lý dịch vụ</a></li>
                    <li  class="dropdown"><a href="#">Đang chờ xử lý</a></li>
                </ul>
            </div>
        </div>
    </nav>

<!-- content -->
    <div class="buy_more">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h4><i></i><span>Thông tin gói Cloud storage</span></h4>
                    <div class="row text">
                        <div class="col-lg-6">
                            <span>Dung lượng:</span>
                        </div>
                        <div class="col-lg-6">
                            <strong><?php echo $storage['l_capacity'] ;?></strong>
                        </div>
                    </div>
                    <div class="row text">
                        <div class="col-lg-6">
                            <span>Đơn giá tính theo GB/tháng:</span>
                        </div>
                        <div class="col-lg-6">
                            <strong class="price"><?php echo number_format($storage['l_price'],0,',','.' );?> VNĐ/THÁNG</strong>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-6">
                    <h4><i></i><span>Dịch vụ bổ sung</span></h4>
                    <div class="row text">
                        <div class="col-lg-6">
                            <span>Dung lượng:</span>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="addon_store" value="<?php echo $storage['l_capacity'] ;?>">
                        </div>
                    </div>
                    <div class="row text">
                        <div class="col-lg-6">
                            <span>Thời hạn đăng ký:</span>
                        </div>
                        <div class="col-lg-6">
                            <select name="">
                                <option>12 tháng</option>
                                <option>24 tháng</option>
                                <option>36 tháng</option>
                                <option>48 tháng</option>
                            </select>
                        </div>
                    </div>
                    <div class="row text">
                        <div class="col-lg-6">
                            <span>Tổng chi phí:</span>
                        </div>
                        <div class="col-lg-6">
                            <strong class="price"><?php echo number_format($storage['l_price'],0,',','.' );?> VNĐ</strong>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <p class="action text-center">
                    <a href="" class="btn btn-default">Quay lại</a>
                    <button type="submit" class="btn btn-default">Kích hoạt</button>
                </p>
            </div>
        </div>
    </div>
    <!-- content -->

    <?php //echo $this->Html->css('customer_home.css'); ?>
    <?php echo $this->Html->css('storage_service.css');?>

    <style type="text/css">
        .l_package {
            background-color: #f3f3f3;
        }
    </style>