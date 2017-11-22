<div class="cart">
    <div class="process">
        <div class="process">
            <div class="container">
                    <?php echo $this->Html->image('button_step2.png',array('class'=>'img-responsive')); ?>
            </div>
        </div>
    </div>
    <div class="content info_owner">
        <div class="container">
            <div class="row">
                <h3>ĐIỀN THÔNG TIN MUA TÊN MIỀN</h3>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active" id="cn">
                                <a href="#personal" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true">CÁ NHÂN</a>
                            </li>
                            <li role="presentation" class="" id="tc">
                                <a href="#group" aria-controls="tab" role="tab" data-toggle="tab" aria-expanded="false">TỔ CHỨC</a>
                            </li>
                        </ul>
                        <?php echo $this->Form->create('Contact',array(
                            "url" => array('controller' => 'infocarts','action' => 'register'),
                            'inputDefaults'=>array('label'=>false, 'div'=>false,'required' => 'false','error' => false)
                        )); 
                        ?>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="personal">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 select_info_save">
                                    <span class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Chọn bản khai đã lưu:</span>
                                    <select onchange="getSavedRecord(this.value)" name="" class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <option value="0">Chọn bản khai đã lưu</option>
                                        <?php foreach ($record_personal as $row): ?> 
                                            <option class="personal" value="<?php echo $row['Contact']['id'] ?>">
                                                <?php echo $row['Contact']['lname']?> [Cá Nhân]
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 get_account_info">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <label>
                                            <i></i>
                                            Thông tin chủ thể tên miền
                                        </label>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <a href="javascript:getAccInfo('I');"> <button type="button" class="btn btn-info">Lấy thông tin tài khoản</button></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="name" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Họ tên:</label>
                                            <?php echo $this->Form->input('name',array('type'=>'text','class'=>'col-md-8','id'=>'name_cn','required'=> 'true'))?>
                                        </div>
                                        <div class="form-group">
                                            <label for="birthday" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Ngày sinh</label>
                                            <input type="date" name="data[Contact][birthday]" class="col-md-8" id="birthday_cn">
                                        </div>
                                        <div class="form-group">
                                            <label for="street" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Địa Chỉ Liên Hệ</label>
                                            <?php echo $this->Form->input('street',array('type'=>'text', 'class'=>'col-md-8','id'=>'street_cn','required'=> 'true'))?>
                                        </div>
                                        <div class="form-group gender">
                                            <label class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Giới tính</label>
                                            <label>
                                                <input type="radio" name="data[Contact][sex_cn]" value="1" id="male" required>
                                                <span>Nam</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="data[Contact][sex_cn]" value="0" id="female" required>
                                                <span>Nữ</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="ownerid" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Số CMND</label>
                                            <?php echo $this->Form->input('ownerid',array('type'=>'text', 'class'=>'col-md-8','id'=>'ownerid_cn','required'=> 'true'))?>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Số Điện Thoại</label>
                                            <?php echo $this->Form->input('phone',array('type'=>'text', 'class'=>'col-md-8','id'=>'phone_cn','required'=> 'true'))?>
                                        </div>

                                        <div class="form-group">
                                            <label for="city" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Tỉnh, Thành Phố</label>
                                            <?php echo $this->Form->input('city',array('type'=>'text', 'class'=>'col-md-8','id'=>'city_cn','required'=> 'true'))?>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Email liên hệ</label>
                                            <?php echo $this->Form->input('email',array('type'=>'email','class'=>'col-md-8','id'=>'email_cn','required'=> 'true'))?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end personal -->
                            <!-- group info  -->
                            <div role="tabpanel" class="tab-pane" id="group">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 select_info_save">
                                    <span class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Chọn bản khai đã lưu:</span>
                                    <select name="" class="col-lg-8 col-md-8 col-sm-8 col-xs-12" onchange="getSavedRecord(this.value)">
                                        <option value="">Chọn bản khai đã lưu</option>
                                        <?php foreach ($record_organizion as $row): ?>
                                            <option class="personal" value="<?php echo $row['Contact']['id'] ?>">
                                                <?php echo $row['Contact']['lname']?> [Tổ Chức]
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 get_account_info">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <label>
                                            <i></i>
                                            Thông tin chủ thể tên miền
                                        </label>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <a href="javascript:getAccInfo('R');"><button type="button" class="btn btn-info">Lấy thông tin tài khoản</button></a>
                                    </div>
                                </div>
                                <div class="row" id="reg">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="name" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Tên tổ chức</label>
                                            <?php echo $this->Form->input('name_tc',array('type'=>'text', 'class'=>'col-md-8','required'=>'true','id'=>'name_tc'))?>
                                        </div>
                                        <div class="form-group">
                                            <label for="street" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Địa chỉ liên hệ</label>
                                            <?php echo $this->Form->input('street_tc',array('type'=>'text', 'class'=>'col-md-8','required'=>'true','id'=>'street_tc'))?>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Số điện thoại</label>
                                            <?php echo $this->Form->input('phone_tc',array('type'=>'text', 'class'=>'col-md-8','required'=>'true','id'=>'phone_tc'))?>
                                        </div>      
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="ownerid_tc" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Mã số thuế</label>
                                            <?php echo $this->Form->input('ownerid_tc',array('type'=>'text', 'class'=>'col-md-8','required'=>'true','id'=>'ownerid_tc'))?>
                                        </div>
                                        <div class="form-group">
                                            <label for="city" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Tỉnh thành</label>
                                            <?php echo $this->Form->input('city_tc',array('type'=>'text', 'class'=>'col-md-8','required'=>'true','id'=>'city_tc'))?>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Email liên hệ</label>
                                            <?php echo $this->Form->input('email_tc',array('type'=>'text', 'class'=>'col-md-8','required'=>'true','id'=>'email_tc'))?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 get_account_info">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <label>
                                            <i></i>
                                            Thông tin người quản lý tên miền
                                        </label>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <button type="button" class="btn btn-info" id="get_mana">Thông tin chủ thể tên miền</button>
                                    </div>
                                </div>
                                <div class="row" id="manager">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="mn_name" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Họ tên:</label>
                                            <?php echo $this->Form->input('mn_name',array('type'=>'text', 'class'=>'col-md-8','required'=>'false','id'=>'mn_name'))?>
                                        </div>
                                        <div class="form-group">
                                            <label for="mn_city" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Tỉnh thành</label>
                                            <?php echo $this->Form->input('mn_city',array('type'=>'text', 'class'=>'col-md-8','required'=>'false','id'=>'mn_city'))?>
                                        </div>
                                        <div class="form-group">
                                            <label for="mn_birthday" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Ngày sinh</label>
                                            <input type="date" class="col-md-8" name="data[Contact][mn_birthday]" id="mn_birthday">
                                        </div>
                                        <div class="form-group">
                                            <label for="mn_phone" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Số điện thoại</label>
                                            <?php echo $this->Form->input('mn_phone',array('type'=>'text', 'class'=>'col-md-8','required'=>'false','id'=>'mn_phone'))?>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="mn_ownerid" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Số CMND</label>
                                            <?php echo $this->Form->input('mn_ownerid',array('type'=>'text', 'class'=>'col-md-8','required'=>'false','id'=>'mn_ownerid'))?>
                                        </div>
                                        <div class="form-group">
                                            <label for="mn_street" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Địa chỉ liên hệ</label>
                                            <?php echo $this->Form->input('mn_street',array('type'=>'text', 'class'=>'col-md-8','required'=>'false','id'=>'mn_street'))?>
                                        </div>
                                        <div class="form-group gender">
                                            <label class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Giới tính</label>
                                            <label>
                                                <input type="radio" name="data[Contact][mn_gender]" value="1" required>
                                                <span>Nam</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="data[Contact][mn_gender]" value="0" required>
                                                <span>Nữ</span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Email liên hệ</label>
                                            <?php echo $this->Form->input('mn_email',array('type'=>'text', 'class'=>'col-md-8','required'=>'false','id'=>'mn_email'))?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 get_account_info">
                                    <div class="col-lg-6">
                                        <label>
                                            <i></i>
                                            Thông tin người thanh toán
                                        </label>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <button type="button" class="btn btn-info" id="get_bill">Lấy thông tin quản lý tên miền</button>
                                    </div>
                                </div>
                                <div class="row" id="bill">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Họ tên:</label>
                                            <?php echo $this->Form->input('bill_name',array('type'=>'text', 'class'=>'col-md-8','required'=>'true','id'=>'bill_name'))?>
                                        </div>
                                        <div class="form-group">
                                            <label for="city" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Tỉnh thành</label>
                                            <?php echo $this->Form->input('bill_city',array('type'=>'text', 'class'=>'col-md-8','required'=>'true','id'=>'bill_city'))?>
                                        </div>
                                        <div class="form-group">
                                            <label for="birthday" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Ngày sinh</label>
                                            <input type="date" class="col-md-8" name="data[Contact][bill_birthday]" id="bill_birthday">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Số điện thoại</label>
                                            <?php echo $this->Form->input('bill_phone',array('type'=>'text', 'class'=>'col-md-8','required'=>'true','id'=>'bill_phone'))?>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="ownerid" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Số CMND</label>
                                            <?php echo $this->Form->input('bill_ownerid',array('type'=>'text', 'class'=>'col-md-8','required'=>'true','id'=>'bill_ownerid'))?>
                                        </div>
                                        <div class="form-group">
                                            <label for="street" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Địa chỉ liên hệ</label>
                                            <?php echo $this->Form->input('bill_street',array('type'=>'text', 'class'=>'col-md-8','required'=>'true','id'=>'bill_street'))?>
                                        </div>
                                        <div class="form-group gender">
                                            <label class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Giới tính</label>
                                            <label>
                                                <input type="radio" name="data[Contact][bill_gender]" value="1" required>
                                                <span>Nam</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="data[Contact][bill_gender]" value="0" required>
                                                <span>Nữ</span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="bill_email" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Email liên hệ</label>
                                            <?php echo $this->Form->input('bill_email',array('type'=>'text', 'class'=>'col-md-8','required'=>'true','id'=>'bill_email'))?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 get_account_info">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <label>
                                            <i></i>
                                            Thông tin người thay mặt tổ chức quản lý tên miền
                                        </label>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <button type="button" class="btn btn-info" id="get_other">Lấy thông tin quản lý tên miền</button>
                                    </div>
                                </div>
                                <div class="row" id="other">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" >
                                        <div class="form-group">
                                            <label for="name" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Họ tên:</label>
                                            <?php echo $this->Form->input('other_name',array('type'=>'text', 'class'=>'col-md-8','required'=>'false','id'=>'other_name'))?>
                                        </div>
                                        <div class="form-group">
                                            <label for="city" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Tỉnh thành</label>
                                            <?php echo $this->Form->input('other_city',array('type'=>'text', 'class'=>'col-md-8','required'=>'false','id'=>'other_city'))?>
                                        </div>
                                        <div class="form-group">
                                            <label for="birthday" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Ngày sinh</label>
                                            <input type="date" name="" class="col-md-8" name="data[Contact][other_birthday]" id="other_birthday">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Số điện thoại</label>
                                            <?php echo $this->Form->input('other_phone',array('type'=>'text', 'class'=>'col-md-8','required'=>'false','id'=>'other_phone'))?>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="ownerid" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Số CMND</label>
                                            <?php echo $this->Form->input('other_ownerid',array('type'=>'text', 'class'=>'col-md-8','required'=>'false','id'=>'other_ownerid'))?>
                                        </div>
                                        <div class="form-group">
                                            <label for="street" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Địa chỉ liên hệ</label>
                                            <?php echo $this->Form->input('other_street',array('type'=>'text', 'class'=>'col-md-8','required'=>'false','id'=>'other_street'))?>
                                        </div>
                                        <div class="form-group gender">
                                            <label class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Giới tính</label>
                                            <label>
                                                <input type="radio" name="other_gender" value="1">
                                                <span>Nam</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="other_gender" value="0">
                                                <span>Nữ</span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Email liên hệ</label>
                                            <?php echo $this->Form->input('other_email',array('type'=>'text', 'class'=>'col-md-8','required'=>'false','id'=>'other_email'))?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <?php if(isset($Errors)): ?>

                                    <?php foreach($Errors as $val): ?>
                                     <div class="alert alert-warning">
                                        <?php echo $val['0']; ?>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <div class="comfirm">
                            <p>
                                Trong trường hợp thông tin dùng để đăng ký không hợp lệ hoặc không khớp với giấy tờ xác nhận (theo chứng minh thư với chủ thể là cá nhân
                                và theo giấy phép đăng ký kinh doanh với chủ thể là tổ chức), tên miền sẽ bị thu hồi và người đăng ký sẽ chịu hoàn toàn trách nhiệm.
                            </p>
                            <label>
                                <input type="checkbox" value="">
                                Tôi đã đọc và đồng ý
                            </label>
                        </div>
                        <div class="action col-lg-8">
                            <a href="" class="btn btn-info" role="button">Quay lại</a>
                            <button class="btn btn-success" type="submit">Tiếp tục</button>
                        </div>

                    </div>
                    <?php echo $this->Form->end(); ?>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
