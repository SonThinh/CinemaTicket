<?php
  include('header.php');
?>
<style type="text/css">
  table,tr,th,td{
    text-align: center;
    padding-right: 50px;
  }
  th,td{
    padding-right: 150px;
  }
</style>
<link rel="stylesheet" type="text/css" href="../css/style_index.css">
<div class="content-wrapper">
  <section class="content">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title" style="text-align: center;">Phim đang chiếu</h3>
      </div>
      <div class="box box-primary">
        <div class="box-body">
          <?php
            $th=mysqli_query($con,"SELECT * FROM cinema where cinema_id='".$_SESSION['cinema']."'");
            $cinema=mysqli_fetch_array($th);
          ?>
            <table >
                <tr>
                    <td> Tên</td>
                    <td><?php echo $cinema['cinema_name'];?></td>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td><?php echo $cinema['address'];?></td>
                </tr>
                <tr>
                    <td>Tỉnh/Thành</td>
                    <td><?php echo $cinema['city'];?></td>
                </tr>
            </table>
        </div>
      </div> 
    </div>
  </section>
</div>

<?php
include('footer.php');
?>
