<?php
session_start();
if(!isset($_SESSION['cinema']))
{
  header('location:../index.php');
}
date_default_timezone_set('Asia/Ho_Chi_Minh');
include('../../config.php');
$c=mysqli_query($con,"SELECT * FROM cinema WHERE cinema_id='".$_SESSION['cinema']."'");
$cinema=mysqli_fetch_array($c);
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<div id="mySidebar" class="sidebar">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
	  <a href="index.php"><img src="../../admin/images/admin.png">
	  	<?php echo $cinema['cinema_name'];?>
	  </a>
	  <a href="add_screen.php">Thêm phòng chiếu</a>
	  <a href="add_movie.php">Thêm phim</a>
	  <a href="add_show.php">Thêm suất chiếu</a>
	  <a href="shows_today.php">Suất chiếu hôm nay</a>
	  <a href="view_shows.php">Xem suất chiếu </a>
	  <a href="details.php">Thông tin về rạp</a>
	</div>

	<div id="main" class="topnav">
	  <button class="openbtn" onclick="openNav()">☰ Menu</button>
	  <div class="topnav-right">
	    <a href="logout.php">Thoát</a>
	  </div> 
	</div>

<script src="../js/nav.js"></script>
</body>
</html>