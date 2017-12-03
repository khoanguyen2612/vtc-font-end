    <?php
        echo $this->Html->script('jquery.validate.min.js');
        echo $this->Html->script('additional-methods.min.js');
        echo $this->Html->script('jquery.numbervalidation.min.js');
    ?>


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
                                'class' => 'storage_form form-horizontal',
                                'role' => 'form',
                            )
                        );
                    ?>
                    <div class="col-lg-6">
                        <h4><i></i><span>Dịch vụ bổ sung</span></h4>

                        <div class="row text">
                            <div id="alertSuccess" class="alert alert-success alert-dismissable" style="display:none;">
                                <button id="buttonAlertSuccess" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Success!</strong> Giá trị nhập vào phù hợp!
                            </div>
                            <div id="alertDanger" class="alert alert-danger alert-dismissable" style="display:none;">
                                <button id="buttonAlertDanger" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Error!</strong> Giá trị nhập vào không phù hợp!
                            </div>
                        </div>

                        <div class="row text">
                            <div class="col-lg-6">
                                <span>Dung lượng:</span>
                            </div>
                            <div class="col-lg-6">

                                <?php
                                    echo $this->Form->input('l_capacity', array(
                                        'type'=>'text',
                                        //'name'=> 'l_capacity',
                                        'label' => false,
                                        'value'=> $storage['l_capacity'],
                                        'id'=> 'id_l_capacity',
                                        'class'=> 'form-control',
                                        'div'=> false,
                                        //'required' => 'required',
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
                                        'class'=> 'opt_select form-control',
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
                        <button type="submit" class="btn btn-default" name="submit" value="kích-hoạt" id="btn_form_store_submit">Kích hoạt</button>
                    </p>

                <?php
                    echo $this->Form->end();
                ?>

            </div>
        </div>
    </div>

    <?php
        // tuent.phpmailer@gmail.com //
        $opt_url =  Router::url(array('controller' => 'storage', 'action' => 'change_money'));
    ?>

    <script type="text/javascript">

        function closeAlerts() {
            $("#alertSuccess").css("display", "none");
            $("#alertDanger").css("display", "none");
        }

        function openAlert(valid) {
            valid ? $("#alertSuccess").css("display", "block") : $("#alertDanger").css("display", "block");
        }

        $(document).ready(function () {

             $("#id_l_capacity").masknumber({
                rules: {
                    type: 'integer',
                    required: true,
                    minvalue: <?=$min ?>,
                    maxvalue: <?=$max ?>,
                },
                messages: {
                    type: "Gía trị field phải là số",
                    required: "Field không được để trống",
                    minvalue: "Giá trị tối thiểu là <?=$min ?>",
                    maxvalue: "Giá trị tối đa là <?=$max ?>"

                },
                settingserror: {
                    tooltipplacement: "right",
                }
            })

            $("#btn_form_store_submit").bind("click", function (event) {
                closeAlerts();
                if ($("#id_l_capacity").validnumber()) {
                    var gb = $("#id_l_capacity").val();
                    $("#id_l_capacity").val(gb + ' GB');
                    $("#id_form_store").submit();
                    return true;
                }
                else {
                    //alert(JSON.stringify($("#id_l_capacity").validnumber()));
                    openAlert(false);
                    event.preventDefault();
                    return false;
                }
                return true;
            })

            $("#buttonAlertSuccess").click(function () {
                closeAlerts();
            })

            $("#buttonAlertDanger").click(function () {
                closeAlerts();
            })

    })


    </script>

    <!-- HERE IS THE SELECT FILTER -->
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
                    url: "<?=$opt_url?>",   // This one should sent data to index action of the typology controller for processing
                    data: JSON.stringify(data),   // 1 param for money,  get all the select opt id data.. ,  You will get all the select data..

                    dataType: "json",
                    contentType: "application/json",
                    success: function ( resp, textStatus) {
                        l_price = tmp;
                        $("#id_l_price").val(resp.l_price);
                        $("#total_l_price").html(resp.total_l_price + ' VNĐ');
                        console.log(textStatus);
                        console.log(jQuery.parseJSON(resp));
                    },
                })
                event.preventDefault();
                return false;
             })
        })

        $("#id_l_capacity").on("click", function() {
            $(this).val("");
        })

    </script>





    <?php echo $this->Html->css('storage_service.css');?>

    <style type="text/css">
        .l_package {
            background-color: #f3f3f3;
        }
        #id_l_capacity {
            opacity: 0.6;
        }
        #id_opt_select {
            text-transform: uppercase;
        }

        .tooltip {
            width: 250px;
            height: 35px;
        }



    </style>

