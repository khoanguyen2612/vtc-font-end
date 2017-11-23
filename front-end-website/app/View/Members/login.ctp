	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6 col-xs-offset-3 col-sm-offset-3 text-center">
								<h3><b>Đăng nhập</b></h3> 

							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="" method="POST" role="form" style="display: block;">
									<?php echo $this->Session->flash();?> 
									<div class="form-group">
										<input type="text" name="data[Account][nickname]" tabindex="1" class="form-control" placeholder="Tên đăng nhập" value="" required>
									</div>
									<div class="form-group">
										<input type="password" name="data[Account][login_password]" tabindex="2" class="form-control" placeholder="Mật khẩu" required>
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" name="remember" id="remember">
										<label for="remember"> Nhớ mật khẩu</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-xs-6 col-xs-offset-3 col-sm-offset-3">
												<!-- <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn-login" value="Đăng nhập"> -->
												<button type="submit"  tabindex="4" class="form-control btn-login" class="btn">Đăng nhập</button>
											</div>
										</div>
									</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="<?php echo $this->Html->url(array( 'controller' => 'members', 'action' => 'forgetpass' ), true); ?>"> Quên mật khẩu? </a>
								          |
													<a href="<?php echo $this->Html->url(array( 'controller' => 'members', 'action' => 'register' ), true); ?>"> Bạn chưa có tài khoản? </a>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>