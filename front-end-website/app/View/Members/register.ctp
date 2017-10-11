  <div class="form-register">
    <h3>Nhập thông tin khách hàng</h3>
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#person">Cá Nhân</a></li>
      <li><a data-toggle="tab" href="#company">Tổ Chức</a></li>
    </ul>

    <div class="tab-content">
      <p>Quý khách vui lòng điền đầy đủ thông tin Tiếng Việt có dấu</p>
      <div id="person" class="tab-pane fade in active">
        <form class="form-horizontal" action="/action_page.php">
          <div class="form-group required">
            <label class="control-label col-sm-3" for="email">Nhập tên đăng nhập:</label>
            <div class="col-sm-8">
              <input type="email" class="form-control" id="email" placeholder="Nhập tên đăng nhập" name="email" required="required">
            </div>
          </div>
          <div class="form-group required">
            <label class="control-label col-sm-3" for="pwd">Nhập họ tên:</label>
            <div class="col-sm-8">          
              <input type="password" class="form-control" id="pwd" placeholder="Nhập họ tên" name="pwd">
            </div>
          </div>
          <div class="form-group required">
            <label class="control-label col-sm-3" for="pwd">Nhập email:</label>
            <div class="col-sm-8">          
              <input type="password" class="form-control" id="pwd" placeholder="Nhập email" name="pwd">
            </div>
          </div>
          <div class="form-group required">
            <label class="control-label col-sm-3" for="pwd">Số CMTND:</label>
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
            <label class="control-label col-sm-3" for="pwd">Giới tính:</label>
            <div class="col-sm-8">          
              <input type="password" class="form-control" id="pwd" placeholder="Giới tính" name="pwd">
            </div>
          </div>
          <div class="form-group required">
            <label class="control-label col-sm-3" for="pwd">Số điện thoại:</label>
            <div class="col-sm-8">          
              <input type="password" class="form-control" id="pwd" placeholder="Nhập số điện thoại" name="pwd">
            </div>
          </div>
          <div class="form-group required">
            <label class="control-label col-sm-3" for="pwd">Địa chỉ liên hệ:</label>
            <div class="col-sm-8">          
              <input type="password" class="form-control" id="pwd" placeholder="Nhập địa chỉ liên hệ" name="pwd">
            </div>
          </div>
          <div class="form-group required">
            <label class="control-label col-sm-3" for="pwd">Ngày tháng năm sinh:</label>
            <div class="col-sm-8">          
              <input type="password" class="form-control" id="pwd" placeholder="Nhập ngày tháng năm sinh" name="pwd">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" for="pwd">Bạn đã có domain hay hosting chưa?</label>
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
            <label class="control-label col-sm-3" for="pwd">Bạn có muốn tạo domain mới không?:</label>
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
              <span class="p-code"><i> ABCDEF </i></span>
            </div>
          </div>
          <div class="row">
            <div class="form-group">        
              <div class="col-sm-offset-3 col-sm-8">
                <input type="button" class="btn-back" value="Quay lại">
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
