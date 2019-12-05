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
          <table>
            <tr>
              <th>Số thứ tự</th>
              <th>Phòng chiếu</th>
              <th>Suất chiếu</th>
              <th>Phim</th>
            </tr>
            <?php 
              $qry1=mysqli_query($con,"SELECT * FROM shows WHERE r_status=1 AND cinema_id='".$_SESSION['cinema']."'");
              $no=1;
              while($mn=mysqli_fetch_array($qry1))
              {
               $qry2=mysqli_query($con,"SELECT * FROM movie WHERE movie_id='".$mn['movie_id']."'");
               $mov=mysqli_fetch_array($qry2);
               $qry3=mysqli_query($con,"SELECT * FROM show_time WHERE st_id='".$mn['st_id']."'");
               $scr=mysqli_fetch_array($qry3);
               $qry4=mysqli_query($con,"SELECT * FROM screens WHERE screen_id='".$scr['screen_id']."'");
               $scn=mysqli_fetch_array($qry4);
            ?>
            <tr>
              <td><?php echo $no;?></td>
              <td><span class="badge bg-green"><?php echo $scn['screen_name'];?></span></td>
              <td><span class="badge bg-light-blue"><?php echo $scr['start_time'];?>(<?php echo $scr['name'];?>)</span></td>
              <td><?php echo $mov['movie_name'];?></td>
            </tr>
            <?php
              $no=$no+1;
              
              } 
            ?>
          </table>
        </div>
      </div> 
    </div>
  </section>
</div>

<?php
include('footer.php');
?>
