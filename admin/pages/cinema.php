<?php
  include('header.php');
?>
<style type="text/css">
  .table{
    padding-left: 100px;
  }

  th{
    padding-right: 100px;
    text-align: center;
  }
  td{
    padding-right: 50px;
  }
</style>

<link rel="stylesheet" type="text/css" href="../css/style_index.css">
<div class="content-wrapper">
  <section class="content">
    <div class="box">
      <div class="box box-primary">
        <div class="box-body">
          <?php include('../../msgbox.php');?>
          <ul class="todo-list">
            <h2 style="text-align: center;">
              Quản lý rạp
            </h2>
            <div style="padding-left: 520px">
              <a class="btn btn-primary" href="add_cinema.php" style="color: white"><span>Thêm rạp mới</span></a>
          </div>
            <table class="table">
              <thead >
                <th>Tên rạp</th>
                <th>Địa chỉ</th>
                <th>Tỉnh/Thành</th>
              </thead>
              <tbody>
              <?php 
                $qry=mysqli_query($con,"SELECT * FROM cinema ");
                if(mysqli_num_rows($qry)){
                  while($cinema=mysqli_fetch_array($qry)){
              ?>
              <li>
                <tr>
                  <td>
                    <span class="text"><?php echo $cinema['cinema_name'];?></span>
                  </td>
                  <td>
                    <span class="text"><?php echo $cinema['address'];?></span>
                  </td>
                  <td>
                    <span class="text"><?php echo $cinema['city'];?></span>
                  </td>
                </tr> 
              </li>
              <?php
                  }
                }
              ?>
              </tbody>
            </table>
          </ul>
        </div>
      </div>
  </section>
</div>

<?php
include('footer.php');
?>
