
  <?php echo $this->Html->css('style_mb');?>
  <div class="form-register">
    <h3>Nhập thông tin khách hàng</h3>
    <ul class="nav nav-tabs">
<!--       <li class="active"><a data-toggle="tab" href="#person">Cá Nhân</a></li>
      <li><a data-toggle="tab" href="#company">Tổ Chức</a></li> -->
      <?php 
        if(isset($tab)){
              if($tab==1){
                echo '<li class="active"><a data-toggle="tab" href="#person">Cá Nhân</a></li><li><a data-toggle="tab" href="#company">Tổ Chức</a></li>';
              }else{
                echo '<li><a data-toggle="tab" href="#person">Cá Nhân</a></li><li class="active"><a data-toggle="tab" href="#company">Tổ Chức</a></li>';
              }
        }
        else{
            echo '<li class="active"><a data-toggle="tab" href="#person">Cá Nhân</a></li><li><a data-toggle="tab" href="#company">Tổ Chức</a></li>';
        }
      ?>
    </ul>

    <div class="tab-content">
      <p>Quý khách vui lòng điền đầy đủ thông tin Tiếng Việt có dấu</p>
      <?php 
        if(isset($tab)){
              if($tab==1){
                echo '<div id="person" class="tab-pane fade in active">';
              }else{
                echo '<div id="person" class="tab-pane fade">';
              }
        }
        else{
            echo '<div id="person" class="tab-pane fade in active">';
        }
      ?>
      <!-- <div id="person" class="tab-pane fade in active"> -->
        <!-- <form class="form-horizontal" action="" method="post"> -->
          <?php echo $this->Form->create('Account', 
            array(
              "url" => array('controller' => 'members','action' => 'register'),
              'class' => 'form-horizontal',
                )); 
          ?>
          <input name="data[tab]" type="hidden" value="1">
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
            <label class="control-label col-sm-3" for="pwd">Nhập mật khẩu:</label>
            <div class="col-sm-8">          
              <!-- <input type="password" class="form-control" id="original_password" placeholder="Nhập mật khẩu" name="original_password" required> -->
              <?php
                echo $this->Form->input('original_password',array(
                    'type' => 'password',
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
                    'type' => 'password',
                    'class' => 'form-control',
                    'label' => false,
                    'required' => true,
                    'placeholder' => 'Xác nhận mật khẩu',
                    ));
              ?>
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
        <!-- </form> -->
        <?php echo $this->Form->end(); ?>
      </div>
      <?php 
        if(isset($tab) && ($tab==0)){
          echo '<div id="company" class="tab-pane fade in active">';
        }else{
          echo '<div id="company" class="tab-pane fade">';
        }
      ?>
      <!-- <div id="company" class="tab-pane fade"> -->
        <!-- <form class="form-horizontal" action="/action_page.php"> -->
          <?php echo $this->Form->create('Account', 
            array(
              "url" => array('controller' => 'members','action' => 'register'),
              'class' => 'form-horizontal',
                )); 
          ?>
          <input name="data[tab]" type="hidden" value="0">
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
                <label class="control-label col-sm-3" for="pwd">Nhập mật khẩu:</label>
                <div class="col-sm-8">          
                  <?php
                    echo $this->Form->input('original_password',array(
                        'type' => 'password',
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
                        'type' => 'password',
                        'class' => 'form-control',
                        'label' => false,
                        'required' => true,
                        'placeholder' => 'Xác nhận mật khẩu',
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
  div.error-message{
    color:#c90425;
  }
</style>