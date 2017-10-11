  <div class="form-register">
    <h3>Nhập thông tin khách hàng</h3>
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#person">Cá Nhân</a></li>
      <li><a data-toggle="tab" href="#company">Tổ Chức</a></li>
    </ul>

    <div class="tab-content">
      <p>Quý khách vui lòng điền đầy đủ thông tin Tiếng Việt có dấu</p>
      <div id="person" class="tab-pane fade in active">
        <form class="form-horizontal" action="" method="post">
          <div class="form-group required">
            <label class="control-label col-sm-3" for="nickname">Nhập tên đăng nhập:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nickname" placeholder="Nhập tên đăng nhập" name="nickname" required="required">
            </div>
          </div>
          <div class="form-group required">
            <label class="control-label col-sm-3" for="pwd">Nhập họ tên:</label>
            <div class="col-sm-8">          
              <input type="text" class="form-control" id="pwd" placeholder="Nhập họ tên" name="pwd" required>
            </div>
          </div>
          <div class="form-group required">
            <label class="control-label col-sm-3" for="pwd">Nhập email:</label>
            <div class="col-sm-8">          
              <input type="text" class="form-control" id="email" placeholder="Nhập email" name="email">
            </div>
          </div>
          <div class="form-group required">
            <label class="control-label col-sm-3" for="pwd">Số CMTND:</label>
            <div class="col-sm-8">          
              <input type="number" class="form-control" id="CMTND" placeholder=" Nhập số CMTND" name="CMTND">
            </div>
          </div>
          <div class="form-group required">
            <label class="control-label col-sm-3" for="pwd">Tỉnh, thành phố:</label>
            <div class="col-sm-8">          
              <input type="text" class="form-control" id="address" placeholder="Tỉnh, thành phố" name="address">
            </div>
          </div>
          <div class="form-group required">
            <label class="control-label col-sm-3" for="pwd">Nhập mật khẩu:</label>
            <div class="col-sm-8">          
              <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu" name="password">
            </div>
          </div>
          <div class="form-group required">
            <label class="control-label col-sm-3" for="pwd">Xác nhận mật khẩu:</label>
            <div class="col-sm-8">          
              <input type="password" class="form-control" id="confirm_password" placeholder="Xác nhận mật khẩu" name="confirm_password">
            </div>
          </div>
          <div class="form-group required">
            <label class="control-label col-sm-3" for="pwd">Giới tính:</label>
            <div class="col-sm-8">          
              <input type="text" class="form-control" id="sex" placeholder="Giới tính" name="sex">
            </div>
          </div>
          <div class="form-group required">
            <label class="control-label col-sm-3" for="pwd">Số điện thoại:</label>
            <div class="col-sm-8">          
              <input type="number" class="form-control" id="phonenumber" placeholder="Nhập số điện thoại" name="phonenumber">
            </div>
          </div>
          <div class="form-group required">
            <label class="control-label col-sm-3" for="pwd">Địa chỉ liên hệ:</label>
            <div class="col-sm-8">          
              <input type="text" class="form-control" id="add_contact" placeholder="Nhập địa chỉ liên hệ" name="add_contact">
            </div>
          </div>
          <div class="form-group required">
            <label class="control-label col-sm-3" for="pwd">Ngày tháng năm sinh:</label>
            <div class="col-sm-8">          
              <input type="text" class="form-control" id="birthday" placeholder="Nhập ngày tháng năm sinh" name="birthday">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" for="pwd">Bạn đã có domain hay hosting chưa?</label>
            <div class="col-sm-8">          
              <label class="radio-inline">
                  <input type="radio" name="optradio1" value= '1' > Đã có
                </label>
                <label class="radio-inline">
                  <input type="radio" name="optradio1" value='0'> Chưa có
                </label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" for="pwd">Bạn có muốn tạo domain mới không?:</label>
            <div class="col-sm-8">   
                 <label class="radio-inline">
                  <input type="radio" name="optradio" value= '1'> Có
                </label>
                <label class="radio-inline">
                  <input type="radio" name="optradio" value= '0'>Không
                </label>
            </div>
          </div>
          <div class="form-group required">
            <label class="control-label col-sm-3" for="code-secure"> Nhập mã bảo vệ</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="code-secure" name="p-code">
              <span class="p-code"><i> ABCDEF </i></span>
            </div>
          </div>
          <div class="row">
            <div class="form-group">        
              <div class="col-sm-offset-3 col-sm-8">
                <button type="submit" class="btn">Đăng ký</button>
              </div>
          </div>
        </div>
        </form>
      </div>
      <div id="company" class="tab-pane fade">
        <form class="form-horizontal" action="/action_page.php">
          <div class="form-group required">
            <label class="control-label col-sm-3" for="email">Nhập tên người đại diện:</label>
              <div class="col-sm-8">
                <input type="email" class="form-control" id="email" placeholder="Nhập tên đăng nhập" name="email">
              </div>
              </div>
              <div class="form-group required">
                <label class="control-label col-sm-3" for="pwd">Nhập tên tổ chức:</label>
                <div class="col-sm-8">          
                  <input type="password" class="form-control" id="pwd" placeholder="Nhập họ tên" name="pwd">
                </div>
              </div>
              <div class="form-group required">
                <label class="control-label col-sm-3" for="pwd">Nhập mã số thuế:</label>
                <div class="col-sm-8">          
                  <input type="password" class="form-control" id="pwd" placeholder="Nhập email" name="pwd">
                </div>
              </div>
              <div class="form-group required">
                <label class="control-label col-sm-3" for="pwd">Địa chỉ liên hệ:</label>
                <div class="col-sm-8">          
                  <input type="password" class="form-control" id="pwd" placeholder=" Nhập số CMTND" name="pwd">
                </div>
              </div>
              <div class="form-group required">
                <label class="control-label col-sm-3" for="pwd">Tỉnh, thành phố:</label>
                <div class="col-sm-8">          
                  <input type="password" class="form-control" id="pwd" placeholder="Tỉnh, thành phố" name="pwd">
                </div>
              </div>
              <div class="form-group required">
                <label class="control-label col-sm-3" for="pwd">Nhập mật khẩu:</label>
                <div class="col-sm-8">          
                  <input type="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu" name="pwd">
                </div>
              </div>
              <div class="form-group required">
                <label class="control-label col-sm-3" for="pwd">Xác nhận mật khẩu:</label>
                <div class="col-sm-8">          
                  <input type="password" class="form-control" id="pwd" placeholder="Xác nhận mật khẩu" name="pwd">
                </div>
              </div>
              <div class="form-group required">
                <label class="control-label col-sm-3" for="pwd">Nhập email:</label>
                <div class="col-sm-8">          
                  <input type="password" class="form-control" id="pwd" placeholder="Nhập email" name="pwd">
                </div>
              </div>
              <div class="form-group required">
                <label class="control-label col-sm-3" for="pwd">Số điện thoại chính:</label>
                <div class="col-sm-8">          
                  <input type="password" class="form-control" id="pwd" placeholder="Nhập số điện thoại" name="pwd">
                </div>
              </div>
              <div class="form-group required">
                <label class="control-label col-sm-3" for="pwd">Số điện thoại phụ:</label>
                <div class="col-sm-8">          
                  <input type="password" class="form-control" id="pwd" placeholder="Số điện thoại phụ" name="pwd">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3" for="pwd">Công ty bạn đã có domain hay hosting chưa?</label>
                <div class="col-sm-8">          
                  <label class="radio-inline">
                      <input type="radio" name="optradio"> Đã có
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="optradio"> Chưa có
                    </label>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3" for="pwd">Công ty bạn có muốn tạo domain mới không?:</label>
                <div class="col-sm-8">   
                  <label class="radio-inline">
                    <input type="radio" name="optradio"> Có
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="optradio">Không
                  </label>
                </div>
              </div>
              <div class="form-group required">
                <label class="control-label col-sm-3" for="code-secure"> Nhập mã bảo vệ</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="code-secure" name="">
                  <span class="p-code"><i> XYZD</i></span>
                </div>
              </div>
            <div class="form-group">        
              <div class="col-sm-offset-3 col-sm-8">
                <button type="submit" class="btn">Đăng ký</button>
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