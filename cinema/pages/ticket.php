<?php
include('header.php');
?>
<link rel="stylesheet" href="../../validation/dist/css/bootstrapValidator.css"/>
    
<script type="text/javascript" src="../../validation/dist/js/bootstrapValidator.js"></script>
    <section class="content-header">
      <h1>
        Todays Bookings
      </h1>
    </section>
    <section class="content">
      <div class="box">
        <div class="box-body">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="form-group col-md-6">
                <label class="control-label">Select Screen</label>
                <select class="form-control" id="screen">
                  <option value="0">Select Screen</option>
                  <?php
                  $q=mysqli_query($con,"select  * from screens where t_id='".$_SESSION['cinema']."'");
                  while($c=mysqli_fetch_array($q))
                  {
                    ?>
                    <option value="<?php echo $c['screen_id'];?>"><?php echo $c['screen_name'];?></option>
                    <?php
                  }
                  ?>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label class="control-label">Select Show</label>
                <select class="form-control" id="show">
                  <option value="0">Select Screen</option>
                  
                </select>
              </div>
              
            </div>
          </div>
                  </div> 

      </div>

    </section>

  </div>
  <?php
include('footer.php');
?>