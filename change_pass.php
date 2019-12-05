<style>
	table ,tr,td{
		text-align: center;
	}
</style>
<?php include('header.php');
if(!isset($_SESSION['username']))
{
	header('location:login.php');
}
	$rgs = mysqli_query($con,"SELECT * FROM register WHERE user_id='".$_SESSION['username']."'");
	$rg = mysqli_fetch_array($rgs);
	?>
<main class="main-content">
	<div class="container">
		<div class="page">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">	
					<h3 style="text-align: center">Đổi mật khẩu</h3>
					<form action="process_update.php" method="post">
	      				<div class="form-group has-feedback">
	      					<span class="fa fa-key icon "></span> 
	        				<input name="password1" type="password" size="25" placeholder="Mật khẩu mới" class="form-control"/>
	        			</div>

	      				<div class="form-group has-feedback">
	      					<span class="fa fa-key icon "></span> 
	        				<input name="password" type="password" size="25" placeholder="Xác nhận mật khẩu" class="form-control"/>
	        			</div>

	      				<div class="form-group">
	          				<button name="btnChange" type="submit" class="btn btn-primary">Đổi mật khẩu</button>
	      				</div>
	      			</form>
				</div>
			</div>
		</div>
	</div>
</main>
<?php include('footer.php');?>