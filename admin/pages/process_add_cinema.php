<?php
    include('../../config.php');
    extract($_POST);
    mysqli_query($con,"INSERT INTO  cinema VALUES(NULL,'$city','$address','$name','$image')");
    $id=mysqli_insert_id($con);
    mysqli_query($con,"INSERT INTO  login VALUES(NULL,'$id','$username','$password','1')");
    $_SESSION['success']="";
    header('location:add_cinema.php?id='.$id);
?>