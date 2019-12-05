<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_movie_trailer.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<div id="site-content">
    <?php
    include('header.php');
    ?>
    <main class="main-content">
        <div class="container">
                <div class="tab">
                    <button class="tablinks" onclick="openMovie(event, 'playing')"id="defaultOpen">Phim đang chiếu</button>
                    <button class="tablinks" onclick="openMovie(event, 'coming')">Phim sắp chiếu</button>
                </div>

                <div id="playing" class="tabcontent">
                    <div class="movie-container">
                        <div class="movie">
                        <?php
                            $qry = mysqli_query($con,"SELECT * FROM `movie` WHERE `status` = '0' ");

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
                </div><!--playing-->

                <div id="coming" class="tabcontent">
                    <div class="movie-container">
                        <div class="movie">
                        <?php
                            $qry1 = mysqli_query($con,"SELECT * FROM `news` ");
                            while($m1=mysqli_fetch_assoc($qry1)){
                        ?>
                            <div class="card" style="width: 25rem">
                                <a href="about_news.php?id=<?php echo $m1['news_id'];?> "><img src="<?=$m1['image']?>" class="card-img-top" alt="Hình" style="width:200px "></a>
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

                               
    <script src="js/tab.js"> </script>

        </div> <!-- .container -->
    </main>
    <?php
    include('footer.php');
    ?>
</div>
</body>
</html>
