<?php /*echo $this->element('home'); */?>

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
                    <div class="step processing">
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
            <form>
                <div class="row">
                    <!--  -->
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 domain-domain">
                            <p class="customer-code"><?php echo $this->Html->image('icon-madonhang.png',array('class' => 'img'));?> Mã đơn hàng: <span>ABCDEF</span>
                            </p>
                            <table class="table domain-cart">
                                <thead class="thead-cart">
                                <tr>
                                    <th class="name-domain">Dịch vụ</th>
                                    <th>Thời hạn</th>
                                    <th class="money">Số tiền</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <h4>Cloud S1 - Linux</h4>
                                        <p class="vps">VPS</p>
                                    </td>
                                    <td>
                                        <select>
                                            <option>1 năm</option>
                                        </select>
                                    </td>
                                    <td>
                                        <p>200.000 VNĐ</p>
                                        <div class="product-removal">
                                            <button type="button" class="remove-item" data-toggle="modal"
                                                    data-target="#myModal">
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4>Cloud S1 - Linux</h4>
                                        <p class="vps">VPS</p>
                                    </td>
                                    <td>
                                        <select>
                                            <option>1 năm</option>
                                        </select>
                                    </td>
                                    <td>
                                        <p>200.000 VNĐ</p>
                                        <div class="product-removal">
                                            <button type="button" class="remove-item" data-toggle="modal"
                                                    data-target="#myModal">
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 domain-domain">
                            <table class="table add-cloud">
                                <thead>
                                <tr>
                                    <th><h3>Gói dịch vụ CLOUD</h3></th>
                                    <th><a href="">Xem thêm</a></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <h4>CLOUD SERVER 1</h4>
                                        <p>Giảm 490.000 vnđ/năm</p>
                                    </td>
                                    <td>
                                        <h2>510.000 vnđ/năm</h2>
                                        <p class="p1">1.000.000VND/năm</p>
                                        <button type="button" class="btn-add"> Thêm vào giỏ</button>
                                        <!-- <input type="button" class="btn-add" name="" value="Thêm vào giỏ"> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4>CLOUD SERVER 1</h4>
                                        <p>Giảm 490.000 vnđ/năm</p>
                                    </td>
                                    <td>
                                        <h2>510.000 vnđ/năm</h2>
                                        <p class="p1">1.000.000VND/năm</p>
                                        <button type="button" class="btn-add"> Thêm vào giỏ</button>
                                    </td>
                                </tr>
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
                                    <td>400.000 VNĐ</td>
                                </tr>
                                <tr>
                                    <td>Giảm giá:</td>
                                    <td>-40.000 VNĐ</td>
                                </tr>
                                <tr>
                                    <td>VAT (10%)</td>
                                    <td>40.000 VNĐ</td>
                                </tr>
                                <tr>
                                    <td><b>Thành tiền:</b></td>
                                    <td><b>360.000 VNĐ</b></td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="continue">
                                        <button class="btn btn-continue" type="button"><a href="">Tiếp tục</a></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">Hoăc</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="buy">
                                        <button class="btn btn-buy" type="button"> Mua thêm các dịch vụ</button>
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
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content -->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4>Bạn muốn xóa dịch vụ này?</h4>
                                </div>
                                <div class="modal-body">
                                    <button type="submit" class="btn btn-success" id="remove-product">Đồng ý</button>
                                    <button type="submit" class="btn btn-danger" data-dismiss="modal">Hủy</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!--
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><?php /*echo $this->Html->link('Home', '/'); */?>
            </li>
            <li class="active">Cart</li>
        </ol>
    </div>
</div>-->

<?php

    Debugger::dump($product);

?>

<?php echo $this->Form->create('Cart', array('url' => array('action' => 'update'))); ?>
<div class="row">
    <div class="col-lg-12">
        <table class="table">
            <!--<thead>
            <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
            </thead>-->
            <tbody>
            <?php $total = 0; ?>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?php echo $product['Product']['name']; ?></td>
                    <td>$<?php echo $product['Product']['price']; ?>
                    </td>
                    <td>
                        <div class="col-xs-3">
                            <?php echo $this->Form->hidden('product_id.', array('value' => $product['Product']['id'])); ?>
                            <?php echo $this->Form->input('count.', array('type' => 'number', 'label' => false,
                                'class' => 'form-control input-sm', 'value' => $product['Product']['count'])); ?>
                        </div>
                    </td>
                    <td>$<?php echo $count * $product['Product']['price']; ?>
                    </td>
                </tr>
                <?php $total = $total + ($count * $product['Product']['price']); ?>
            <?php endforeach; ?>

            <tr class="success">
                <td colspan=3></td>
                <td>$<?php echo $total; ?>
                </td>
            </tr>
            </tbody>
        </table>

        <p class="text-right">
            <?php echo $this->Form->submit('Update', array('class' => 'btn btn-warning', 'div' => false)); ?>
            <a class="btn btn-success"
               onclick="alert('Implement a payment module for buyer to make a payment.');">CheckOut</a>
        </p>

    </div>
</div>
<?php echo $this->Form->end(); ?>




