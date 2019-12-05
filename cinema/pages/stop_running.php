<?php
session_start();
include('../../config.php');
extract($_GET);
mysqli_query($con,"UPDATE shows SET r_status='$status' WHERE s_id='$id'");
$_SESSION['success']="";
header('location:view_shows.php');
?>