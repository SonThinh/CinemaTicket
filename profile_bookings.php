<?php include('header.php');?>
<head>
	<style type="text/css">
		table,th,tr,td{
			border: 1px solid black;
			text-align: center;
		}
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
	

<main class="main-content">
	<div class="container">
		<div class="page">
			<div class="row">
				<h3>Danh sách vé đã đặt</h3>
				<?php
				$bk=mysqli_query($con,"SELECT * FROM bookings WHERE user_id='".$_SESSION['username']."'");
				if(mysqli_num_rows($bk)) {
					?>
					<table>
						<thead>
							<th>VÉ</th>
							<th>MÃ GHẾ</th>
							<th>PHIM</th>
							<th>RẠP</th>
							<th>PHÒNG CHIẾU</th>
							<th>THỜI GIAN CHIẾU</th>
							<th>NGÀY ĐẶT VÉ</th>
							<th>SỐ GHẾ ĐẶT</th>
							<th>TỔNG TIỀN</th>
							<th></th>
						</thead>
						<tbody>
						<?php
						while($bkg=mysqli_fetch_array($bk))
						{
							$m=mysqli_query($con,"SELECT * FROM movie WHERE movie_id=(SELECT movie_id FROM shows WHERE s_id='".$bkg['show_id']."')");
							$mov=mysqli_fetch_array($m);
							$s=mysqli_query($con,"SELECT * FROM screens WHERE screen_id='".$bkg['screen_id']."'");
							$srn=mysqli_fetch_array($s);
							$tt=mysqli_query($con,"SELECT * FROM cinema WHERE cinema_id='".$bkg['cinema_id']."'");
							$thr=mysqli_fetch_array($tt);
							$st=mysqli_query($con,"SELECT * FROM show_time WHERE st_id=(SELECT st_id FROM shows WHERE s_id='".$bkg['show_id']."')");
							$stm=mysqli_fetch_array($st);
							?>
							<tr>
								<td>
									<?php echo $bkg['ticket_id'];?>
								</td>
								<td>
									<?php echo $bkg['seat'];?>
								</td>
								<td>
									<?php echo $mov['movie_name'];?>
								</td>
								<td>
									<?php echo $thr['cinema_name'];?>
								</td>
								<td>
									<?php echo $srn['screen_name'];?>
								</td>
								<td>
									<?php echo $stm['start_time'];?>
								</td>
								<td>
									<?php echo date('d-M-Y',strtotime($bkg['ticket_date']));?>
								</td>
								<td>
									<?php echo $bkg['no_seats'];?>
								</td>
								<td>
									<?php echo $bkg['amount'];?> VND
								</td>
								<td>
									<?php  if($bkg['ticket_date']<date('Y-m-d'))
									{
										?>
										<i class="glyphicon glyphicon-ok" style="color: green"></i>
										<?php
									}
									else
									{?>
									<button type="submit">
										<a href="cancel.php?id=<?php echo $bkg['book_id'];?>"
											><i class="glyphicon glyphicon-remove" style="color: red"></i>
										</a>
									</button>
									<?php
									}
									?>
								</td>
							</tr>
							<?php
						}
						?></tbody>
					</table>
					<?php
				}
				else
				{
					?>
					<h3>No Previous Bookings</h3>
					<?php
				}
				?>
				<script type="text/javascript">
				$('#seats').change(function(){
					var charge=<?php echo $screen['charge'];?>;
					amount=charge*$(this).val();
					$('#amount').html("Rs "+amount);
					$('#hm').val(amount);
				});
				</script>	
			</div>
		</div>						
	</div>
</main>
<?php include('footer.php');?>