<?php
include('header.php');

?>
<link rel="stylesheet" type="text/css" href="../css/style_index.css">
<style type="text/css">
  table,tr,th,td{
    text-align: center;
    padding-right: 50px;
  }
  th,td{
    padding-right: 150px;
  }
</style>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Todays Shows
      </h1>
    </section>
    <section class="content">
      <div class="box">
         <div class="box-header with-border">
              <h3 class="box-title">Suất chiếu sẵn có</h3>
          </div>
        <div class="box-body">
          <?php include('../../msgbox.php');?>
          <?php
          $sw=mysqli_query($con,"SELECT * FROM shows WHERE st_id IN(SELECT st_id FROM show_time WHERE screen_id IN(SELECT screen_id FROM  screens WHERE cinema_id='".$_SESSION['cinema']."')) and status='1'");
          if(mysqli_num_rows($sw))
          {?>
            <table class="table">
              <th class="col-md-1">
                STT
              </th>
              <th class="col-md-2">
                Phòng chiếu
              </th>
              <th class="col-md-3">
                Suất chiếu
              </th>
              <th class="col-md-3">
                Phim
              </th>
              <?php
              $sl=1;
              while($shows=mysqli_fetch_array($sw))
              {
                ?>
                <tr>
                  <td>
                    <?php echo $sl; $sl++;?>
                  </td>
                  <?php
                  $st=mysqli_query($con,"SELECT * FROM show_time WHERE st_id='".$shows['st_id']."'");
                  $show_time=mysqli_fetch_array($st);
                  $sr=mysqli_query($con,"SELECT * FROM screens WHERE screen_id='".$show_time['screen_id']."'");
                  $screen=mysqli_fetch_array($sr);
                  $mv=mysqli_query($con,"SELECT * FROM movie WHERE movie_id='".$shows['movie_id']."'");
                  $movie=mysqli_fetch_array($mv);
                  ?>
                  <td>
                    <?php echo $screen['screen_name'];?>
                  </td>
                  <td>
                    <?php echo date('h:i A',strtotime($show_time['start_time']))." ( ".$show_time['name']." Show )";?>
                  </td>
                  <td>
                    <?php echo $movie['movie_name'];?>
                  </td>
                  <td>
                    <?php if($shows['r_status']==1)
                    {
                    ?><a href="change_running.php?id=<?php echo $shows['s_id'];?>&status=0"><button class="btn btn-danger">Stop Running</button></a>
                    <?php
                    }
                    else
                    {?><a href="change_running.php?id=<?php echo $shows['s_id'];?>&status=1"><button class="btn btn-success">Start Running</button></a>
                    <?php 
                    }?>
                    <a href="stop_running.php?id=<?php echo $shows['s_id'];?>"><button class="btn btn-warning">Stop Show</button></a>
                  </td>
                </tr>
                <?php
              }
              ?>
            </table>
            <?php
          }
          else
          {
            ?>
            <h3>Trống</h3>
            <?php
          }
          ?>
        </div> 
      </div>

    </section>
  </div>
  <?php
include('footer.php');
?>