</div>
<script type="text/javascript">
    function getSavedRecord(id){
        $.ajax({
            url : "getSaveRecord",
            type : "post",
            dataType:"json",
            data : {
                record_id:id
            },
            success : function (data){
                if(data.status == '1'){
                    if(data.Contact.role_flg == 'I'){
                     $('#name_cn').val(data.Contact.lname);
                     $('#birthday_cn').val(data.Contact.birthday);
                     $('#ownerid_cn').val(data.Contact.ownerid);
                     $('#phone_cn').val(data.Contact.phone);
                     $('#street_cn').val(data.Contact.street1);
                     $('#city_cn').val(data.Contact.city);
                     $('#email_cn').val(data.Contact.email);
                     if(data.Contact.sex == 1){
                       $('#personal input#male').attr('checked','true');
                   }
                   else if(data.Contact.sex == 0){
                    $('#personal input#female').attr('checked','true');
                }

            }else if(data.Contact.role_flg == 'R'){
                $('#name_tc').val(data.Contact.organization);
                $('#street_tc').val(data.Contact.street1);
                $('#phone_tc').val(data.Contact.phone);
                $('#ownerid_tc').val(data.Contact.ownerid);
                $('#city_tc').val(data.Contact.city);
                $('#email_tc').val(data.Contact.email); 
            }
        }
    }
})
}
    function getAccInfo(data){
      $.ajax({
          url: 'getInfoAccount',
          type: 'POST',
          dataType: 'json',
          data: {type: data},
      })
      .done(function(result) {
        console.log(result);
        if(data == 'I'){
            $('#birthday_cn').val(result.Account.birthday);
            $('#ownerid_cn').val(result.Account.CMTND);
            $('#phone_cn').val(result.Account.phonenumber);
            $('#email_cn').val(result.Account.email);
            $('#name_cn').val(result.Account.login_id);
            $('#street_cn').val(result.Account.add_contact);
            $('#city_cn').val(result.Account.address); 
        }
        if(data = 'R'){

            $('#name_tc').val(result.Organization.organ_name);
            $('#street_tc').val(result.Account.add_contact);
            $('#phone_tc').val(result.Organization.phonenumber2);
            $('#ownerid_tc').val(result.Organization.tax_code);
            $('#city_tc').val(result.Account.address);
            $('#email_tc').val(result.Account.email); 
        }
})
}

  $(document).ready(function() {
     $('.comfirm label input[type=checkbox]').change(function(){
        $('.comfirm label').toggleClass('agree');
});
if($('.comfirm input[type=checkbox]').prop('checked')){
         $('.comfirm label').addClass('agree');
     }
     $('form').on('submit', function(e){
        if(!$('.comfirm input[type=checkbox]').prop('checked'))
        {
            alert('Bạn chưa chọn đồng ý với các điều khoản');
e.preventDefault();
        }


})
});

