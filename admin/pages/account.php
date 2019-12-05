<?php
  include('header.php');
?>
<style type="text/css">
  .table1{
    padding-left: 200px;
  }
  .table2{
    padding-left: 400px;
  }

  th{
    padding-right: 100px;

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
              Quản lý người dùng
            </h2>
            <table class="table1">
              <thead >
                <th>Tên</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Year</th>
                <th>Gender</th>
              </thead>
              <tbody>
              <?php 
                $qry=mysqli_query($con,"SELECT * FROM register WHERE user_id > 1");
                if(mysqli_num_rows($qry)){
                  while($r=mysqli_fetch_array($qry)){
              ?>
              <li>
                <tr>
                  <td>
                    <span class="text"><?php echo $r['name'];?></span>
                  </td>
                  <td>
                    <span class="text"><?php echo $r['email'];?></span>
                  </td>
                  <td>
                    <span class="text"><?php echo $r['phone'];?></span>
                  </td>
                  <td>
                    <span class="text"><?php echo $r['year'];?></span>
                  </td>
                  <td>
                    <span class="text"><?php echo $r['gender'];?></span>
                  </td>
                  <td>
                     <button class="fa fa-trash-o" onclick="del(<?php echo $r['user_id'];?>)"></button>
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


      <div class="box box-primary">
        <div class="box-body">
          <?php include('../../msgbox.php');?>
          <ul class="todo-list">
            <h2 style="text-align: center;">
              Quản lý tài khoản các rạp
            </h2>
            <table class="table2">
              <thead>
                <th>Tài khoản</th>
                <th>Mật khẩu</th>
              </thead>
              <tbody>
              <?php 
                $qry=mysqli_query($con,"SELECT * FROM login WHERE user_type = 1");
                if(mysqli_num_rows($qry)){
                  while($l=mysqli_fetch_array($qry)){
              ?>
              <li>
                <tr>
                  <td>
                    <span class="text"><?php echo $l['username'];?></span>
                  </td>
                  <td>
                    <span class="text"><?php echo $l['password'];?></span>
                  </td>
                  <td>
                     <button class="fa fa-trash-o" onclick="del(<?php echo $l['id'];?>)"></button>
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
<script>
function del(u)
    {
        if (confirm("Bạn có muốn xóa người dùng này?") == true) 
        {
            window.location="process_del_user.php?id="+u;
        } 
    }
function del(l)
    {
        if (confirm("Bạn có muốn xóa tài khoản này?") == true) 
        {
            window.location="process_del_user.php?id="+l;
        } 
    }
</script>
