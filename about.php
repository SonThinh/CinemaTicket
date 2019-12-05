
<style>
	.img_about{
		float: left;
		padding-right: 50px;

	}
	.table{
		text-align: center;
		width: 80%;
	}
</style>
<?php include('header.php');
	$qry2=mysqli_query($con,"SELECT * FROM movie WHERE movie_id='".$_GET['id']."'");
	$movie=mysqli_fetch_array($qry2);
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
					<h4 class="p-link" style="font-size:15px">Khởi chiếu: <?php echo date('d-M-Y',strtotime($movie['release_date'])); ?></h4>
					<h4 class="desc" style="font-size:15px">Nội dung phim: <?php echo $movie['description']; ?></h4>
					<a class="btn btn-primary" href="<?php echo $movie['video_url']; ?>" target="_blank">Trailer</a>
				</div>
			</div>

			<br><h4 style="text-align: center;">Lịch chiếu</h4>
			<?php $s=mysqli_query($con,"SELECT DISTINCT cinema_id FROM shows WHERE movie_id='".$movie['movie_id']."'");
			if(mysqli_num_rows($s)) {?>
				<table class="table" style="border: 1">
				<?php
				while($shw=mysqli_fetch_array($s)) {
					$t=mysqli_query($con,"SELECT * FROM cinema WHERE cinema_id='".$shw['cinema_id']."'");
					$cinema=mysqli_fetch_array($t);
					?>
					<tr>
						<td>
							<?php echo $cinema['cinema_name'].", ".$cinema['city'];?><br>
						</td>

						<td>
							<?php $tr=mysqli_query($con,"SELECT * FROM shows WHERE movie_id='".$movie['movie_id']."' and cinema_id='".$shw['cinema_id']."'");
							while($shh=mysqli_fetch_array($tr)) {
								$ttm=mysqli_query($con,"SELECT  * FROM show_time WHERE st_id='".$shh['st_id']."'");
								$ttme=mysqli_fetch_array($ttm);
							?>
							<a href="check_login.php?show=<?php echo $shh['s_id'];?>&movie=<?php echo $shh['movie_id'];?>&cinema=<?php echo $shw['cinema_id'];?>"><button class="btn btn-default"><?php echo date('h:i A',strtotime($ttme['start_time']));?></button></a>
							<?php
							}
							?>
						</td>
					</tr>

					<?php
					}
					?>
				</table>
				
			<?php
			}else{
			?>
				<h3>No Show Available</h3>
			<?php
			}
			?>
		</div>						
	</div>
</main>
<?php include('footer.php');?>