<?php
session_start();
include('config.php');
mysqli_query($con,"DELETE FROM bookings WHERE book_id='".$_GET['id']."'");
?>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<table align='center'>
		<tr><td><STRONG>Quá trình đang thực hiện</STRONG></td></tr>
		<tr><td><font color='blue'>Vui lòng đợi<i class="fa fa-spinner fa-pulse fa-fw"></i>
		<span class="sr-only"></font></td></tr><tr><td>(Không bấm Refresh hoặc Back tránh lỗi khi cập nhật)</td></tr>
	</table><h2>
<?php
	$_SESSION['success']="Hủy thành công";
?>
<script>
    setTimeout(function(){ window.location="profile_bookings.php"; }, 1000);
</script>