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
          <div class="form-group required">
            <label class="control-label col-sm-3" for="nickname">Nhập tên đăng nhập:</label>
            <div class="col-sm-8">
              <!-- <input type="text" class="form-control" id="nickname" placeholder="Nhập tên đăng nhập" name="nickname"> -->
              <?php
                echo $this->Form->input('nickname',array(
                    'type' => 'text',
                    'class' => 'form-control',
                    'label' => false,
                    'placeholder' => 'Nhập tên đăng nhập',
                    'required' => true,
                    ));
              ?>
            </div>
          </div>
          <div class="form-group required">
            <label class="control-label col-sm-3" for="pwd">Nhập họ tên:</label>
            <div class="col-sm-8">          
              <!-- <input type="text" class="form-control" id="name" placeholder="Nhập họ tên" name="name" > -->
              <?php
                echo $this->Form->input('name',array(
                    'type' => 'text',
                    'class' => 'form-control',
                    'label' => false,
                    'placeholder' => 'Nhập họ tên',
                    'required' => true,
                    ));
              ?>
            </div>
          </div>
          <div class="form-group required">
            <label class="control-label col-sm-3" for="pwd">Nhập email:</label>
            <div class="col-sm-8">          
              <!-- <input type="text" class="form-control" id="email" placeholder="Nhập email" name="email"> -->
              <?php
                echo $this->Form->input('email',array(
                    'type' => 'email',
                    'class' => 'form-control',
                    'label' => false,
                    'placeholder' => 'Nhập email',
                    'required' => true,
                    ));
              ?>

            </div>
          </div>
          <div class="form-group required">
            <label class="control-label col-sm-3" for="pwd">Số CMTND:</label>
            <div class="col-sm-8">          
              <!-- <input type="text" class="form-control" id="CMTND" placeholder=" Nhập số CMTND" name="CMTND"> -->
              <?php
                echo $this->Form->input('CMTND',array(
                    'type' => 'text',
                    'class' => 'form-control',
                    'label' => false,
                    'placeholder' => 'Nhập số CMTND',
                    'required' => true,
                    ));
              ?>
            </div>
          </div>
          <div class="form-group required">
            <label class="control-label col-sm-3" for="pwd">Tỉnh, thành phố:</label>
            <div class="col-sm-8">          
              <!-- <input type="text" class="form-control" id="address" placeholder="Tỉnh, thành phố" name="address"> -->
              <?php
                echo $this->Form->input('address',array(
                    'type' => 'text',
                    'class' => 'form-control',
                    'label' => false,
                    'placeholder' => 'Tỉnh, thành phố',
                    'required' => true,
                    ));
              ?>
            </div>
          </div>
          <div class="form-group required">
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
          <div class="form-group required">
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
          <div class="form-group required">
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
                  <input type="radio" name="sex" value= '0' required> Nữ
                  
                </label>
                <label class="radio-inline">
                  <input type="radio" name="sex" value='1' required> Nam
                  
                </label>

            </div>
          </div>
          <div class="form-group required">
            <label class="control-label col-sm-3" for="pwd">Số điện thoại:</label>
            <div class="col-sm-8">          
              <!-- <input type="text" class="form-control" id="phonenumber" placeholder="Nhập số điện thoại" name="phonenumber"> -->
              <?php
                echo $this->Form->input('phonenumber',array(
                    'type' => 'text',
                    'class' => 'form-control',
                    'label' => false,
                    'placeholder' => 'Nhập số điện thoại',
                    'required' => true,
                    ));
              ?>
            </div>
          </div>
          <div class="form-group required">
            <label class="control-label col-sm-3" for="pwd">Địa chỉ liên hệ:</label>
            <div class="col-sm-8">          
              <!-- <input type="text" class="form-control" id="add_contact" placeholder="Nhập địa chỉ liên hệ" name="add_contact"> -->
              <?php
                echo $this->Form->input('add_contact',array(
                    'type' => 'text',
                    'class' => 'form-control',
                    'label' => false,
                    'placeholder' => 'Nhập địa chỉ liên hệ',
                    'required' => true,
                    ));
              ?>
            </div>
          </div>
          <div class="form-group required">
            <label class="control-label col-sm-3" for="pwd">Ngày tháng năm sinh:</label>
            <div class="col-sm-8">          
              <!-- <input type="text" class="form-control" id="birthday" placeholder="Nhập ngày tháng năm sinh" name="birthday"> -->
          
                <select name="day">
                    <?php
                    for($i=1;$i<=31;$i++)
                    {
                        echo '<option value='.$i.'>'.$i.'</option>';
                    }?>
                </select>


                <select name="month">
                    <option value="01">January</option>
                    <option value="02">February</option>
                    <option value="03">Mars</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>

                <select name="year">
                  <?php
                    for($i=2010;$i>=1950;$i--)
                    {
                        echo '<option value='.$i.'>'.$i.'</option>';
                    }

                  ?>
                </select>
            </div>
          </div>
          <div class="form-group required">
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
          <div class="form-group required">
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
          <div class="form-group required">
            <label class="control-label col-sm-3" for="code-secure"> Nhập mã bảo vệ</label>
            <div class="col-sm-8">
              <!-- <input type="text" class="form-control" id="code-secure" name="p-code"> -->
              <?php
                echo $this->Form->input('p-code',array(
                    'type' => 'text',
                    'class' => 'form-control',
                    'label' => false,
                    'placeholder' => 'Nhập mã bảo vệ',
                    'required' => true,
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
                    'class' => 'btn btn-login',
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
          <?php echo $this->Form->create('Account', 
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
                    'required' => true,
                    ));
                ?>
              </div>
              </div>
              <div class="form-group required">
                <label class="control-label col-sm-3" for="pwd">Nhập tên tổ chức:</label>
                <div class="col-sm-8">          
                  <?php
                    echo $this->Form->input('organ_name',array(
                        'type' => 'text',
                        'class' => 'form-control',
                        'label' => false,
                        'placeholder' => 'Nhập tên tổ chức',
                        'required' => true,
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
                        'required' => true,
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
                        'required' => true,
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
                        'required' => true,
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
                        'required' => true,
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
                        'required' => true,
                        ));
                  ?>
                </div>
              </div>
              <div class="form-group required">
                <label class="control-label col-sm-3" for="pwd">Số điện thoại phụ:</label>
                <div class="col-sm-8">          
                  <?php
                    echo $this->Form->input('phonenumber2',array(
                        'type' => 'text',
                        'class' => 'form-control',
                        'label' => false,
                        'placeholder' => 'Nhập số điện thoại phụ',
                        'required' => true,
                        ));
                  ?>
                </div>
              </div>
              <div class="form-group required">
                <label class="control-label col-sm-3" for="pwd">Công ty bạn đã có domain hay hosting chưa?</label>
                <div class="col-sm-8">          
                  <label class="radio-inline">
                      <input type="radio" name="domain_flg" value= '1' required > Đã có
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="domain_flg" value= '0' required> Chưa có
                    </label>
                </div>
              </div>
              <div class="form-group required">
                <label class="control-label col-sm-3" for="pwd">Công ty bạn có muốn tạo domain mới không?:</label>
                <div class="col-sm-8">   
                  <label class="radio-inline">
                    <input type="radio" name="domain_new_flg" value= '1' required> Có
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="domain_new_flg" value= '0' required> Không
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
                        'required' => true,
                        ));
                  ?>
                  <span class="p-code"><i> XYZD</i></span>
                </div>
              </div>
            <div class="form-group">        
              <div class="col-sm-offset-3 col-sm-8">
                <?php
                  echo $this->Form->button('Đăng ký',array(
                    'class' => 'btn btn-login',
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
/*register.ctp*/
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
  }
</style>
<style type="text/css">
  div.error-message{
    color:#c90425;
  }
</style>