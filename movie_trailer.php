<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style_movie_trailer.css">
</head>
<body>

<div class="tab">
  <button class="tablinks" onclick="openMovie(event, 'playing')"id="defaultOpen">Phim đang chiếu</button>
  <button class="tablinks" onclick="openMovie(event, 'coming')">Phim sắp chiếu</button>
</div>

<div id="playing" class="tabcontent">
  <div class="movie-container">
    <div class="movie">
      <?php
        $qry = mysqli_query($con,"SELECT * FROM `movie` WHERE `status` = '0' limit 4");
        while($m=mysqli_fetch_assoc($qry)){
      ?>
          <div class="card" style="width: 25rem">
            <a href="about.php?id=<?php echo $m['movie_id'];?>"><img src="<?=$m['image']?>" class="card-img-top" alt="Hình" style="width:200px "></a>
            <div class="card-body">
              <div class="card-title">
                <a href="about.php?id=<?php echo $m['movie_id'];?>"><?php echo $m['movie_name'];?></a>
              </div>
            </div>
          </div>  
      <?php
        }
      ?>
    </div>
  </div>
</div>

<div id="coming" class="tabcontent">
  <div class="movie-container">
    <div class="movie">
        <?php
        $qry1 = mysqli_query($con,"SELECT * FROM `news` limit 4");
        while($m1=mysqli_fetch_assoc($qry1)){
      ?>
          <div class="card" style="width: 25rem">
            <a href="about_news.php?id=<?php echo $m1['news_id'];?>"><img src="<?=$m1['image']?>" class="card-img-top" alt="Hình" style="width:200px "></a>
            <div class="card-body">
              <div class="card-title">
                <a href="about_news.php?id=<?php echo $m1['news_id'];?>"><?php echo $m1['movie_name'];?></a>
              </div>
            </div>
          </div>  
      <?php
        }
      ?>
      </div>
  </div>
</div>

<div class="button_continue" >
  <a title="Xem tiếp" class="btn btn-primary" href="movie.php"><span>Xem tiếp</span></a>
</div>

 <script src="js/tab.js"> </script>
   
</body>
</html> 