<?php
    $host = "127.0.0.1";
    $user = "root";
    $pass = "";
    $db = "db_cinema";
    $port = 3306;
     $con = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
     mysqli_set_charset($con, 'UTF8');
?>