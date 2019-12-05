<?php
    include('header.php');
    $c=mysqli_query($con,"SELECT * FROM cinema WHERE cinema_id='".$_SESSION['cinema']."'");
    $cinema=mysqli_fetch_array($c);
    $sr=mysqli_query($con,"SELECT * FROM screens WHERE cinema_id='".$cinema['cinema_id']."'");
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
            <form action="process_add_screen.php" method="post">
              <div class="form-group has-feedback">
                <input name="name" type="text" size="25" placeholder="Tên phòng chiếu" class="form-control" />
              </div>

              <div class="form-group has-feedback">
                <input name="seat" type="number" size="25" placeholder="Số chỗ ngồi" class="form-control" />
              </div>

              <div class="form-group has-feedback">
                <input name="charge" type="number" size="25" placeholder="Giá" class="form-control" />
              </div>
              
              <div class="form-group has-feedback">
                <select name="st" class="form-control">
                  <option value="0">Chọn suất chiếu</option>
                    <option>Sáng</option>
                    <option>Trưa</option>
                    <option>Chiều</option>
                    <option>Tối</option>
                    <option>Khác</option>
                </select>
              </div>
              
              <div class="form-group has-feedback">
                <input name="stime" type="time" size="25" placeholder="Giờ chiếu" class="form-control" />
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