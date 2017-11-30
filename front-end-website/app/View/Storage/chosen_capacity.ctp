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

                <?php
                    //echo $this->Form->create(null, array('type' => 'POST',
                    echo $this->Form->create('Storage',
                        array('type' => 'POST',
                            'url' => array('controller' => 'storage', 'action' => 'add_to_cart'),
                            'id' => "id_form_store",
                            'name' =>  "form_store",
                            'class' => 'storage_form',
                            'role' => 'form',
                        )
                    );
                ?>
                    <div class="col-lg-6">
                        <h4><i></i><span>Dịch vụ bổ sung</span></h4>
                        <div class="row text">
                            <div class="col-lg-6">
                                <span>Dung lượng:</span>
                            </div>
                            <div class="col-lg-6">
                                <!--<input type="text" name="l_capacity" value="<?php /*echo $storage['l_capacity'] ;*/?>" id="id_l_capacity" >-->
                                <?php
                                    echo $this->Form->input('l_capacity', array(
                                        'type'=>'text',
                                        //'name'=> 'l_capacity',
                                        'label' => false,
                                        'value'=> $storage['l_capacity'],
                                        'id'=> 'id_l_capacity',
                                        'class'=> 'input_capacity',
                                        'div'=> false,
                                    ));
                                ?>
                            </div>
                        </div>
                        <div class="row text">
                            <div class="col-lg-6">
                                <span>Thời hạn đăng ký:</span>
                            </div>
                            <div class="col-lg-6">
                                <?php
                                    $data = array(
                                       '1' => '1 tháng', '2' => '2 tháng', '3' => '3 tháng', '4' => '4 tháng', '5' => '5 tháng', '6' => '6 tháng',
                                       '7' => '7 tháng', '8' => '8 tháng', '9' => '9 tháng', '10' => '10 tháng', '11' => '11 tháng', '12' => '12 tháng',
                                    );

                                    echo $this->Form->input('month', array(
                                        'type'=>'select',
                                        //'name'=> 'month',
                                        'label'=> false,
                                        'options'=> $data,
                                        'value'=> 1,
                                        'id'=> 'id_opt_select',
                                        'class'=> 'opt_select',
                                    ));

                                ?>

                            </div>
                        </div>
                        <div class="row text">
                            <div class="col-lg-6">
                                <span>Tổng chi phí:</span>
                            </div>
                            <div class="col-lg-6">
                                <strong class="price" id="total_l_price"><?php echo number_format($storage['l_price'],0,',','.' );?> VNĐ</strong>
                                <?php
                                    echo $this->Form->input('l_price',
                                        array(
                                            'id' => "id_l_price",
                                            'type' => 'hidden',
                                            //'name' => 'l_price',
                                            'value' => $storage['l_price'],
                                        )
                                    );
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <p class="action text-center">
                        <a href="" class="btn btn-default hidden">Quay lại</a>
                        <?php
                            echo $this->Html->link('Quay lại', array(
                                'controller' => 'storage',
                                'action' => 'index',
                            ),
                                array('class' => 'btn btn-default', 'escape' => false)
                            );

                            echo "\n";
                        ?>
                        <button type="submit" class="btn btn-default" name="submit" value="kích-hoạt">Kích hoạt</button>
                    </p>

                <?php
                    echo $this->Form->end();
                ?>

            </div>
        </div>
    </div>
    <!-- content -->

    <!-- HERE IS THE SELECT FILTER -->
    <?php
        $opt_url =  Router::url(array('controller' => 'storage', 'action' => 'change_money'));
    ?>

    <!--// tuent.phpmailer@gmail.com //-->
    <script type="text/javascript">

        $(document).ready(function () {

            var l_price = $('#id_l_price').val();
            var tmp = l_price;

            $(".opt_select").bind("change keyup", function (event) {

                var id_select = event.target.id;
                var month = $("#id_opt_select").val();
                l_price = month * l_price;
                var data = {
                    total_l_price: l_price,
                };

                console.log('id select: ' + id_select);
                console.log('month: ' + month);
                console.log('l_price: ' + l_price);
                console.log('tmp: ' + tmp);
                console.log('data: ' + data);

                $.ajax({
                    async: true,
                    cache: false,
                    type: "POST",
                    url: "<?=$opt_url?>", // This one should sent data to index action of the typology controller for processing
                    data: JSON.stringify(data), // 1 param for money, // get all the select opt id data..
                    // You will get all the select data..
                    dataType: "json",
                    contentType: "application/json",
                    success: function ( resp, textStatus) {
                        l_price = tmp;
                        $("#id_l_price").val(resp.l_price);
                        $("#total_l_price").html(resp.total_l_price + ' VNĐ');
                        console.log(textStatus);
                        console.log(jQuery.parseJSON(resp));
                    }
                });

                event.preventDefault();
                return false;

            });

        })
    </script>


    <?php echo $this->Html->css('storage_service.css');?>

    <style type="text/css">
        .l_package {
            background-color: #f3f3f3;
        }
    </style>