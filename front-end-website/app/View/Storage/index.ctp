
    <div class="account-cart hidden">
        <div class="container">
            <div class="row">
                <div class="col-md-3 bg-1a70b7">
                    <span>Đại lý cấp: </span>3<br>
                    <span>Tổng tiền đã nạp: <big>0 VNĐ</big></span>
                </div>
                <div class="col-md-3 text-center">
                    <span>Số dư tài khoản: <big>0 VNĐ</big></span>
                </div>
                <div class="col-md-3 text-center bg-1a70b7">
                    <span>Điểm thưởng: <big>0</big></span>
                </div>
                <div class="col-md-3 text-center">
                    <button class='btn'>Nạp tiền</button>
                </div>
            </div>
        </div>
    </div>

    <!--// Storage menu //-->
    <nav class="navbar navbar-default hidden" id="menuNavbar">
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

    <!--// content //-->
    <!-- HERE IS THE CLICK FILTER -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('.now_reg_storage hidden').bind("click", function (event) {
                var id_select = (event.target.id).substr(0, 15);
                var data = { };
                $("form#" + id_select).trigger('submit');
                console.log("ID click a href" + id_select);

                event.preventDefault();
                return false;
            });
            function submitDetailsForm(id) {
                $("#" + id).submit();
            }
        });

    </script>
    <div class="cloud_storage">
        <div class="container">

            <div class="head text-center">
                <h1>KHÔNG GIAN LƯU TRỮ AN TOÀN, TỐC ĐỘ CAO</h1>
                <h3>Liên hệ Viettel IDC để được trải nghiệm dịch vụ lưu trữ trực tuyến hàng đầu tại Việt Nam</h3>
            </div>

            <div class="l_package">
                <div class="row">

                    <?php
                        // fix  UNDEFINED OFFSET: -1 [APP/VIEW/STORAGE/INDEX.CTP
                        if (count($all_storage) > 0)   {
                            $i = 0; $_c = count($all_storage) - 1;
                        foreach ($all_storage as $value) {
                            if ($_c == $i) break;
                    ?>

                            <div class="col-md-3 col-lg-3">
                                <?php
                                    //echo $this->Form->create(null, array('type' => 'POST',
                                    echo $this->Form->create('Storage',
                                        array('type' => 'POST',
                                            'url' => array('controller' => 'storage', 'action' => 'chosen_capacity'),
                                            'id' => "id_form_store_{$i}",
                                            'name' =>  "form_store_{$i}",
                                            'class' => 'storage_form',
                                            'role' => 'form',
                                        )
                                    );

                                ?>
                                <div class="location_item">
                                    <h3> <?php echo $value['ProductPrice']['product_name'] ;?> </h3>
                                    <p>
                                        Dung lượng: <?php echo  $value['ProductPrice']['product_description'] ;?> <br>
                                        Đơn giá tính theo GB/tháng <br>
                                    </p>

                                    <p class="hidden">
                                        Dung lượng: <?php echo (string) round($value['ProductPrice']['except_hdd']/1024) . ' MB' ;?> <br>
                                        Đơn giá tính theo GB/tháng <br>
                                    </p>

                                    <p class="l_price">
                                        <?php echo (string) number_format($value['ProductPrice']['price'],0,',','.' ); ?> <span> VNĐ/THÁNG</span>
                                    </p>

                                    <button type="submit"> ĐĂNG KÝ NGAY</button>
                                    <a href="<?php echo $this->Html->url('/storage/chosen_capacity'); ?>" id="id_form_store_<?=$i?>_link" class="now_reg_storage hidden"  > ĐĂNG KÝ NGAY</a>

                                </div>

                                <?php

                                    echo $this->Form->input('l_price',
                                        array(
                                            'id' => "id_l_price_{$i}",
                                            'type' => 'hidden',
                                            //'name' => 'l_price',
                                            'value' => $value['ProductPrice']['price'],
                                        )
                                    );

                                    echo $this->Form->input('l_capacity',
                                        array(
                                            'id' => "id_l_capacity_{$i}",
                                            'type' => 'hidden',
                                            //'name' => 'l_capacity',
                                            //'value' =>  'Dung lượng: '. (string) round($value['ProductPrice']['except_hdd']/1024). ' MB',
                                            'value' =>  'Dung lượng: '. (string) $value['ProductPrice']['product_description'],
                                        )
                                    );

                                    echo $this->Form->end();

                                ?>
                            </div>
                        <?php
                            $i ++; }
                        }
                    ?>

                    <div class="col-md-12 col-lg-12">
                        <?php
                            $_c = count($all_storage) - 1;
                            echo $this->Form->create('Storage',
                                array('type' => 'POST',
                                    'url' => array('controller' => 'storage', 'action' => 'chosen_capacity'),
                                    'id' => "id_form_store_$_c",
                                    'name' =>  "form_store_$_c",
                                    'class' => 'storage_form',
                                    'role' => 'form',
                                )
                            );
                        ?>
                        <div class="location_item">
                            <h3><?php echo $all_storage[$_c]['ProductPrice']['product_name'];?></h3>
                            <p>
                                Dung lượng: <?php echo (string) $all_storage[$_c]['ProductPrice']['product_description'];?> <br>
                                Đơn giá tính theo GB/tháng <br>
                            </p>

                            <p class="hidden">
                                Dung lượng: <?php echo (string) round($all_storage[$_c]['ProductPrice']['except_hdd']/1024) . ' MB' ;?> <br>
                                Đơn giá tính theo GB/tháng <br>
                            </p>
                            <p class="l_price">
                                <?php echo (string) number_format($all_storage[$_c]['ProductPrice']['price'],0,',','.' ); ?> <span> VNĐ/THÁNG</span>
                            </p>

                            <button type="submit"> ĐĂNG KÝ NGAY</button>
                            <a href="<?php echo $this->Html->url('/storage/chosen_capacity'); ?>" id="id_form_store_<?=$_c?>_link" class="now_reg_storage hidden"  > ĐĂNG KÝ NGAY</a>
                        </div>

                        <?php
                        echo $this->Form->input('l_price',
                            array(
                                'id' => "id_l_price_$_c",
                                'type' => 'hidden',
                                //'name' => 'l_price',
                                'value' => $all_storage[$_c]['ProductPrice']['price'],
                            )
                        );
                        echo $this->Form->input('l_capacity',
                            array(
                                'id' => "id_l_capacity_$_c",
                                'type' => 'hidden',
                                //'name' => 'l_capacity',
                                //'value' => (string) round($all_storage[$_c]['ProductPrice']['except_hdd']/1024) . ' MB',
                                'value' => (string) $all_storage[$_c]['ProductPrice']['product_description'],
                            )
                        );
                        echo $this->Form->end();

                        ?>

                    </div>
                    <!-- end foreach -->
                </div>
            </div>
        </div>
    </div>


    <!--// content //-->
    <div class="sp_tag product-home hidden">
        <div class="container">
            <div class="row">
                <div class="product-contact pay-cart">
                    <?php echo $this->Html->image('pay-cart.png', array('class' => ''));?>
                </div>
                <div class="product-contact">
                    <div class="col-md-4">
                        <?php echo $this->Html->image('icon-01.png', array('class' => ''));?>
                        <span>NHÂN VIÊN PHỤ TRÁCH KINH DOANH</span>
                        <ul>
                            <li>Thiên Thanh</li>
                            <li>0912.345.678</li>
                            <li>cloud.info@vtc.vn</li>
                        </ul>
                        <?php echo $this->Html->image('icon-04.png', array('class' => ''));?>
                        <span>HỖ TRỢ KỸ THUẬT</span>
                        <ul>
                            <li>Thiên Thanh</li>
                            <li>(08) 4450 3077</li>
                        </ul>
                        <?php echo $this->Html->image('icon-05.png', array('class' => ''));?>
                        <span>CHĂM SÓC KHÁCH HÀNG</span>
                        <ul>
                            <li>Thiên Thanh</li>
                            <li>(08) 4450 3077</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <?php echo $this->Html->image('icon-02.png', array('class' => ''));?>
                        <span>TIN KHUYẾN MÃI</span>
                        <div class="list-contact">
                            <p><b>(06-11-2017)</b><a href="#"> Thông báo bảo trì hệ thống Windows Hosting trên Server shost016 và shost017</a></p>
                            <p><b>(06-10-2017)</b><a href="#"> Thông báo bảo trì hệ thống Server</a></p>
                            <p><b>(16-02-2017)</b><a href="#"> Thông báo Điều chỉnh biểu phí tên miền Việt Nam ".VN"</a> </p>
                            <p><b>(06-01-2017)</b><a href="#"> Thông báo bảo trì hệ thống Windows Hosting trên Server shost016 và shost017</a></p>
                            <p><b>(01-01-2017)</b><a href="#"> Thông báo bảo trì hệ thống Windows Hosting trên Server shost016 và shost017</a></p>
                            <div class="pull-right">
                                <a href="#" class="btn btn-orange">Xem tất cả</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <?php echo $this->Html->image('icon-03.png', array('class' => ''));?>
                        <span>HÒM THƯ GÓP Ý</span><br>
                        <div class="send-mail">
                            <a href="#"><?php echo $this->Html->image('icon-email.png', array('class' => ''));?>
                            <span>Gửi tới ban giám đốc</span></a>
                        </div>
                        <div class="send-mail">
                            <a href="#"><?php echo $this->Html->image('icon-email1.png', array('class' => ''));?>
                            <span>Gửi tới bộ phận chăm sóc khách hàng</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo $this->Html->css('storage_service.css'); ?>
    <style type="text/css">
        .l_package {
            background-color: #f3f3f3;
        }
        button {
            font-size: 16px;
            margin-top: 45px;
            display: block;
            background: #f37636;
            color: #fff;
            padding: 24px 0px 17px 0px;

            width: 100%;
            border-radius: 2px;
            border: none;
        }
        button:hover {
            text-decoration: none;
            background-color: #2a1aa3;
        }
    </style>