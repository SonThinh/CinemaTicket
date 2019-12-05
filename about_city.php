
<style>
	.img_about{
		float: top;
		text-align: center;
		padding-bottom:  50px;
		width: 100%;
	}
	.table{
		text-align: center;
		width: 80%;
	}
</style>
<?php include('header.php');
    $qry = mysqli_query($con,"SELECT * FROM cinema WHERE cinema_id = '".$_GET['id']."' ");
	$city=mysqli_fetch_array($qry);
	?>

<main class="main-content">
	<div class="container">
		<div class="page">
			<div class="row">
				<h3 style="text-align: center;"><?php echo $city['cinema_name']; ?></h3>		
				<div class="img_about">
					<img src="<?php echo $city['image']; ?>"/>
					<h4 class="p-link" style="font-size:15px">Địa chỉ <?php echo $city['address']; ?></h4>	
				</div>
			</div>
		</div>						
	</div>
</main>
<?php include('footer.php');?>