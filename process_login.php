<?php
session_start();
if(isset($_POST['btnLogin'])) {
    include('config.php');

    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = mysqli_query($con,"SELECT * FROM login WHERE username='$username' and password='$password'");

    if(mysqli_num_rows($query) == 0){

        $_SESSION['error']="Tài khoản hoặc mật khẩu không chính xác";
        header("location:login.php");
        
    }else{
        $user=mysqli_fetch_array($query);
    
        if($user['user_type'] == 2){
            $_SESSION['username'] = $user['user_id'];
            if(isset($_SESSION['show'])){
                header('location:index.php');
            }else{
                echo "Đăng nhập thành công."
                ?>
                <script>
                    setTimeout(function(){ window.location="user_info.php"; },700);
                </script>
                <?php
            }
        }else{
            $_SESSION['error']="Tài khoản hoặc mật khẩu không chính xác";
            header("location:login.php");
        }
    }
}
?>