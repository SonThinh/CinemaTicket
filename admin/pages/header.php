<?php
session_start();
if(!isset($_SESSION['admin']))
{
  header('location:../index.php');
}
date_default_timezone_set('Asia/Ho_Chi_Minh');
include('../../config.php');
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
	  <a href="index.php"><img src="../images/admin.png"></a>
	  <a href="account.php">Quản lý tài khoản</a>
	  <a href="add_movie.php">Thêm phim sắp chiếu</a>
	  <a href="cinema.php">Quản lý rạp</a>
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