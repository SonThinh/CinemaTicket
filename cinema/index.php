<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../admin/css/style_admin.css">
<style type="text/css">
  .admin{
    padding-top: 200px;
    padding-left: 659px;
    font-size: 50px;
  }
</style>
</head>
<body style="background-color: gray;">
<div class="admin">
  <h1>CINEMA</h1>
</div>
<div class="col-md-4 col-md-offset-4" >
          <div class="panel panel-default">
              <div class="panel-heading">Đăng nhập</div>
              <div class="panel-body">
                <?php session_start(); include('../msgbox.php');?>
                <p class="login-box-msg">Vui lòng nhập tài khoản và mật khẩu</p>
              <form action="pages/process_login_cinema.php" method="post">
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
                    </div>
                    </form>
            </div>
          </div>
        </div>
</body>
</html>
