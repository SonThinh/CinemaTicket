<?php
session_start();
if(isset($_POST['btnChange'])){
	include('config.php');

    $email = $_POST["Email"];
    $phone = $_POST["Phone"];
    $year = $_POST["Year"];
    $gender = $_POST["Gender"];

     $query2 = mysqli_query($con,"SELECT `email` FROM `register` WHERE `email`='$email'");
    if (mysqli_num_rows($query2) > 0){
        echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    $query3 = mysqli_query($con,"SELECT `phone` FROM `register` WHERE `phone`='$phone'");
    if (mysqli_num_rows($query3) > 0)
    {
        echo "Số điện thoại này đã có người dùng. Vui lòng chọn số điện thoại khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    if($email != ""){
        $query1 = "UPDATE  register SET email = '$email' WHERE user_id='".$_SESSION['username']."'";
        $e = mysqli_query($con,$query1);
    }
    else if($phone != ""){
        $query2 = "UPDATE  register SET phone = '$phone' WHERE user_id='".$_SESSION['username']."'";
        $p = mysqli_query($con,$query2);
    }
    else if($year != ""){
        $query3 = "UPDATE  register SET year = '$year' WHERE user_id='".$_SESSION['username']."'";
        $y = mysqli_query($con,$query3);
    }
    else if ($gender != "") {
        $query4 = "UPDATE  register SET gender = '$gender' WHERE user_id='".$_SESSION['username']."'";
        $g = mysqli_query($con,$query4);
    }
    else {
        echo 'không có gì để đổi';
    }

    
    
    ?>
        <script>
            setTimeout(function(){ window.location="user_info.php"; }, 500);
        </script>
