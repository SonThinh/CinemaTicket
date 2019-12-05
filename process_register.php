<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');
if(isset($_POST['btnSubmit'])){
	include('config.php');

	$name = $_POST["Name"];
    $email = $_POST["Email"];
    $phone = $_POST["Phone"];
    $year = $_POST["Year"];
    $gender = $_POST["Gender"];
    $pass = $_POST["Pass"];
    $pass2 = $_POST["Pass2"];

    if (!$name || !$email || !$phone || !$year || !$gender || !$pass || !$pass2 ){
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

	$query1 = mysqli_query($con,"SELECT `username` FROM `login` WHERE `username`='$name'");
    if (mysqli_num_rows($query1) > 0) {
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

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


    if($pass2 != $pass){
        echo "Vui lòng nhập lại mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    mysqli_query($con,"INSERT INTO  register VALUES(NULL,N'$name','$email','$phone','$year',N'$gender')");
    $id=mysqli_insert_id($con);
    mysqli_query($con,"INSERT INTO  login VALUES(NULL,'$id',N'$name','$pass','2')");
    $_SESSION['username']=$id;
    echo "Đăng ký thành công!"
    ?>
        <script>
            setTimeout(function(){ window.location="login.php"; }, 500);
        </script>
<?php
}
?>