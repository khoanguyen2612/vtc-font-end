<SCRIPT LANGUAGE="JavaScript">

    //<!-- Begin
    var mikExp = /[$\\@\\\#%\^\&\*\(\)\[\]\+\_\{\}\`\~\=\|\!\-]/;

    function dodacheck(val) {
        var strPass = val.value;
        var strLength = strPass.length;
        var lchar = val.value.charAt((strLength) - 1);
        if (lchar.search(mikExp) != -1) {
            var tst = val.value.substring(0, (strLength) - 1);
            val.value = tst;
        }
    }

    //  End -->
</script>
<script>
    function a() {
// var a = document.getElementById("qwe").value;
        var a = document.getElementById("input");
        dodacheck(a);
    }
</script>
<div class="search-domain">
    <div class="container-fluid">
        <h3 class="text-center">ĐĂNG KÍ THÊM TÊN MIỀN</h3>
        <ul class="nav nav-tabs container">
            <li class="active">
                <a href="<?php echo $this->Html->url(array('controller' => 'ProductPrices', 'action' => 'register_domain'), true); ?>">
                    Đăng ký tên miền
                </a>
            </li>
            <li>
                <a href="<?php echo $this->Html->url(array('controller' => 'ProductPrices', 'action' => 'domain_transfer'), true); ?>">Chuyển đổi nhà cung cấp</a>
            </li>
            <li>
                <a href="<?php echo $this->Html->url(array('controller' => 'ProductPrices', 'action' => 'result_search'), true); ?>">
                    Kiểm tra tên miền
                </a>
            </li>
            <li>
                <a href="<?php echo $this->Html->url(array('controller' => 'ProductPrices', 'action' => 'price'), true); ?>">Bảng
                    giá tên miền</a></li>
        </ul>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 search-add">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <p class="p-add"> Đăng kí tên miền để bảo vệ thương hiệu của bạn</p>
                </div>
                <form name="xyz" method="POST">
                    <div>
                        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
                            <input type="text" id="input" name="add_doamin" class="form-control input-add"
                                   placeholder="Nhập tên miền muốn đăng kí..." onKeyUp="a()">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                            <button type="submit" class="btn btn-add-domain">Kiểm tra</button>
                        </div>
                    </div>
                </form>
                <?php if (isset($request1)) { 

                        $i = 0;
                        $do_id = 0;
                        ?>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <p class="p-add"> Kết quả kiểm tra</p>
                </div>
                <div id="loading" style="display: none; position: static; top: 100px; left: auto">
                    <div class="alert alert-info" role="alert">
                        <i class=" fa fa-spinner fa-spin"></i>Đang thêm sản phẩm vào giỏ hàng...
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 add-domain-domain">
                    <div class="table-responsive add-on">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Tên miền</th>
                                <th>Phí duy trì</th>
                                <th> Phí đăng kí</th>
                                <th> Thông tin Whois</th>
                                <th>Thêm vào giỏ hàng</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <?php

                                    if ($output['status'] == "available") {
                                        echo "<img src='../app/webroot/img/icon-check.png'>";
                                    } else {
                                        echo "<img src='../app/webroot/img/icon-del.png'>";
                                    }

                                    ?>

                                </td>
                                <td><?php echo $request1 ?></td>
                                <?php foreach ($data1 as $item) { ?>
                                    <?php if ($item['ProductPrice']['product_name'] == $check) { ?>
                                        <td>
                                            <p class="p-money"><?php echo number_format($item['ProductPrice']['price'], 0, ',', '.') ?>
                                                VNĐ</p></td>
                                        <td>
                                            <p class="img-fee"><?php echo number_format($item['ProductPrice']['bk_price'], 0, ',', '.') ?>
                                                VNĐ</p>
                                        </td>

                                    <?php }
                                } ?>
                                <td>
                                    <?php if ($output['status'] != 'available') { ?>
                                        <form action="" method="POST">
                                            <input type="hidden" class="domain_name" name="domain_name"
                                                   value='<?php echo $request1 ?>'>

                                            <div class='btn btn-danger button1' data-toggle="modal"
                                                 data-target="#myModal">Whois <img
                                                        src='../app/webroot/img/icon-whois.png'></div>
                                            <!-- Modal -->
                                            <div class="modal fade" id="myModal" role="dialog">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content md-cn" id="demo">

                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    <?php } ?>

                                </td>

                                <td>
                                    <?php if ($output['status'] == 'available') { ?>
                                        <input type="checkbox" class="add-domain-checkbox" id="domain_item_id<?= $do_id ?>"  name="">
                                        <label for="demo" class="demoCheck demoCheckLabel"></label>
                                    <?php } ?>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <p class="p-add"> Kết quả gợi ý thêm </p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 add-domain-domain">
                            <div class="table-responsive add-on">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Tên miền</th>
                                        <th>Phí duy trì</th>
                                        <th> Phí đăng kí</th>
                                        <th> Thông tin Whois</th>
                                        <th>Thêm vào giỏ hàng</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    foreach ($data as $item) { ?>
                                        <tr>

                                            <td><?php

                                                if ($output2[$i]['status'] == "available") {
                                                    echo "<img src='../app/webroot/img/icon-check.png'>";
                                                } else {
                                                    echo "<img src='../app/webroot/img/icon-del.png'>";
                                                }


                                                ?>
                                            </td>
                                            <td>
                                                <p class="p-name"><?php echo($test = $request3 . $item['ProductPrice']['product_name']); ?></p>
                                            </td>
                                            <td>
                                                <p class="p-money"><?php echo number_format($item['ProductPrice']['price'], 0, ',', '.') ?>
                                                    VNĐ</p></td>
                                            <td>
                                                <p class="img-fee"><?php echo number_format($item['ProductPrice']['bk_price'], 0, ',', '.') ?>
                                                    VNĐ</p></td>
                                            <td>
                                                <?php if ($output2[$i]['status'] != 'available') { ?>
                                                    <form action="" method="POST">
                                                        <input type="hidden" class="domain_name" name="domain_name"
                                                               value='<?php echo $test ?>'>

                                                        <div class='btn btn-danger button1' data-toggle="modal"
                                                             data-target="#myModal">Whois <img
                                                                    src='../app/webroot/img/icon-whois.png'></div>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="myModal" role="dialog">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content md-cn" id="demo">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>

                                                <?php } ?>
                                            </td>
                                            <td>
                                                <?php if ($output2[$i]['status'] == 'available') { ?>
                                                    <input type="checkbox" class="add-domain-checkbox"
                                                           id="domain_item_id<?= $do_id ?>" name="">
                                                    <label for="demo" class="demoCheck demoCheckLabel"></label>
                                                <?php }
                                                $i++; ?>
                                                <?php
                                                $cart = array();
                                                $cart['product']['product_name'] = $request3 . $item['ProductPrice']['product_name'];
                                                $cart['product']['price'] = $item['ProductPrice']['price'] + $item['ProductPrice']['bk_price'];
                                                $cart['product']['product_type'] = 7;

                                                //checkbox id is checked
                                                $cart['checkbox']['id'] = "domain_item_id{$do_id}";

                                                $data = json_encode($cart);

                                                $str = $this->Html->scriptBlock('
                                                    $(document).ready(function () {
                                                    $("#domain_item_id' . $do_id . '").bind("change", function (event) {
                                                        if (this.checked) {
                                                            $.ajax({
                                                            async: true, beforeSend: function (XMLHttpRequest) {
                                                            $(\'#loading\').fadeIn(1000);
                                                            }, cache: false, complete: function (XMLHttpRequest, textStatus) {
                                                            $(\'#loading\').fadeOut(1000);
                                                            update_ajax_it();
                                                            }, data: ' . $data . ', type: "POST", url: "\/carts\/add_domain"
                                                            });
                                                        }

                                                        return false;
                                                    });
                                                    });
                                                    ', array('inline' => true));

                                                echo $str;
                                                echo $this->Js->writeBuffer();

                                                ?>

                                            </td>

                                        </tr>
                                        <?php
                                        $do_id++;
                                    } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                            <!-- <button type="submit" class="btn btn-all"> Chuyển đến giỏ hàng</button> -->
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 add-continue">
                            <button type="submit" class="btn btn-add-continue" id='go_to_cart'> Chuyển đến giỏ hàng</button>
                        </div>

                        <div id="loading" style="display: none;">
                            <div class="alert alert-info" role="alert">
                                <i class=" fa fa-spinner fa-spin"></i> Đang thêm sản phẩm vào giỏ hàng...
                            </div>
                        </div>
                        <?php } ?>
                        <?php if (isset($request2)) { ?>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <p class="p-add"> Kết quả kiểm tra</p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 add-domain-domain">
                                <div class="table-responsive add-on">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>Tên miền</th>
                                            <th>Phí duy trì</th>
                                            <th> Phí đăng kí</th>
                                            <th> Thông tin Whois</th>
                                            <th>Thêm vào giỏ hàng</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                        $i = 0;
                                        $do_id = 0;
                                        foreach ($data as $item) { ?>
                                            <tr>

                                                <td><?php

                                                    if ($output1[$i]['status'] == "available") {
                                                        echo "<img src='../app/webroot/img/icon-check.png'>";
                                                    } else {
                                                        echo "<img src='../app/webroot/img/icon-del.png'>";
                                                    }


                                                    ?>
                                                </td>
                                                <td>
                                                    <p class="p-name"><?php echo($test = $request2['add_doamin'] . $item['ProductPrice']['product_name']); ?></p>
                                                </td>
                                                <td>
                                                    <p class="p-money"><?php echo number_format($item['ProductPrice']['price'], 0, ',', '.') ?>
                                                        VNĐ</p></td>
                                                <td>
                                                    <p class="img-fee"><?php echo number_format($item['ProductPrice']['bk_price'], 0, ',', '.') ?>
                                                        VNĐ</p></td>
                                                <td>
                                                    <?php if ($output1[$i]['status'] != 'available'){ ?>
                                                    <form action="" method="POST">
                                                        <input type="hidden" class="domain_name" name="domain_name"
                                                               value='<?php echo $test ?>'>

                                                        <div class='btn btn-danger button1' data-toggle="modal"
                                                             data-target="#myModal">Whois <img
                                                                    src='../app/webroot/img/icon-whois.png'></div>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="myModal" role="dialog">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content md-cn" id="demo">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>

                                                    <?php }

                                                    ?><!-- <button type='submit' class='btn btn-danger'>Whois <img src='../app/webroot/img/icon-whois.png'></button> -->
                                                </td>
                                                <td>
                                                    <?php if ($output1[$i]['status'] == 'available') { ?>
                                                        <input type="checkbox" class="add-domain-checkbox"
                                                               id="domain_item_id<?= $do_id ?>" name="">
                                                        <label for="demo" class="demoCheck demoCheckLabel"></label>
                                                    <?php }
                                                    $i++; ?>

                                                    <?php

                                                        $cart = array();
                                                        $cart['product']['product_name'] = $request2['add_doamin'] . $item['ProductPrice']['product_name'];
                                                        $cart['product']['price'] = $item['ProductPrice']['price'] + $item['ProductPrice']['bk_price'];
                                                        $cart['product']['product_type'] = 7;

                                                        //checkbox id is checked
                                                        $cart['checkbox']['id'] = "domain_item_id{$do_id}";

                                                        $data = json_encode($cart);

                                                        $str = $this->Html->scriptBlock('
                                                            $(document).ready(function () {
                                                                $("#domain_item_id' . $do_id . '").bind("change", function (event) {
                                                                    if (this.checked) {
                                                                        $.ajax({
                                                                            cache: false,
                                                                            data: ' . $data . ',
                                                                            type: "POST",
                                                                            url: "\/carts\/add_domain",
                                                                            async: true,
                                                                            beforeSend: function (XMLHttpRequest) {
                                                                            },
                                                                            complete: function (XMLHttpRequest, textStatus) {
                                                                                //update_ajax_it();
                                                                                console.log("add product item to cart sucesss");
                                                                            },
                                                                        });
                                                                    }
                                                                    
                                                                    return false;
                                                                });
                                                            }); 
                                                        ', array('inline' => true));

                                                        echo $str;
                                                        echo $this->Js->writeBuffer();

                                                    ?>

                                                </td>

                                            </tr>
                                            <?php
                                            $do_id++;
                                        } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                                    <!-- <button type="submit" class="btn btn-all"> Chuyển đến giỏ hàng</button> -->
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 add-continue">
                                    <button type="submit" class="btn btn-add-continue" id="go_to_cart"> Chuyển đến giỏ hàng</button>
                                </div>
    
                        <?php } ?>
                                <?php
                                    // tue.phpmailer@gmail.com
                                    $str = $this->Html->scriptBlock('$(document).ready(function () {
                                                                        $("#go_to_cart").bind("submit click", function (event) {
                                                                           $(location).attr(\'href\',\'/cart/\');
                                                                           return false;
                                                                        });
                                                                      }); 
                                                            ', array('inline' => true));

                                    echo $str;
                                    echo $this->Js->writeBuffer();

                                ?>

                                <div id="loading" style="display: none; position: static; top: 100px; left: auto">
                                    <div class="alert alert-info" role="alert">
                                        <i class=" fa fa-spinner fa-spin"></i> Bạn đã chọn sản phẩm domain.
                                    </div>
                                </div>

                            </div>
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 explain">
                            <p class="p-explain"> Bảng chú thích các kí hiệu</p>
                            <table class="table table-bordered">
                                <tbody>
                                <tr>
                                    <td><img src="../app/webroot/img/icon-del.png"></td>
                                    <td>Tên miền đã được đăng kí, bạn không thể đăng kí tên miền này</td>
                                </tr>
                                <tr>
                                    <td><img src="../app/webroot/img/icon-check.png"></td>
                                    <td>Tên miền chưa đăng kí, bạn có thể đăng kí tên miền này</td>
                                </tr>
                                <tr>
                                    <td>
                                        <button type="submit" class="btn btn-danger">Whois <img
                                                    src="../app/webroot/img/icon-whois.png"></button>
                                    </td>
                                    <td>Xem thông tin tin miền</td>
                                </tr>
                                <tr>
                                    <td><img src="../app/webroot/img/icon-empty.png"></td>
                                    <td>Tên miền có thể đăng kí, đang ở trạng thái chưa chọn</td>
                                </tr>
                                <tr>
                                    <td><img src="../app/webroot/img/icon-tick.png"></td>
                                    <td>Tên miền có thể đăng kí, đang ở trạng thái đã chọn</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"></div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        $update_ajax_it = Router::url(array('controller' => 'carts', 'action' => 'update_ajax_it'));
        $str = $this->Html->scriptBlock('
                        function update_ajax_it() {
                            $.ajax({
                            dataType: "html",
                            type: "POST",
                            evalScripts: true,
                            url: \'' . $update_ajax_it . '\',
                            data: ({type:\'del\'}),
                            success: function (data, textStatus){
                                $("#id_count_carts").html(data);
                            }
                        });
                    }; ',
            array('inline' => true));
        echo $str;
        echo $this->Js->writeBuffer();
        ?>

        <script type="text/javascript">
            $(document).ready(function () {
                $('.button1').click(function () {
                    console.log($(this).parent().children(".domain_name").val());
// alert('1');
// $('#myModal').modal('show');

                    $.ajax({
                        url: "<?php echo $this->Html->url(array('controller' => 'ProductPrices', 'action' => 'whois_domain'))?>",
                        type: "post",
                        dataType: "html",
                        data: {
                            domain_name: $(this).parent().children(".domain_name").val(),
                        },
                        success: function (result) {

// alert('2')
// var datadomain = jQuery.parseJSON(result);
// obj = JSON.parse(obj);
// console.log(obj);
// alert( obj['code']);
// alert(result);
                            $('#demo').html(result);

                        }
                    });
                });
            });
        </script>
        <style type="text/css">
            .md-cn {
                width: 100%;
                padding: 0%;
                height: auto;
            }

            .modal-lg {
                padding: unset;
            }

            .modal-header {
                padding: 20px;
                background: #e67237;
                color: #fff;
            }

            .whois-body {
                margin: 10px 50px;
                text-align: left;

            }

            .whois-section {
                margin-bottom: 15px;

            }

            .whois-item {
                background: #005faf;
                color: #fff;
                padding: 10px;
                font-size: 24px;
            }

            .whois-content {
                line-height: 30px;
                padding-top: 10px;
            }

            .whois-content-1 {
                line-height: 15px;
                padding-top: 20px;
            }

            .dcol {
                float: left;
                width: 50%;
            }
        </style>
