<style>
	.img_about{
		float: left;
		padding-right: 50px;

	}
</style>
<?php include('header.php');
	$qry1=mysqli_query($con,"SELECT * FROM `news` WHERE `news_id` ='".$_GET['id']."'");
	$movie=mysqli_fetch_array($qry1);
	?>
<main class="main-content">
	<div class="container">
		<div class="page">
			<div class="row">
				<h3><?php echo $movie['movie_name']; ?></h3>		
				<div class="img_about">
					<img src="<?php echo $movie['image']; ?>"/>
				</div>

				<div>
					<h4 class="p-link" style="font-size:15px">Diễn viên: <?php echo $movie['cast']; ?></h4>
					<h4 class="p-link" style="font-size:15px">Khởi chiếu: <?php echo date('d-M-Y',strtotime($movie['news_date'])); ?></h4>
					<h4 class="desc" style="font-size:15px">Nội dung phim: <?php echo $movie['description']; ?></h4>
					<a class="btn btn-primary" href="<?php echo $movie['video_url']; ?>" target="_blank">Trailer</a>
				</div>
			</div>
		</div>						
	</div>
</main>
<?php include('footer.php');?>