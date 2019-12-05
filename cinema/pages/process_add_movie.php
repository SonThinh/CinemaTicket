<?php
	session_start();
    include('../../config.php'); 
    extract($_POST);
    $c=mysqli_query($con,"SELECT * FROM cinema where cinema_id='".$_SESSION['cinema']."'");
  	$cinema=mysqli_fetch_array($c);
	mysqli_query($con,"INSERT INTO movie VALUES(NULL,'".$cinema['cinema_id']."','$name','$cast','$description','$date','$image','$video','1')");
	$_SESSION['success']="";
    header('location:add_movie.php');
?>