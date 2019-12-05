<?php
session_start();
if(isset($_POST['btnChange'])){
	include('config.php');

    $pass1 = $_POST["password1"];
    $pass = $_POST["password"];

    if($pass != $pass1){
        echo "Vui lòng nhập lại mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    $query = "UPDATE  login SET password = '$pass1' WHERE user_id='".$_SESSION['username']."'";
    mysqli_query($con,$query);
    
    ?>
        <script>
            setTimeout(function(){ window.location="logout.php"; }, 500);
        </script>
<?php
    echo "Cập nhật thành công!";
}
?>