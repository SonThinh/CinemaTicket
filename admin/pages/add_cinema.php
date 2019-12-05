<?php
  include('header.php');
?>

<link rel="stylesheet" type="text/css" href="../css/style_index.css">
<link rel="stylesheet" type="text/css" href="../css/add_movie.css">
<div class="content-wrapper">


  <section class="content">
    <div class="box">
      <h1 style="text-align: center;">
              Thêm rạp mới
      </h1>
      
        <div class="box box-primary">
          <div class="box-body">
            <?php include('../../msgbox.php');?>
            <form action="process_add_cinema.php" method="post">
              <div class="form-group has-feedback">
                <input name="name" type="text" size="25" placeholder="Tên rạp" class="form-control" />
              </div>

              <div class="form-group has-feedback">
                <input name="address" type="text" size="25" placeholder="Địa chỉ" class="form-control" />
              </div>

              <div class="form-group has-feedback">
                <input name="city" type="text" size="25" placeholder="Tỉnh/Thành phố" class="form-control" />
              </div>

              <div class="form-group has-feedback">
                <input name="image" type="text" size="25" placeholder="Đường dẫn ảnh" class="form-control" value=".jpg" />
              </div>

              <?php
                start:
                $username="CGV".rand(1,999);
                $u=mysqli_query($con,"SELECT * FROM login WHERE username='$username'");
                if(mysqli_num_rows($u))
                {
                  goto start;
                }
              ?>

              <div class="form-group has-feedback">
                <input name="username" type="text" size="25" placeholder="Tài khoản" class="form-control" value="<?php echo $username ?>" />
              </div>

              <div class="form-group has-feedback">
                <input name="password" type="text" size="25" placeholder="Mật khẩu" class="form-control" value="<?php echo "123456";?> " />
              </div>

              <div class="form-group">
                <button name="btnAdd" type="submit" class="btn btn-success" >Thêm</button>
              </div>
            </form>
          </div>
        </div> 
    </div>
  </section>
</div>

<?php
include('footer.php');
?>