<style>
	.img_about{
		float: left;
		padding-right: 50px;

	}
	table,tr,td{
		border: 1px solid black;

	}
	td{
		text-align: center;
	}
</style>
<?php include('header.php');
if(!isset($_SESSION['username']))
{
	header('location:login.php');
}
	$qry2=mysqli_query($con,"SELECT * FROM movie WHERE movie_id='".$_SESSION['movie']."'");
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
					
				</div>

				<table>
				<?php
					$s=mysqli_query($con,"SELECT * FROM shows WHERE s_id='".$_SESSION['show']."'");
					$shw=mysqli_fetch_array($s);
					$t=mysqli_query($con,"SELECT * FROM cinema WHERE cinema_id='".$shw['cinema_id']."'");
					$cinema=mysqli_fetch_array($t);
				?>
					<tr>
						<td>
							Rạp:
						</td>

						<td>
							<?php echo $cinema['cinema_name'].", ".$cinema['city'];?>
						</td>
					</tr>

					<tr>
						<td>
							Địa chỉ:
						</td>

						<td>
							<?php echo $cinema['address'];?>
						</td>
					</tr>

					<tr>
						<td>
							Rạp chiếu:
						</td>

						<td>
							<?php 
								$ttm=mysqli_query($con,"SELECT  * FROM show_time WHERE st_id='".$shw['st_id']."'");
								$ttme=mysqli_fetch_array($ttm);
								$sn=mysqli_query($con,"SELECT  * FROM screens WHERE screen_id='".$ttme['screen_id']."'");
								$screen=mysqli_fetch_array($sn);
								echo $screen['screen_name'];
							?>
						</td>
					</tr>

					<tr>
						<td>
							Chọn ngày xem:
						</td>

						<td>
							<?php 
								if(isset($_GET['date'])){
									$date=$_GET['date'];
								}
								else
								{
									if($shw['start_date']>date('Y-m-d'))
									{
										$date=date('Y-m-d',strtotime($shw['start_date'] . "-1 days"));
									}
									else
									{
										$date=date('Y-m-d');
									}
									$_SESSION['dd']=$date;
								}
							?>
								<div class="col-md-12 text-center" style="padding-bottom:20px">
									<?php 
										if($date>$_SESSION['dd']){
									?>
											<a href="booking.php?date=<?php echo date('Y-m-d',strtotime($date . "-1 days"));?>">
												<button><i class="glyphicon glyphicon glyphicon-minus"></i></button>
											</a> 
									<?php 
										} 
									?>
									<span style="cursor:default" class="btn btn-default"><?php echo date('d-M-Y',strtotime($date));?></span>
									<?php 
										if($date!=date('Y-m-d',strtotime($_SESSION['dd'] . "+4 days"))){
									?>
									<a href="booking.php?date=<?php echo date('Y-m-d',strtotime($date . "+1 days"));?>">
										<button class="btn btn-default"><i class="glyphicon glyphicon-plus"></i></button>
									</a>
									<?php 
									}
									$av=mysqli_query($con,"SELECT sum(no_seats) FROM bookings WHERE show_id='".$_SESSION['show']."' and ticket_date='$date'");
									$avl=mysqli_fetch_array($av);
									?>
								</div>
						</td>

					</tr>
					
					<tr>
						<td>
							Giờ chiếu:
						</td>

						<td>
							<?php echo date('h:i A',strtotime($ttme['start_time']));?>
						</td>
					</tr>

					<tr>
						<td>
							Số lượng vé:
						</td>

						<td>
							<form  action="process_booking.php" method="post">
								<input type="hidden" name="screen" value="<?php echo $screen['screen_id'];?>"/>
								<input type="number" required tile="Number of Seats" max="<?php echo $screen['seats']-$avl[0];?>" min="0" name="seats" class="form-control" value="1" style="text-align:center" id="seats"/>
								<input type="hidden" name="amount" id="hm" value="<?php echo $screen['charge'];?>"/>
								<input type="hidden" name="date" value="<?php echo $date;?>"/>
						</td>
					</tr>
					
					<tr>
						<td>
							Tổng tiền vé:
						</td>

						<td id="amount" style="font-weight:bold;font-size:18px">
							<?php echo $screen['charge'];?>
						</td>
					</tr>

					<tr>
						<td colspan="2">
							<?php 
								if($avl[0]==$screen['seats']){
							?>
									<button type="button" class="btn btn-danger" style="width:100%">Đầy</button>
								<?php 
								} else { 
								?>
									<button class="btn btn-info" style="width:100%">Đặt</button>
								<?php 
								} 
								?>
							</form>
						</td>
					</tr>
				</table>
			</div>
		</div>		
	</div>
	<script type="text/javascript">
	$('#seats').change(function(){
		var charge=<?php echo $screen['charge'];?>;
		amount=charge*$(this).val();
		$('#amount').html(amount+" VND");
		$('#hm').val(amount);
	});
</script>
</main>
<?php include('footer.php');?>
