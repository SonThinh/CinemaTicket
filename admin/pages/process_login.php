<?php
session_start();
if(isset($_POST['btnLogin'])) {
    include('../../config.php');

    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = mysqli_query($con,"SELECT * FROM login WHERE username='$username' and password='$password'");

    if(mysqli_num_rows($query) == 0){

        $_SESSION['error']="Tài khoản hoặc mật khẩu không chính xác";
        header("location:../index.php");
        
    }else{
        $user=mysqli_fetch_array($query);
    
        if($user['user_type'] == 0){
            $_SESSION['admin'] = $user['user_id'];
            header('location:index.php');
        }else{
            $_SESSION['error']="Tài khoản hoặc mật khẩu không chính xác";
            header("location:../index.php");
        }
    }
}
?>