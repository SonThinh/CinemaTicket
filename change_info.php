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
					<h3 style="text-align: center">Cập nhật thông tin cá nhân</h3>
					<form action="process_update_info.php" method="post">
	      				<div class="form-group has-feedback">
      						<span class="fa fa-envelope icon"></span> 
        					<input name="Email" type="text" size="25" placeholder="Email" class="form-control" />
      					</div>

      					<div class="form-group has-feedback">
      						<span class="fa fa-phone icon"></span> 
        					<input name="Phone" type="text" size="25" placeholder="Số điện thoại" class="form-control" />
      					</div>

      					<div class="form-group has-feedback">
      						<span class="fa fa-birthday-cake"></span> 
        					<input name="Year" type="text" size="25" placeholder="Năm Sinh" class="form-control" />
   						</div>

						<div class="form-group has-feedback">
      						<span class="fa fa-transgender icon"></span> 
        					<input name="Gender" type="text" size="25" placeholder="Giới tính" class="form-control" />
   						</div>
   						
	      				<div class="form-group">
	          				<button name="btnChange" type="submit" class="btn btn-primary">Cập nhật</button>
	      				</div>
	      			</form>
				</div>
			</div>
		</div>
	</div>
</main>
<?php include('footer.php');?>