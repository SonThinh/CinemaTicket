<?php
session_start();
include('../../config.php');

$id=$_GET['id'];
mysqli_query($con,"DELETE  FROM register WHERE user_id='$id'");
mysqli_query($con,"DELETE  FROM login WHERE user_id='$id'");
$_SESSION['success']="";
header("location:account.php");
?>