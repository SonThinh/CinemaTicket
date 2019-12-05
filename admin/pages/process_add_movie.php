<?php
    include('../../config.php');
    extract($_POST);
	mysqli_query($con,"INSERT INTO news VALUES(NULL,'$name','$cast','$date','$description','$image','$video')");
	$_SESSION['success']="";
    header('location:add_movie.php');
?>