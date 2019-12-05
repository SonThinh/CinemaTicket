<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
session_start();
if(!isset($_SESSION['username']))
{
	header('location:login.php');
}
include('config.php');
extract($_POST);
	
	switch ($_SESSION['seats']) {
		case '1':
                start:
                $ticket=rand_string(1).rand(1,999);
				$seat=rand_string(1).rand(1,10);
                $s=mysqli_query($con,"SELECT * FROM booking WHERE seat='$seat'");
                if(mysqli_num_rows($s))
                {
                  goto start;
                }
				mysqli_query($con,"INSERT INTO bookings VALUES(NULL,'$ticket','$seat','".$_SESSION['cinema']."','".$_SESSION['username']."','".$_SESSION['show']."','".$_SESSION['screen']."',1,'".$_SESSION['amount']."','".$_SESSION['date']."',CURDATE(),'1')");
			break;
		case '2':
			$amount=$_SESSION['amount']/2;
			for ($i=1; $i <= 2; $i++) {
				start2:
                $ticket=rand_string(1).rand(1,999);
				$seat="G".rand(1,10);
                $s1=mysqli_query($con,"SELECT * FROM booking WHERE seat='$seat'");
                if(mysqli_num_rows($s1))
                {
                  goto start2;
                }
				mysqli_query($con,"INSERT INTO bookings VALUES(NULL,'$ticket','$seat','".$_SESSION['cinema']."','".$_SESSION['username']."','".$_SESSION['show']."','".$_SESSION['screen']."',1,'".$amount."','".$_SESSION['date']."',CURDATE(),'1')");
			}
			break;
		default:
			if($_SESSION['seats']>'2'){
				for ($i=1; $i <= $_SESSION['seats']; $i++) {
					start3:
	                $ticket=rand_string(1).rand(1,20);   
					$seat="H".rand(1,10);
	                $s2=mysqli_query($con,"SELECT * FROM booking WHERE seat='$seat'");
	                if(mysqli_num_rows($s2))
	                {
	                  goto start3;
	                }
					$amount=$_SESSION['amount']/$_SESSION['seats'];
					mysqli_query($con,"INSERT INTO bookings VALUES(NULL,'$ticket','$seat','".$_SESSION['cinema']."','".$_SESSION['username']."','".$_SESSION['show']."','".$_SESSION['screen']."',1,'".$amount."','".$_SESSION['date']."',CURDATE(),'1')");
				}
			}
			break;
	}
	
?>
<body><table align='center'><tr><td><STRONG>Quá trình đang thực hiện</STRONG></td></tr><tr><td><font color='blue'>Vui lòng đợi <i class="fa fa-spinner fa-pulse fa-fw"></i>
<span class="sr-only"></font></td></tr><tr><td>(Không bấm Refresh hoặc Back tránh lỗi khi cập nhật)</td></tr></table><h2>
<script>
    setTimeout(function(){ window.location="profile_bookings.php"; },200);
</script>
<?php
	function rand_string( $length ) {
		$chars = "ABCDEF";
		$size = strlen( $chars );
		$str ="";
		for( $i = 0; $i < $length; $i++ ) {
			$str .= $chars[ rand( 0, $size - 1 ) ];
 		}
		return $str;
	}

?>