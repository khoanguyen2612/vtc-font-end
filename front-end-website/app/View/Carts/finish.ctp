
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
                            <p>GIỎ HÀNG</p>
                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <div class="step processing">
                            <h3>2</h3>
                            <p>ĐIỀN THÔNG TIN</p>
                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <div class="step processing">
                            <h3>3</h3>
                            <p>THANH TOÁN</p>
                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <div class="step processing">
                            <h3>4</h3>
                            <p>HOÀN TẤT</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container">
                <form>
                    <div class="row">
                        <h3>HOÀN TẤT</h3>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <p class="congra"><img src="img/icon-wonder.png"> Tuyệt vời! Bạn đã đăng ký đặt hàng thành công.</p>
                        </div>
                    </div>
                    <div class="domain-completed">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 custom-info">
                                <table class="table table-bordered domain-custom-info">
                                    <thead>
                                    <tr>
                                        <th colspan="2"><img src="img/icon-info.png" class="icon-info"> THÔNG TIN KHÁCH HÀNG</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Tên khách hàng</td>
                                        <td class="name-customer">ABC</td>
                                    </tr>
                                    <tr>
                                        <td>Số điện thoại:</td>
                                        <td>0123456789</td>
                                    </tr>
                                    <tr>
                                        <td>Email: </td>
                                        <td>abc@gmail.com</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 cart-info">
                                <table class="table table-bordered domain-cart-info">
                                    <thead>
                                    <tr>
                                        <th colspan="2"><img src="img/icon-info.png" class="icon-info"> THÔNG TIN ĐƠN HÀNG</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Mã đơn hàng: </td>
                                        <td class="code-cart"> ABCDEF</td>
                                    </tr>
                                    <tr>
                                        <td>Ngày đặt hàng : </td>
                                        <td>17/10/2017</td>
                                    </tr>
                                    <tr>
                                        <td>Giờ đặt hàng: </td>
                                        <td> 10:35 SA</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <p class="info-domain"><img src="img/icon-info.png" class="icon-info"> THÔNG TIN DỊCH VỤ</p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 service-info">
                        <table class="table table-bordered domain-service-info text-center">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Dịch vụ</th>
                                <th>Thời hạn</th>
                                <th>Số tiền</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <h4>abc.info</h4>
                                    <p class="ten-mien">Tên miền</p>
                                </td>
                                <td>1 năm</td>
                                <td>
                                    <p class="line-through">319.000 VNĐ</p>
                                    <h4>79.000 VNĐ</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <h4>abc.info</h4>
                                    <p class="ten-mien">Tên miền</p>
                                </td>
                                <td>1 năm</td>
                                <td>
                                    <p class="line-through">319.000 VNĐ</p>
                                    <h4>79.000 VNĐ</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <h4>abc.info</h4>
                                    <p class="ten-mien">Tên miền</p>
                                </td>
                                <td>1 năm</td>
                                <td>
                                    <p class="line-through">319.000 VNĐ</p>
                                    <h4>79.000 VNĐ</h4>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"></div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 service-money">
                            <table class="table service-total-money">
                                <tbody>
                                <tr>
                                    <td>Tổng cộng(Chưa VAT): </td>
                                    <td> 1.349.000 VNĐ</td>
                                </tr>
                                <tr>
                                    <td>Số tiền giảm giá: </td>
                                    <td> - 240.000 VNĐ</td>
                                </tr>
                                <tr>
                                    <td> VAT: </td>
                                    <td>55.900 VNĐ</td>
                                </tr>
                                <tr>
                                    <td> Mã giảm giá: </td>
                                    <td></td>
                                </tr>
                                <tr class="into-money">
                                    <td>Thành tiền:</td>
                                    <td class="into-total"> 1.164.900 VNĐ</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 domain-cart-payments">
                            <h3><img src="img/icon-info.png" class="icon-info"> HÌNH THỨC THANH TOÁN </h3>
                            <div class="something">
                                <h4>Chuyển khoản</h4>
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td class="company-name"> Tên tài khoản:</td>
                                        <td> Công ty TNHH Một Thành Viên Viễn Thông Số VTC</td>
                                    </tr>
                                    <tr>
                                        <td class="company-address"> Địa chỉ: </td>
                                        <td>65 Lạc Trung, Phường Vĩnh Tuy, Quận Hai bà Trưng, TP.Hà Nội</td>
                                    </tr>
                                    <tr>
                                        <td class="code-tax">Mã số thuế: </td>
                                        <td>0105431099</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 print-cart">
                            <button type="submit" class="btn btn-print-cart">In đơn hàng</button>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 save-cart">
                            <button type="submit" class="btn btn-save-cart"> Lưu</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php //echo $this->element('sql_dump'); ?>