$('button[type=submit]').click(function(){
     if ($('#cn').hasClass('active')) {
        $('#group').find('input[required]').removeAttr('required');
        $('#group input').val('');
    }else{
     $('#personal').find('input[required]').removeAttr('required');
     $('#personal input').val('');
 }
});

// lay thong tin chu the ten mien
  $('#get_mana').click(function(){
    $('#mn_street').val($('#street_tc').val());
    $('#mn_phone').val($('#phone_tc').val());
    $('#mn_city').val($('#city_tc').val());
    $('#mn_email').val($('#email_tc').val());
});
// lay thong tin nguoi quan ly
  $('#get_bill').click(function(){
    $('#bill_name').val($('#mn_name').val());
    $('#bill_birthday').val($('#mn_birthday').val());
    $('#bill_ownerid').val($('#mn_ownerid').val());
    $('#bill_phone').val($('#mn_phone').val());
    $('#bill_street').val($('#mn_street').val());
    $('#bill_city').val($('#mn_city').val());
    $('#bill_email').val($('#mn_email').val())

});
$('#get_other').click(function(){
     $('#other_name').val($('#mn_name').val());
     $('#other_birthday').val($('#mn_birthday').val());
     $('#other_ownerid').val($('#mn_ownerid').val());
     $('#other_phone').val($('#mn_phone').val());
     $('#other_street').val($('#mn_street').val());
     $('#other_city').val($('#mn_city').val());
     $('#other_email').val($('#mn_email').val())

})
</script>
