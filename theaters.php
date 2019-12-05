    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style_movie_trailer.css">

    <?php
    include('header.php');
    ?>
    <main class="main-content">
        <div class="container">
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'HCM')"id="defaultOpen">Hồ Chí Minh</button>
                    <button class="tablinks" onclick="openCity(event, 'HN')">Hà Nội</button>
                    <button class="tablinks" onclick="openCity(event, 'HP')">Hải Phòng</button>
                    <button class="tablinks" onclick="openCity(event, 'DN')">Đà Nẵng</button>
                </div>

                <div id="HCM" class="tabcontent">
                    <div class="movie-container">
                        <div class="movie">
                        <?php
                            $qry = mysqli_query($con,"SELECT * FROM cinema WHERE city = 'Hồ Chí Minh' ");
                            while($m = mysqli_fetch_assoc($qry) ){
                        ?>
                            <div style="padding: 10px">
                                <a href="about_city.php?id=<?php echo $m['cinema_id'];?>" style="color: black">
                                    <?php echo $m['cinema_name'];?>
                                </a>
                            </div> 
                        <?php
                        }
                        ?>
                        </div>
                    </div>
                </div><!--HCM-->

                <div id="HN" class="tabcontent">
                    <div class="movie-container">
                        <div class="movie">
                        <?php
                            $qry1 = mysqli_query($con,"SELECT * FROM cinema WHERE city = 'Hà Nội' ");
                            while($m1 = mysqli_fetch_assoc($qry1) ){
                        ?>
                            <div style="padding: 10px">
                                <a href="about_city.php?id=<?php echo $m1['cinema_id'];?>" style="color: black">
                                    <?php echo $m1['cinema_name'];?>
                                </a>
                            </div> 
                        <?php
                        }
                        ?>
                        </div>
                    </div>
                </div><!--HCM-->

                <div id="HP" class="tabcontent">
                    <div class="movie-container">
                        <div class="movie">
                        <?php
                            $qry2 = mysqli_query($con,"SELECT * FROM cinema WHERE city = 'Hải Phòng' ");
                            while($m2 = mysqli_fetch_assoc($qry2) ){
                        ?>
                            <div style="padding: 10px">
                                <a href="about_city.php?id=<?php echo $m2['cinema_id'];?>" style="color: black">
                                    <?php echo $m2['cinema_name'];?>
                                </a>
                            </div> 
                        <?php
                        }
                        ?>
                        </div>
                    </div>
                </div><!--HCM-->

                <div id="DN" class="tabcontent">
                    <div class="movie-container">
                        <div class="movie">
                        <?php
                            $qry3 = mysqli_query($con,"SELECT * FROM cinema WHERE city = 'Đà Nẵng' ");
                            while($m3 = mysqli_fetch_assoc($qry3) ){
                        ?>
                            <div style="padding: 10px">
                                <a href="about_city.php?id=<?php echo $m3['cinema_id'];?>" style="color: black">
                                    <?php echo $m3['cinema_name'];?>
                                </a>
                            </div> 
                        <?php
                        }
                        ?>
                        </div>
                    </div>
                </div><!--HCM-->

                               
        <script>
        function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        } 
        document.getElementById("defaultOpen").click();
        </script>
        </div> <!-- .container -->
    </main>
    <?php
    include('footer.php');
    ?>


