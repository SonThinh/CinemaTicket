<html>
<body>
	<div id="site-content">
		<?php
			include('header.php');
		?>
		<main class="main-content">
			<div class="container">
				<div class="page">
					<div class="row">
						<div class="col-md-12">
							<?php include('slider.php')?>
						</div>
					</div> <!-- .row -->
					
					<div class="row">
						<div class="img">
							<center>
								<img src="images/movie_selection.gif">
							</center>
						</div>
						<br/>

						<?php include('movie_trailer.php')?>	
					</div> <!-- .row -->
					
				</div> <!--page-->
				<br/>
				
			</div> <!-- .container -->
		</main>	
		<?php
			include('footer.php');
		?>
	</div>
		<!-- Default snippet for navigation -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/app.js"></script>
		
</body>
</html>