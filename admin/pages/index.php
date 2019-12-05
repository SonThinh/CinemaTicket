<?php
  include('header.php');
?>

<link rel="stylesheet" type="text/css" href="../css/style_index.css">
<div class="content-wrapper">
  <section class="content-header">
    <h1 style="text-align: center;">
        Danh sách phim
    </h1>
  </section>

  <section class="content">
    <div class="box">

        <div class="box box-primary">
          <div class="box-body">
            <?php include('../../msgbox.php');?>
            <ul class="todo-list">
                <?php 
                  $qry=mysqli_query($con,"SELECT * FROM movie");
                  if(mysqli_num_rows($qry)){
                    while($m=mysqli_fetch_array($qry)){
                ?>
                <li>
                  <span class="text"><?php echo $m['movie_name'];?></span>
                  <div class="tools">
                    <button class="fa fa-trash-o" onclick="del(<?php echo $m['movie_id'];?>)"></button>
                  </div>
                </li>
                <?php
                    }
                  }
                ?>
            </ul>

        </div>
      </div> 
    </div>
  </section>
</div>

<?php
include('footer.php');
?>
<script>
function del(m)
    {
        if (confirm("Bạn có muốn xóa phim này?") == true) 
        {
            window.location="process_del_movie.php?id="+m;
        } 
    }
    </script>
