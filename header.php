<?php
include('config.php');
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
	<link rel="shortcut icon" href="images/favicon.png">
	<title>Cinema Center CGV: Wellcome</title>

	<!-- Loading third party fonts -->
	<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
	<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!-- Add icon library -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/dropbtn.css">
	<link rel="stylesheet" type="text/css" href="css/icon.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
		
</head>

<body>
	<header class="site-header">
		<div class="container">
			<a href="index.php" id="branding">
				<img src="images/logo.png" alt="" class="logo">
					<div class="logo-copy">
						<h1 class="site-title">Cinema Center CGV</h1>
						<small class="site-description">Happy with family</small>
					</div>
			</a>

			<div class="main-navigation">
				<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
				<ul class="menu">
					<li class="menu-item"><a href="index.php"><i class="fa fa-fw fa-home"></i>Trang chủ</a></li>
					<li class="menu-item"><a href="theaters.php"><i class="material-icons">&#xe8da;</i>Rạp</a></li>
					<li class="menu-item"><a href="movie.php"><i class="fa fa-fw fa-film"></i>Phim</a></li>
					<li class="menu-item">
						<?php 
       						if (isset($_SESSION['username'])){
           						$us=mysqli_query($con,"SELECT name FROM register WHERE user_id ='".$_SESSION['username']."'");
        						$user=mysqli_fetch_array($us);
								?>
								<div class="dropdown">
									<button class="dropbtn">
										<?php echo 'Xin chào '. $user['name'];?>
										<i class="fa fa-caret-down"></i>
									</button>
									<div class="dropdown-content">
										<a href="user_info.php"><i class="fa fa-fw fa-user"></i>Thông tin tài khoản</a>
										<br>
										<br>
									    <a href="profile_bookings.php"><i class="fa fa-fw fa-ticket"></i>Thông tin vé đã đặt</a>
									    <br>
									    <br>
									    <a href="change_pass.php"><i class="fa fa-fw fa-key"></i>Đổi mật khẩu</a>
									    <br>
									    <br>
									</div>
								</div>
								<a href="logout.php">Thoát</a>
						<?php 
							}else{
								?>
									<a href="login.php"><i class="fa fa-fw fa-sign-in"></i>Đăng nhập</a>
								<?php 
							}
       					?>
        			</li>
        			<li class="menu-item" >
        				<form action="search.php" method="get">
  							<input type="text" name="search" placeholder="Tìm kiếm">
  							<button type="submit" name="btnSearch" class="btn btn-primary"><i class="fa fa-search"></i></button>
						</form>
        			</li>
				</ul> <!-- .menu -->
			</div> <!-- .main-navigation -->

			<div class="mobile-navigation"></div>
		</div>
	</header>
</body>