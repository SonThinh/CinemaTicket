<?php
  include('header.php');
  $c=mysqli_query($con,"SELECT * FROM cinema where cinema_id='".$_SESSION['cinema']."'");
  $cinema=mysqli_fetch_array($c);
  $sc=mysqli_query($con,"SELECT * FROM screens WHERE cinema_id='".$_SESSION['cinema']."'");
  $screen=mysqli_fetch_array($sc);
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
            <form action="process_add_show.php" method="post">
              <?php include('../../msgbox.php');?>
              <div class="form-group has-feedback">
                <select name="screen" class="form-control">
                  <option value>Chọn phòng chiếu</option>
                  <?php
                    $sc=mysqli_query($con,"SELECT * FROM screens WHERE cinema_id='".$_SESSION['cinema']."'");
                    while($screen=mysqli_fetch_array($sc))
                    {
                      ?>
                      <option value="<?php echo $screen['screen_id']; ?>"><?php echo $screen['screen_name']; ?></option>
                      <?php
                    }
                  ?>
                </select>
              </div>

              <div class="form-group has-feedback">
                <select name="stime" class="form-control">
                  <option value>Chọn suất chiếu</option>
                  <?php
                    $st=mysqli_query($con,"SELECT * FROM show_time");
                    while($showtime=mysqli_fetch_array($st))
                    {
                      ?>
                      <option value="<?php echo $showtime['st_id'];?>"><?php echo $showtime['name']; ?></option>
                      <?php
                    }
                  ?>
                </select>
              </div>

              <div class="form-group has-feedback">
                <select name="movie" class="form-control">
                  <option value>Chọn phim</option>
                  <?php
                    $m=mysqli_query($con,"SELECT * FROM movie WHERE status='1'");
                    while($mv=mysqli_fetch_array($m))
                    {
                      ?>
                      <option value="<?php echo $mv['movie_id'];?>"><?php echo $mv['movie_name']; ?></option>
                      <?php
                    }
                  ?>
                </select>
              </div>
              <div class="form-group has-feedback">
                <input type="date" name="sdate" class="form-control"/>
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