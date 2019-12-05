<?php
session_start();
include('../../config.php');

$id=$_GET['id'];
mysqli_query($con,"DELETE  FROM movie WHERE movie_id='$id'");
$_SESSION['success']="";
header("location:index.php");
?>