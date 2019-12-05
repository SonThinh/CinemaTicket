<?php include('header.php');?>

<div class="main-content">
	<div class="container">
		<div class="page">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="panel panel-default">
				  		<div class="panel-heading"> Đăng ký </div>
				  		<div class="panel-body">
				  			<p class="login-box-msg">Vui lòng điền đầy đủ thông tin</p>
							<form action="process_register.php" method="post">
								<div class="form-group has-feedback">
									<span class="fa fa-user icon"></span> 
        							<input name="Name" type="text" size="25" placeholder="Tên" class="form-control" />
      							</div>

      							<div class="form-group has-feedback">
      								<span class="fa fa-envelope icon"></span> 
        							<input name="Email" type="text" size="25" placeholder="Email" class="form-control" />
      							</div>

      							<div class="form-group has-feedback">
      								<span class="fa fa-phone icon"></span> 
        							<input name="Phone" type="text" size="25" placeholder="Số điện thoại" class="form-control" />
      							</div>

      							<div class="form-group has-feedback">
      								<span class="fa fa-transgender icon"></span> 
        							<input name="Gender" type="text" size="25" placeholder="Giới tính" class="form-control" />
      							</div>

      							<div class="form-group has-feedback">
      								<span class="fa fa-birthday-cake"></span> 
        							<input name="Year" type="text" size="25" placeholder="Năm Sinh" class="form-control" />
      							</div>

      							<div class="form-group has-feedback">
      								<span class="fa fa-key icon"></span> 
        							<input name="Pass" type="password" size="25" placeholder="Mật khẩu" class="form-control" />
      							</div>

      							<div class="form-group has-feedback">
      								<span class="fa fa-key icon"></span> 
        							<input name="Pass2" type="password" size="25" placeholder="Xác nhận mật khẩu" class="form-control" />
      							</div>

      							<div class="form-group">
          							<button name="btnSubmit" type="submit" class="btn btn-primary" >Đăng ký</button>

          							<p class="login-box-msg" style="padding-top:20px">Đã có tài khoản<a href="login.php">Đăng nhập</a></p>
      							</div>
      			 </form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php');?>

