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
					<h3 style="text-align: center">Thông tin tài khoản</h3>
					<table>
						<tr>
							<td>
								<h4>Tên:</h4>
							</td>
							<td>
								<h4><?php echo $rg['name']; ?></h4>
							</td>
						</tr>
						<tr>
							<td>
								<h4>Email:</h4>
							</td>
							<td>
								<h4><?php echo $rg['email']; ?></h4>
							</td>
							
						</tr>
						<tr>
							<td>
								<h4>Số điện thoại:</h4>
							</td>
							<td>
								<h4><?php echo $rg['phone']; ?></h4>
							</td>
							
						</tr>
						<tr>
							<td>
								<h4>Năm sinh:</h4>
							</td>
							<td>
								<h4><?php echo $rg['year']; ?></h4>
							</td>
							
						</tr>
						<tr>
							<td>
								<h4>Giới tính:</h4>
							</td>
							<td>
								<h4><?php echo $rg['gender']; ?></h4>
							</td>
						</tr>
					</table>
					<div>
						<button type="submit" class="btn btn-primary" style="width: 100%"><a href="change_info.php" style="color: white">Cập nhật thông tin</a></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php include('footer.php');?>