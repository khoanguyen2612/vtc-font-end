
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
                        <div class="step ">
                            <h3>1</h3>
                            <p>Giỏ hàng</p>
                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <div class="step ">
                            <h3>2</h3>
                            <p>Điền thông tin</p>
                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <div class="step processing">
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
        <div class="container payment-method">
            <div class="container">
                <div class="row">
                    <h3> CHỌN PHƯƠNG THỨC THANH TOÁN</h3>
                    <p> Quý khách vui lòng lựa chọn các hình thức thanh toán bên dưới :</p>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 payment-online">
                        <p>Thanh toán trực tuyến</p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="list-inline banklist text-center">
                            <li class="list-group-item"><a href="#"><?php echo $this->Html->image('paypal.png', array('class' => 'img-responsive'));?></a></li>
                            <li class="list-group-item"><a href="#"><?php echo $this->Html->image('vietcom.png', array('class' => 'img-responsive'));?></a></li>
                            <li class="list-group-item"><a href="#"><?php echo $this->Html->image('techcom.png', array('class' => 'img-responsive'));?></a></li>
                            <li class="list-group-item"><a href="#"><?php echo $this->Html->image('viettin.png', array('class' => 'img-responsive'));?></a></li>
                            <li class="list-group-item"><a href="#"><?php echo $this->Html->image('vib.png', array('class' => 'img-responsive'));?></a></li>
                            <li class="list-group-item"><a href="#"><?php echo $this->Html->image('hdbank.png', array('class' => 'img-responsive'));?></a></li>
                            <li class="list-group-item"><a href="#"><?php echo $this->Html->image('agri.png', array('class' => 'img-responsive'));?></a></li>
                            <li class="list-group-item"><a href="#"><?php echo $this->Html->image('bidv.png', array('class' => 'img-responsive'));?></a></li>
                            <li class="list-group-item"><a href="#"><?php echo $this->Html->image('donga.png', array('class' => 'img-responsive'));?></a></li>
                            <li class="list-group-item"><a href="#"><?php echo $this->Html->image('baokim.png', array('class' => 'img-responsive'));?></a></li>
                            <li class="list-group-item"><a href="#"><?php echo $this->Html->image('soha.png', array('class' => 'img-responsive'));?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 payment-transfer">
                        <p>Chuyển khoản</p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    </div>
                </div>
                <div class="row">
                    <div class="bank-transfer">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td class="account-name"> Tên Tài Khoản: </td>
                                <td><h4> Công ty TNHH Một Thành Viên Viễn Thông Số VTC</h4></td>
                            </tr>
                            <tr>
                                <td class="account-address">Địa Chỉ:</td>
                                <td><h4>65 Lạc Trung, Phường Vĩnh Tuy, Quận Hai Bà Trưng, TP.Hà Nội</h4></td>
                            </tr>
                            <tr>
                                <td class="account-tax">Mã số thuế: </td>
                                <td><h4>0105431099</h4></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="select-bank">
                        <form>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td><?php echo $this->Html->image('icon-vietcom.png', array('class' => ''));?></td>
                                    <td>
                                        <div class="form-group banks">
                                            <label>
                                                <input type="radio" name="opinion" checked="true" />
                                                <span></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>Ngân hàng TMCP Ngoại Thương (VCB) - SỞ GIAO DỊCH
                                        Số tài khoản: 0011001894899</td>
                                </tr>
                                <tr>
                                    <td><?php echo $this->Html->image('icon-mb.png', array('class' => ''));?></td>
                                    <td>
                                        <div class="form-group banks">
                                            <label>
                                                <input type="radio" name="opinion" checked="" />
                                                <span></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>Ngân hàng TMCP Quân đội(MB) - CN Hai Bà Trưng
                                        Số tài khoản: 0551100239007</td>
                                </tr>
                                <tr>
                                    <td><?php echo $this->Html->image('icon-exi.png', array('class' => ''));?></td>
                                    <td>
                                        <div class="form-group banks">
                                            <label>
                                                <input type="radio" name="opinion" checked="" />
                                                <span></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>Ngân hàng TMCP Xuất nhập khẩu (EXB) - CN Hai Bà Trưng
                                        Số tài khoản: 170214851010357</td>
                                </tr>
                                <tr>
                                    <td><?php echo $this->Html->image('icon-vietin.png', array('class' => ''));?></td>
                                    <td>
                                        <div class="form-group banks">
                                            <label>
                                                <input type="radio" name="opinion" checked="" />
                                                <span></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>Ngân hàng TMCP Công thương - CN Chương Dương
                                        Số tài khoản: 102010001202443</td>
                                </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
                <div class="btn-bank">
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3"></div>
                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                        <button type="button" class="btn btn-back-input"> Quay lại</button>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                        <button type="button" class="btn btn-add-domain"> Tiếp tục</button>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3"></div>
                </div>
            </div>
        </div>
    </div>

    <?php //echo $this->element('sql_dump'); ?>




