<?php include('header.php');?>
<main class="main-content">
	<div class="container">
		<div class="page">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="panel panel-default">
				  		<div class="panel-heading">Đăng nhập</div>
				  		<div class="panel-body">
				  			<?php include('msgbox.php');?>
				  			<p class="login-box-msg">Vui lòng nhập tài khoản và mật khẩu</p>
							<form action="process_login.php" method="post">
      							<div class="form-group has-feedback">
      								<span class="fa fa-user icon"></span> 
        							<input name="username" type="text" size="25" placeholder="Tài khoản" class="form-control"/>
      							</div>

      							<div class="form-group has-feedback">
      								<span class="fa fa-key icon "></span> 
        							<input name="password" type="password" size="25" placeholder="Mật khẩu" class="form-control"/>

      							</div>

      							<div class="form-group">
          							<button name="btnLogin" type="submit" class="btn btn-primary">Đăng nhập</button>

          							<p class="login-box-msg" style="padding-top:20px">Chưa có tài khoản?<a href="register.php">Đăng ký ngay</a></p>
      							</div>
      				   		</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php include('footer.php');?>