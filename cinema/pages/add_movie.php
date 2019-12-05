<?php
  include('header.php');
  $c=mysqli_query($con,"SELECT * FROM cinema where cinema_id='".$_SESSION['cinema']."'");
  $cinema=mysqli_fetch_array($c);
?>

<link rel="stylesheet" type="text/css" href="../css/style_index.css">
<link rel="stylesheet" type="text/css" href="../css/add_movie.css">
<div class="content-wrapper">


  <section class="content">
    <div class="box">
      <h1 style="text-align: center;">
              <?php echo $cinema['cinema_name'];?>
      </h1>
      
        <div class="box box-primary">
          <div class="box-body">
            <?php include('../../msgbox.php');?>
            <form action="process_add_movie.php" method="post">
              <div class="form-group has-feedback">
                <input name="name" type="text" size="25" placeholder="Tên phim" class="form-control" />
              </div>

              <div class="form-group has-feedback">
                <input name="cast" type="text" size="25" placeholder="Diễn ciên" class="form-control" />
              </div>

              <div class="form-group has-feedback">
                <input name="description" type="text" size="25" placeholder="Mô tả" class="form-control" />
              </div>

              <div class="form-group has-feedback">
                <input name="date" type="date" size="25" placeholder="Khởi chiếu" class="form-control" />
              </div>

              <div class="form-group has-feedback">
                <input name="image" type="text" size="25" placeholder="Đường dẫn ảnh" class="form-control" value=".jpg" />
              </div>

              <div class="form-group has-feedback">
                <input name="video" type="text" size="25" placeholder="Trailer" class="form-control" />
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