
    <?php /*echo $this->element('home'); */?>
    <?php /*echo Debugger::dump($products); */?>

    <?php //echo Debugger::dump($hostings); ?>

    <!--// <script type="text/javascript">

        $(document).ready( function () {
            console.log( "ready!" );
            //alert("ready!");
        });

        function change_id() {

        };

    </script>//-->


    <div class="cart">
        <div class="process">
            <div class="container">
                <div class="row">
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <div class="step processing">
                            <h3>1</h3>
                            <p>Giỏ hàng</p>
                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <div class="step">
                            <h3>2</h3>
                            <p>Điền thông tin</p>
                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <div class="step">
                            <h3>3</h3>
                            <p>Thanh toán</p>
                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <div class="step">
                            <h3>4</h3>
                            <p>HOÀN TẤT</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">

            <div class="container">
                <div class="row">
                    <h3>CÁC BƯỚC THANH TOÁN</h3>
                </div>

                    <div class="row">
                        <!--  -->
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 domain-domain">
                                <p class="customer-code">
                                    <?php echo $this->Html->image('icon-madonhang.png', array('class' => 'img'));?> Mã đơn hàng: <span><?php echo strtoupper($order_code); ?></span>
                                </p>
                                <table class="table domain-cart" id="ajax_table_data">
                                    <thead class="thead-cart">
                                        <tr>
                                            <th class="name-domain">Dịch vụ</th>
                                            <th>Số lượng</th>
                                            <th class="money">Số tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody id="add_tr">
                                    <?php
                                    $modal = 1;
                                    foreach ($products as $odetail_product): ?>
                                        <tr id="<?= $odetail_product['id'] ?>">
                                            <td>
                                                <h4><?php echo $odetail_product['domain_name']; ?></h4>
                                                <p class="vps"><?php echo $odetail_product['type']; ?></p>
                                            </td>
                                            <td>
                                                <!--<select disabled class="hidden">
                                                    <option> năm</option>
                                                </select>-->
                                                <p class="active"><?php echo $odetail_product['quantity']; ?></p>
                                            </td>
                                            <td>
                                                <p><?php echo $odetail_product['price']; ?> VNĐ</p>
                                                <div class="product-removal">
                                                    <button type="button" class="remove-item" data-toggle="modal"
                                                            data-target="#myModal<?= $modal ?>">
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                        $modal++;
                                    endforeach; ?>
                                    <tr id="ajax_cart"></tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 domain-domain">
                                <div class="hidden" style="border: 1px solid red; height: 100px;">
                                    <div ></div>
                                </div>

                                <div id="loading" style="display: none;">
                                    <div class="alert alert-info" role="alert">
                                        <i class=" fa fa-spinner fa-spin"></i> Đang thêm sản phẩm vào giỏ hàng...</div>
                                </div>

                                    <table class="table add-cloud">
                                        <thead>
                                            <tr>
                                                <th><h3>Gói dịch vụ CLOUD</h3></th>
                                                <th><a href="">Xem thêm</a></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <tr class="hidden">
                                            <td>
                                                <h4></h4>
                                                <p></p>
                                            </td>
                                            <td>
                                                <?php
                                                    echo $this->Form->create('Cart', array('type' => 'POST',
                                                            //echo $this->Form->create(null, array('type' => 'POST',
                                                            //'url' => '/cart/update',
                                                            'url' => array('controller' => 'carts', 'action' => 'test'),
                                                            'id' => "id_form_cart_test",
                                                            'name' =>  "form_cart_test",
                                                            'class' => 'hidden',
                                                            'role' => 'form',
                                                        )
                                                    );
                                                ?>

                                                <h2></h2>
                                                <p class="p1"></p>
                                                <?php echo $this->Form->end();?>
                                            </td>
                                        </tr>

                                        <?php

                                            $id_form = 1;
                                            foreach ($list_hosting as $hosting): ?>

                                                <?php
                                                    /*echo $this->Form->create(false, array('type' => 'POST',
                                                    /*echo $this->Form->create(null, array('type' => 'POST',
                                                            'url' => array('controller' => 'Carts', 'action' => 'update'),
                                                            'id' => "id_form_cart_$id_form")
                                                    );*/

                                                    $form_id = "id_form_cart_{$id_form}";
                                                    $data = $this->Js->get("#". $form_id )->serializeForm(array('isForm' => true, 'inline' => true));

                                                    $this->Js->get("#". $form_id. "")->event(
                                                        'submit',
                                                        $this->Js->request(
                                                            array('controller' => 'carts', 'action' => 'update'),
                                                            array(
                                                                'update' => '#ajax_cart',
                                                                //'update' => ,
                                                                'data' => $data,
                                                                'async' => true,
                                                                'dataExpression' =>true,
                                                                'method' => 'POST',
                                                                'before' => "$('#loading').fadeIn(2000);$('#ajax_cart').attr('disabled','disabled');",
                                                                'complete' => "$('#loading').fadeOut(1000);$('#ajax_cart').removeAttr('disabled');change_id();" ,
                                                                'cache' => false,
                                                            )
                                                        )
                                                    );

                                                    echo $this->Js->writeBuffer();

                                                    echo $this->Html->scriptBlock(' 
                                                        $(document).ready( function () {
                                                            console.log( "Ajax ready!" );
                                                        
                                                        });
                                                     ', array('inline' => true));

                                                     echo $this->Html->scriptBlock('
      
                                                        function change_id() {
                                                              //alert("Success!");
                                                              $("tr#ajax_cart").removeAttr("id");
                                                              
                                                              $("#ajax_table_data > tbody").append("<tr id=\'ajax_cart\'></tr>");
                                                            
                                                        };
                                                        
                                                        ', array('inline' => true));


                                                ?>

                                                    <tr>
                                                        <td>
                                                            <h4><?php echo $hosting['product_name']; ?> </h4>
                                                            <p>Giảm <?php echo $hosting['price_2']; ?> vnđ/năm</p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                echo $this->Form->create('Cart', array('type' => 'POST',
                                                                //echo $this->Form->create(null, array('type' => 'POST',
                                                                        //'url' => '/cart/update',
                                                                        'url' => array('controller' => 'carts', 'action' => 'update'),
                                                                        'id' => "id_form_cart_$id_form",
                                                                        'name' =>  "form_$id_form",
                                                                        'class' => '',
                                                                        'role' => 'form',
                                                                    )
                                                                );
                                                            ?>

                                                            <h2><?php echo $hosting['price_1']; ?> vnđ/năm</h2>
                                                            <p class="p1"><?php echo $hosting['price']; ?>VND/năm</p>

                                                            <?php

                                                                echo $this->Form->input('cart.order.id', array(
                                                                    'id' => "id{$id_form}_order",
                                                                    'type' => 'hidden',
                                                                    //'name' => 'cart[order][id]',
                                                                    'value' => $order_id,
                                                                ));


                                                                echo $this->Form->input('cart.product.id', array(
                                                                    'id' => "id{$id_form}_product_id",
                                                                    'type' => 'hidden',
                                                                    //'name' => 'cart[product][id]',
                                                                    'value' => $hosting['id'],
                                                                ));

                                                                echo $this->Form->input('cart.product.price', array(
                                                                    'id' => "id{$id_form}_product_price",
                                                                    'type' => 'hidden',
                                                                    //'name' => 'cart[product][price]',
                                                                    'value' => $hosting['price'],
                                                                ));

                                                                echo $this->Form->hidden('cart.product.price_1', array(
                                                                    'id' => "id{$id_form}_product_price_1",
                                                                    //'name' => 'cart[product][price_1]',
                                                                    'value'=> $hosting['price_1'],
                                                                ));

                                                                echo $this->Form->hidden('cart.product.product_name', array(
                                                                    'id' => "id{$id_form}_product_name",
                                                                    //'name' => 'cart[product][price_1]',
                                                                    'value'=> $hosting['product_name'],
                                                                ));

                                                                echo $this->Form->hidden('cart.product.product_type', array(
                                                                    'id' => "id{$id_form}_product_product_type",
                                                                    //'name' => 'cart[product][price_1]',
                                                                    'value'=> $hosting['product_type'],
                                                                ));

                                                                echo $this->Form->hidden('cart.product.quantity', array(
                                                                    'id' => "id{$id_form}_product_quantity",
                                                                    //'name' => 'cart[product][price_1]',
                                                                    'value'=> 1,
                                                                ));

                                                                echo $this->Form->button('Thêm vào giỏ', array(
                                                                    'type' => 'submit',
                                                                    'id' => "submit_{$id_form}",
                                                                    //'name' => "submit_{$id_form}",
                                                                    'class'=>'btn-add',
                                                                    //'value'=> 'Thêm vào giỏ',
                                                                    'escape' => true,
                                                                ));
                                                            ?>
                                                            <?php echo $this->Form->end();?>
                                                        </td>
                                                    </tr>

                                              <!--  <div class="row">
                                                    <div class="col-xs-6">
                                                        <h4><?php /*echo $hosting['product_name']; */?> </h4>
                                                        <p>Giảm <?php /*echo $hosting['price_2']; */?> vnđ/năm</p>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <h2><?php /*echo $hosting['price_1']; */?> vnđ/năm</h2>
                                                        <p class="p1"><?php /*echo $hosting['price']; */?>VND/năm</p>
                                                    </div>
                                                </div>-->

                                            <?php
                                                $id_form ++;
                                                if ($id_form == 6) break;
                                            endforeach; ?>

                                        </tbody>
                                    </table>
                            </div>

                        </div>


                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 domain-domain">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sale-code">
                                <h3>Mã giảm giá:</h3>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Số điện thoại">
                                    <button class="btn btn-ok">Áp dụng</button>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 domain-domain payment">
                                <table class="table total-money">
                                    <tbody>
                                    <tr>
                                        <td>Tạm tính (Chưa VAT):</td>
                                        <td><?php echo $odetail_product['total_money']; ?> VNĐ</td>
                                    </tr>
                                    <tr>
                                        <td>Giảm giá:</td>
                                        <td> -0 VNĐ</td>
                                    </tr>
                                    <tr>
                                        <td>VAT (10%)</td>
                                        <td><?php echo round($odetail_product['total_money'] * 10 / 100); ?> VNĐ</td>
                                    </tr>
                                    <tr>
                                        <td><b>Thành tiền:</b></td>
                                        <td>
                                            <b><?php echo $odetail_product['total_money'] - round($odetail_product['total_money'] * 10 / 100); ?>
                                                VNĐ</b></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="continue">
                                            <button class="btn btn-continue hidden" type="button"><a href="">Tiếp tục</a></button>
                                            <button class="btn btn-continue" type="button">
                                                <?php
                                                    echo $this->Html->link('Tiếp tục', array(
                                                        'controller' => 'cart',
                                                        'action' => 'checkout',
                                                    ),
                                                        array('class' => '', 'escape' => false)
                                                    );
                                                ?>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Hoặc</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="buy">
                                            <button class="btn btn-buy hidden" type="button"> Mua thêm các dịch vụ
                                            </button>
                                            <button class="btn btn-buy" type="button">
                                                <?php
                                                    echo $this->Html->link('Mua thêm các dịch vụ', array(
                                                        'controller' => 'cart',
                                                        'action'     => 'continuebuy',
                                                    ),
                                                        array('class' => '','escape'    => false)
                                                    );
                                                ?>
                                            </button>

                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 support">
                                <div>
                                    <h4>Nhập nhân viên tư vấn : <?php echo $this->Html->image('icon-chat.png',array('class' => 'img'));?> </h4>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Số điện thoại">
                                        <button class="btn btn-nhap">Cập nhật</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $modal = 1;
                        foreach ($products as $odetail_product): ?>
                            <div id="myModal<?= $modal ?>" class="modal fade" role="dialog">
                                <?php
                                echo $this->Form->create(null, array('type' => 'POST',
                                        //echo $this->Form->create(null, array('type' => 'POST',
                                        //'url' => '/cart/update',
                                        'url' => array('controller' => 'carts', 'action' => 'delete_item'),
                                        'id' => "modal_form_id_$modal",
                                        'name' => "modal_form_id_$modal",
                                        'class' => '',
                                        'role' => 'form',
                                    )
                                );

                                echo $this->Form->input('', array(
                                    'id' => "id_odetail_product_$modal",
                                    'type' => 'hidden',
                                    'name' => 'id_odetail_product',
                                    'value' => $odetail_product['id'],
                                ));

                                ?>
                                <div class="modal-dialog">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4>Bạn muốn xóa dịch vụ này? </h4>
                                        </div>
                                        <div class="modal-body">
                                            <button type="submit" class="btn btn-success" id="remove-product">Đồng ý
                                            </button>
                                            <button type="submit" class="btn btn-danger" data-dismiss="modal">Hủy
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <?php echo $this->Form->end(); ?>
                        </div>
                            <?php
                            $modal++;
                        endforeach; ?>

                    </div>
            </div>
        </div>
    </div>

    <?php //echo $this->element('sql_dump'); ?>




