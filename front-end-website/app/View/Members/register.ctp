  <div class="form-register">
    <h3>Nhập thông tin khách hàng</h3>
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#person">Cá Nhân</a></li>
      <li><a data-toggle="tab" href="#company">Tổ Chức</a></li>
    </ul>

    <div class="tab-content">
      <p>Quý khách vui lòng điền đầy đủ thông tin Tiếng Việt có dấu</p>
      <div id="person" class="tab-pane fade in active">
        <!-- <form class="form-horizontal" action="" method="post"> -->
          <?php echo $this->Form->create('Account', 
            array(
              "url" => array('controller' => 'members','action' => 'register'),
              'class' => 'form-horizontal',
                )); 
          ?>
          <div class="form-group">
            <label class="control-label col-sm-3" for="nickname">Nhập tên đăng nhập:</label>
            <div class="col-sm-8">
              <!-- <input type="text" class="form-control" id="nickname" placeholder="Nhập tên đăng nhập" name="nickname"> -->
              <?php
                echo $this->Form->input('nickname',array(
                    'type' => 'text',
                    'class' => 'form-control',
                    'label' => false,
                    'placeholder' => 'Nhập tên đăng nhập',
                    ));
              ?>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" for="pwd">Nhập họ tên:</label>
            <div class="col-sm-8">          
              <!-- <input type="text" class="form-control" id="name" placeholder="Nhập họ tên" name="name" > -->
              <?php
                echo $this->Form->input('name',array(
                    'type' => 'text',
                    'class' => 'form-control',
                    'label' => false,
                    'placeholder' => 'Nhập họ tên',
                    ));
              ?>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" for="pwd">Nhập email:</label>
            <div class="col-sm-8">          
              <!-- <input type="text" class="form-control" id="email" placeholder="Nhập email" name="email"> -->
              <?php
                echo $this->Form->input('email',array(
                    'type' => 'email',
                    'class' => 'form-control',
                    'label' => false,
                    'placeholder' => 'Nhập email',
                    ));
              ?>

            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" for="pwd">Số CMTND:</label>
            <div class="col-sm-8">          
              <!-- <input type="text" class="form-control" id="CMTND" placeholder=" Nhập số CMTND" name="CMTND"> -->
              <?php
                echo $this->Form->input('CMTND',array(
                    'type' => 'text',
                    'class' => 'form-control',
                    'label' => false,
                    'placeholder' => 'Nhập số CMTND',
                    ));
              ?>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" for="pwd">Tỉnh, thành phố:</label>
            <div class="col-sm-8">          
              <!-- <input type="text" class="form-control" id="address" placeholder="Tỉnh, thành phố" name="address"> -->
              <?php
                echo $this->Form->input('address',array(
                    'type' => 'text',
                    'class' => 'form-control',
                    'label' => false,
                    'placeholder' => 'Tỉnh, thành phố',
                    ));
              ?>
            </div>
          </div>
          <div class="form-group ">
            <label class="control-label col-sm-3" for="pwd">Nhập mật khẩu:</label>
            <div class="col-sm-8">          
              <!-- <input type="password" class="form-control" id="original_password" placeholder="Nhập mật khẩu" name="original_password" required> -->
              <?php
                echo $this->Form->input('original_password',array(
                    'type' => 'text',
                    'class' => 'form-control',
                    'label' => false,
                    'required' => true,
                    'placeholder' => 'Nhập mật khẩu',
                    ));
              ?>
            </div>
          </div>
          <div class="form-group ">
            <label class="control-label col-sm-3" for="pwd">Xác nhận mật khẩu:</label>
            <div class="col-sm-8">          
              <!-- <input type="password" class="form-control" id="confirm_password" placeholder="Xác nhận mật khẩu" name="confirm_password" required> -->
              <?php
                echo $this->Form->input('confirm_password',array(
                    'type' => 'text',
                    'class' => 'form-control',
                    'label' => false,
                    'required' => true,
                    'placeholder' => 'Xác nhận mật khẩu',
                    ));
              ?>
            </div>
          </div>
          <div class="form-group ">
            <label class="control-label col-sm-3" for="pwd">Giới tính:</label>
            <div class="col-sm-8">          
              <!-- <input type="text" class="form-control" id="sex" placeholder="Giới tính" name="sex"> -->
              <!-- <?php
                echo $this->Form->input('sex',array(
                    'type' => 'text',
                    'class' => 'form-control',
                    'label' => false,
                    'placeholder' => 'Giới tính',
                    ));
              ?> -->
              <label class="radio-inline">
                  <input type="radio" name="sex" value= '0' > Nữ
                  
                </label>
                <label class="radio-inline">
                  <input type="radio" name="sex" value='1'> Nam
                  
                </label>

            </div>
          </div>
          <div class="form-group ">
            <label class="control-label col-sm-3" for="pwd">Số điện thoại:</label>
            <div class="col-sm-8">          
              <!-- <input type="text" class="form-control" id="phonenumber" placeholder="Nhập số điện thoại" name="phonenumber"> -->
              <?php
                echo $this->Form->input('phonenumber',array(
                    'type' => 'text',
                    'class' => 'form-control',
                    'label' => false,
                    'placeholder' => 'Nhập số điện thoại',
                    ));
              ?>
            </div>
          </div>
          <div class="form-group ">
            <label class="control-label col-sm-3" for="pwd">Địa chỉ liên hệ:</label>
            <div class="col-sm-8">          
              <!-- <input type="text" class="form-control" id="add_contact" placeholder="Nhập địa chỉ liên hệ" name="add_contact"> -->
              <?php
                echo $this->Form->input('add_contact',array(
                    'type' => 'text',
                    'class' => 'form-control',
                    'label' => false,
                    'placeholder' => 'Nhập địa chỉ liên hệ',
                    ));
              ?>
            </div>
          </div>
          <div class="form-group ">
            <label class="control-label col-sm-3" for="pwd">Ngày tháng năm sinh:</label>
            <div class="col-sm-8">          
              <!-- <input type="text" class="form-control" id="birthday" placeholder="Nhập ngày tháng năm sinh" name="birthday"> -->
              <?php
                echo $this->Form->input('birthday',array(
                    'type' => 'text',
                    'class' => 'form-control',
                    'label' => false,
                    'placeholder' => 'Nhập ngày tháng năm sinh',
                    ));
              ?>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" for="pwd">Bạn đã có domain hay hosting chưa?</label>
            <div class="col-sm-8">          
              <label class="radio-inline">
                  <input type="radio" name="domain_flg" value= '1' > Đã có
                  
                </label>
                <label class="radio-inline">
                  <input type="radio" name="domain_flg" value='0'> Chưa có
                  
                </label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" for="pwd">Bạn có muốn tạo domain mới không?:</label>
            <div class="col-sm-8">   
                 <label class="radio-inline">
                  <input type="radio" name="domain_news_flg" value= '1'> Có
                </label>
                <label class="radio-inline">
                  <input type="radio" name="domain_news_flg" value= '0'>Không
                </label>
            </div>
          </div>
          <div class="form-group ">
            <label class="control-label col-sm-3" for="code-secure"> Nhập mã bảo vệ</label>
            <div class="col-sm-8">
              <!-- <input type="text" class="form-control" id="code-secure" name="p-code"> -->
              <?php
                echo $this->Form->input('p-code',array(
                    'type' => 'text',
                    'class' => 'form-control',
                    'label' => false,
                    'placeholder' => 'Nhập mã bảo vệ',
                    ));
              ?>
              <span class="p-code"><i> ABCDEF </i></span>
            </div>
          </div>
          <div class="row">
            <div class="form-group">        
              <div class="col-sm-offset-3 col-sm-8">
                <!-- <button type="submit" class="btn">Đăng ký</button> -->
                <?php
                  echo $this->Form->button('Đăng ký',array(
                    'class' => 'btn',
                    'id' => 'submit',
                  ));
                ?>
              </div>
          </div>
        </div>
        <!-- </form> -->
        <?php echo $this->Form->end(); ?>
      </div>
      <div id="company" class="tab-pane fade">
        <!-- <form class="form-horizontal" action="/action_page.php"> -->
          <?php echo $this->Form->create('Organiza', 
            array(
              "url" => array('controller' => 'members','action' => 'register'),
              'class' => 'form-horizontal',
                )); 
          ?>
          <div class="form-group required">
            <label class="control-label col-sm-3" for="email">Nhập tên người đại diện:</label>
              <div class="col-sm-8">
                <!-- <input type="email" class="form-control" id="email" placeholder="Nhập tên đăng nhập" name="email"> -->
                <?php
                echo $this->Form->input('nickname',array(
                    'type' => 'text',
                    'class' => 'form-control',
                    'label' => false,
                    'placeholder' => 'Nhập tên đăng nhập',
                    ));
                ?>
              </div>
              </div>
              <div class="form-group required">
                <label class="control-label col-sm-3" for="pwd">Nhập tên tổ chức:</label>
                <div class="col-sm-8">          
                  <?php
                    echo $this->Form->input('organization',array(
                        'type' => 'text',
                        'class' => 'form-control',
                        'label' => false,
                        'placeholder' => 'Nhập tên tổ chức',
                        ));
                  ?>
                </div>
              </div>
              <div class="form-group required">
                <label class="control-label col-sm-3" for="pwd">Nhập mã số thuế:</label>
                <div class="col-sm-8">          
                  <?php
                    echo $this->Form->input('tax_code',array(
                        'type' => 'text',
                        'class' => 'form-control',
                        'label' => false,
                        'placeholder' => 'Nhập mã số thuế',
                        ));
                  ?>
                </div>
              </div>
              <div class="form-group required">
                <label class="control-label col-sm-3" for="pwd">Địa chỉ liên hệ:</label>
                <div class="col-sm-8">          
                  <?php
                    echo $this->Form->input('add_contact',array(
                        'type' => 'text',
                        'class' => 'form-control',
                        'label' => false,
                        'placeholder' => 'Nhập mã Địa chỉ liên hệ',
                        ));
                  ?>
                </div>
              </div>
              <div class="form-group required">
                <label class="control-label col-sm-3" for="pwd">Tỉnh, thành phố:</label>
                <div class="col-sm-8">          
                  <?php
                    echo $this->Form->input('address',array(
                        'type' => 'text',
                        'class' => 'form-control',
                        'label' => false,
                        'placeholder' => 'Nhập Tỉnh, thành phố',
                        ));
                  ?>
                </div>
              </div>
              <div class="form-group required">
                <label class="control-label col-sm-3" for="pwd">Nhập mật khẩu:</label>
                <div class="col-sm-8">          
                  <?php
                    echo $this->Form->input('original_password',array(
                        'type' => 'text',
                        'class' => 'form-control',
                        'label' => false,
                        'required' => true,
                        'placeholder' => 'Nhập mật khẩu',
                        ));
                  ?>
                </div>
              </div>
              <div class="form-group required">
                <label class="control-label col-sm-3" for="pwd">Xác nhận mật khẩu:</label>
                <div class="col-sm-8">          
                  <?php
                    echo $this->Form->input('confirm_password',array(
                        'type' => 'text',
                        'class' => 'form-control',
                        'label' => false,
                        'required' => true,
                        'placeholder' => 'Xác nhận mật khẩu',
                        ));
                  ?>
                </div>
              </div>
              <div class="form-group required">
                <label class="control-label col-sm-3" for="pwd">Nhập email:</label>
                <div class="col-sm-8">          
                  <?php
                    echo $this->Form->input('email',array(
                        'type' => 'email',
                        'class' => 'form-control',
                        'label' => false,
                        'placeholder' => 'Nhập email',
                        ));
                  ?>
                </div>
              </div>
              <div class="form-group required">
                <label class="control-label col-sm-3" for="pwd">Số điện thoại chính:</label>
                <div class="col-sm-8">          
                  <?php
                    echo $this->Form->input('phonenumber',array(
                        'type' => 'text',
                        'class' => 'form-control',
                        'label' => false,
                        'placeholder' => 'Nhập số điện thoại chính',
                        ));
                  ?>
                </div>
              </div>
              <div class="form-group required">
                <label class="control-label col-sm-3" for="pwd">Số điện thoại phụ:</label>
                <div class="col-sm-8">          
                  <?php
                    echo $this->Form->input('phonenumber_2',array(
                        'type' => 'text',
                        'class' => 'form-control',
                        'label' => false,
                        'placeholder' => 'Nhập số điện thoại phụ',
                        ));
                  ?>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3" for="pwd">Công ty bạn đã có domain hay hosting chưa?</label>
                <div class="col-sm-8">          
                  <label class="radio-inline">
                      <input type="radio" name="domain_flg"> Đã có
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="domain_flg"> Chưa có
                    </label>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3" for="pwd">Công ty bạn có muốn tạo domain mới không?:</label>
                <div class="col-sm-8">   
                  <label class="radio-inline">
                    <input type="radio" name="domain_new_flg"> Có
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="domain_new_flg">Không
                  </label>
                </div>
              </div>
              <div class="form-group required">
                <label class="control-label col-sm-3" for="code-secure"> Nhập mã bảo vệ</label>
                <div class="col-sm-8">
                  <?php
                    echo $this->Form->input('p-code',array(
                        'type' => 'text',
                        'class' => 'form-control',
                        'label' => false,
                        'placeholder' => 'Nhập mã bảo vệ',
                        ));
                  ?>
                  <span class="p-code"><i> XYZD</i></span>
                </div>
              </div>
            <div class="form-group">        
              <div class="col-sm-offset-3 col-sm-8">
                <?php
                  echo $this->Form->button('Đăng ký',array(
                    'class' => 'btn',
                    'id' => 'submit',
                  ));
                ?>
              </div>
            </div>
          </form>
      </div>
    </div>
  </div>
<style type="text/css">
  .form-register{
    margin: auto;
    max-width: 900px;
  }
  .form-register h3{
    color: #f37636;
  }
  .tab-content{
    padding: 10px 10px;
  }
  .form-register .nav li.active a{
    background: #f37636;
    border:0px;
    color:#ffffff;
  }
  .form-register .nav li a{
    border:0px;
    color:black;
  }

  .form-register li.active{
    border: 0px solid #f37636;
    background: #f37636;
  }
  .form-register .tab-content p{
    color: #f37636;
    margin:20px;
  }
  .tab-content{
    border: 1px solid #f37636;
  }
  body{
    font-family: Arial;
  }
  .tab-content button{
    text-align: center;
    background: #f37636;
    color:#ffffff;
    width: 145px;
    padding:10px 10px;
  }
</style>
<style type="text/css">
  div.error-message{
    color:#c90425;
  }
</style>