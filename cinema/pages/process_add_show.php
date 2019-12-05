<?php
    session_start();
    include('../../config.php');
    extract($_POST);
    $c=mysqli_query($con,"SELECT * FROM cinema where cinema_id='".$_SESSION['cinema']."'");
    $cinema=mysqli_fetch_array($c);
    mysqli_query($con,"INSERT INTO  shows VALUES(NULL,'$stime','".$cinema['cinema_id']."','$movie','$sdate','1','1')");
    $_SESSION['success']="";
    header('location:add_show.php');
    ?>
    