<?php
	session_start();
    include('../../config.php'); 
    extract($_POST);
    $c=mysqli_query($con,"SELECT * FROM cinema where cinema_id='".$_SESSION['cinema']."'");
  	$cinema=mysqli_fetch_array($c);
	mysqli_query($con,"INSERT INTO screens VALUES(NULL,'".$cinema['cinema_id']."','$name','$seat','$charge')");

	$s=mysqli_query($con,"SELECT screen_id FROM screens where screen_name = '$name'");
  	$sc=mysqli_fetch_array($s);
	mysqli_query($con,"INSERT INTO show_time VALUES(NULL,'".$sc['screen_id']."','$st','$stime')");
	$_SESSION['success']="";
    header('location:add_screen.php');
?>