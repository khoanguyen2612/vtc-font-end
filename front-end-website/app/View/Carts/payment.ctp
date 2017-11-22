
    <div class="cart">
        <div class="process">
            <div class="process">
                <div class="container">
                    <?php echo $this->Html->image('button_step3.png', array('class'=>'img-responsive')); ?>
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
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"></div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 payment-online">
                        <?php
                        echo $this->Form->create(null, array('type' => 'POST',
                                'url' => array('controller' => 'carts', 'action' => 'vtc_payment'),
                                'id' => "form2",
                                'name' => "form2",
                                'class' => 'form',
                                'role' => 'form',
                            )
                        );
                        ?>
                            <div class="hidden">
                                <input name="txtOrderID" type="text" value="<?php echo $order_code ?>" id="txtOrderID"/>
                                <input name="txtCustomerFirstName" type="text" value="Nguyễn Tài" id="txtCustomerFirstName"/>
                                <input name="txtCustomerLastName" type="text" value="Tuệ" id="txtCustomerLastName"/>
                                <input name="txtBillAddress" type="text" value="Hà Nội" id="txtBillAddress"/>
                                <input name="txtCity" type="text" value="Hà Nội" id="txtCity"/>
                                <input name="txtCustomerEmail" type="text" value="nguyentaitue@codelovers.vn"
                                       id="txtCustomerEmail"/>
                                <input name="txtCustomerMobile" type="text" value="<?php echo "0916298481" ?>"
                                       id="txtCustomerMobile"/>
                                <input name="txtParamExt" type="text" value="" id="txtParamExt"/>
                                <input name="txtParamLanguage" type="text" value="vi" id="txtParamLanguage"/>
                                <input name="txtUrlReturn" type="text" value="<?php echo "http://vtc.codelovers.vn/carts/finish/" ?>"
                                       id="txtUrlReturn"/>
                                <input name="txtSecret" type="text" value="<?php echo "VtcPay_Codelovers_2017" ?>"
                                       id="txtSecret"/>
                                <input name="txtTotalAmount" type="text" value="<?php echo round($total_payment) ?>"
                                       id="txtTotalAmount"/>
                                <input name="txtCurency" type="text" value="VND" id="txtCurency"/> &nbsp;<i>VND/USD</i>
                                <input name="txtWebsiteID" type="text" value="10059" id="txtWebsiteID"/>
                                <input name="txtReceiveAccount" type="text" value="<?php echo "0916298481" ?>"
                                       id="txtReceiveAccount"/>
                                <input name="txtDescription" type="text" value="<?php echo $order_code ?> services"
                                       id="txtDescription"/>
                            </div>
                        <?php echo $this->Form->end(); ?>

                        <a class="btn" id="btnContinue" data-i18n="website.continue" onClick='submitDetailsForm()' style="padding: 12px 40px;"><p class="btn">Thanh toán trực tuyến</p></a>

                        <script language="javascript" type="text/javascript">
                            function submitDetailsForm() {
                                $("#form2").submit();
                            }
                        </script>

                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"></div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="list-inline banklist text-center">

                        <li class="list-group-item"><a
                                    href="#"><?php echo $this->Html->image('paypal.png', array('class' => 'img-responsive')); ?></a>
                        </li>
                        <li class="list-group-item"><a
                                    href="#"><?php echo $this->Html->image('vietcom.png', array('class' => 'img-responsive')); ?></a>
                        </li>
                        <li class="list-group-item"><a
                                    href="#"><?php echo $this->Html->image('techcom.png', array('class' => 'img-responsive')); ?></a>
                        </li>
                        <li class="list-group-item"><a
                                    href="#"><?php echo $this->Html->image('viettin.png', array('class' => 'img-responsive')); ?></a>
                        </li>
                        <li class="list-group-item"><a
                                    href="#"><?php echo $this->Html->image('vib.png', array('class' => 'img-responsive')); ?></a>
                        </li>
                        <li class="list-group-item"><a
                                    href="#"><?php echo $this->Html->image('hdbank.png', array('class' => 'img-responsive')); ?></a>
                        </li>
                        <li class="list-group-item"><a
                                    href="#"><?php echo $this->Html->image('agri.png', array('class' => 'img-responsive')); ?></a>
                        </li>
                        <li class="list-group-item"><a
                                    href="#"><?php echo $this->Html->image('bidv.png', array('class' => 'img-responsive')); ?></a>
                        </li>
                        <li class="list-group-item"><a
                                    href="#"><?php echo $this->Html->image('donga.png', array('class' => 'img-responsive')); ?></a>
                        </li>
                        <li class="list-group-item"><a
                                    href="#"><?php echo $this->Html->image('baokim.png', array('class' => 'img-responsive')); ?></a>
                        </li>
                        <li class="list-group-item"><a
                                    href="#"><?php echo $this->Html->image('soha.png', array('class' => 'img-responsive')); ?></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"> </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 payment-transfer">
                    <p>Chuyển khoản</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"> </div>
            </div>

            <div class="row">
                <div class="bank-transfer">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="account-name"> Tên Tài Khoản:</td>
                                <td><h4> Công ty TNHH Một Thành Viên Viễn Thông Số VTC</h4></td>
                            </tr>
                            <tr>
                                <td class="account-address">Địa Chỉ:</td>
                                <td><h4>65 Lạc Trung, Phường Vĩnh Tuy, Quận Hai Bà Trưng, TP.Hà Nội</h4></td>
                            </tr>
                            <tr>
                                <td class="account-tax">Mã số thuế:</td>
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
                                <td><?php echo $this->Html->image('icon-vietcom.png', array('class' => '')); ?></td>
                                <td>
                                    <div class="form-group banks">
                                        <label>
                                            <input type="radio" name="opinion" checked="true"/>
                                            <span></span>
                                        </label>
                                    </div>
                                </td>
                                <td>Ngân hàng TMCP Ngoại Thương (VCB) - SỞ GIAO DỊCH
                                    Số tài khoả0011001894899
                                </td>
                            </tr>
                            <tr>
                                <td><?php echo $this->Html->image('icon-mb.png', array('class' => '')); ?></td>
                                <td>
                                    <div class="form-group banks">
                                        <label>
                                            <input type="radio" name="opinion" checked=""/>
                                            <span></span>
                                        </label>
                                    </div>
                                </td>
                                <td>Ngân hàng TMCP Quân đội(MB) - CN Hai Bà Trưng
                                    Số tài khoả0551100239007
                                </td>
                            </tr>
                            <tr>
                                <td><?php echo $this->Html->image('icon-exi.png', array('class' => '')); ?></td>
                                <td>
                                    <div class="form-group banks">
                                        <label>
                                            <input type="radio" name="opinion" checked=""/>
                                            <span></span>
                                        </label>
                                    </div>
                                </td>
                                <td>Ngân hàng TMCP Xuất nhập khẩu (EXB) - CN Hai Bà Trưng
                                    Số tài khoả170214851010357
                                </td>
                            </tr>
                            <tr>
                                <td><?php echo $this->Html->image('icon-vietin.png', array('class' => '')); ?></td>
                                <td>
                                    <div class="form-group banks">
                                        <label>
                                            <input type="radio" name="opinion" checked=""/>
                                            <span></span>
                                        </label>
                                    </div>
                                </td>
                                <td>Ngân hàng TMCP Công thương - CN Chương Dương
                                    Số tài khoả102010001202443
                                </td>
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


<?php //echo $this->element('sql_dump'); ?>




