<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Laserbird Media - Tavy Fraser">
		<link rel="icon" href="">
		
		<title>Laserbird Media/Ready Salted</title>		
		<link rel="stylesheet" href="./css/bootstrap.min.css">
		<link rel="stylesheet" href="./css/laserbird.css" type="text/css">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./js/bootstrap.min.js"></script>
		<?php
			$package = filter_input(INPUT_GET, 'type', FILTER_SANITIZE_SPECIAL_CHARS);
		?>
	</head>
	<body class="container-fluid laserbird">
		<div id="main">
			<div class="row">
				<?php include_once ('./includes/main-nav.php');?>
			</div>
			<?php
				switch ($package){
					case 'personal':?>
						<div class="row">
							<div class="col-sm-12 content">
								<div class="col-sm-4" style="margin-top:5px;">
									<div class="columnhead">
										Personal Hosting
									</div>
									<div class="column-item">
										<ins><b>Ideal For</b></ins><br>
										Personal websites<br>
										Family Photo Albums<br>
										Blogging<br>
										Personal Projects<br>
									</div>
									<div class="column-item">500 Mb Space</div>
									<div class="column-item">1 Mailbox</div>
									<div class="column-item">1 MySql Database</div>
									<div class="column-item">Daily Backup</div>
									<div class="column-item">Free Support</div>
									<div class="column-item">Migration Assistance</div>
									<div class="column-pricing">Pricing</div>
									<div class="column-item">&pound;5/month</div>
									<div class="column-item">&pound;50/yr</div>
									<div class="column-item">&pound;80/2yr</div>
								</div>
								<div class="col-sm-8" style="margin-top:5px;">
									Words
								</div>
							</div>
						<?php
						break;
					case 'smallbusiness':?>
						<div class="row">
							<div class="col-sm-12 content">
								<div class="col-sm-4" style="margin-top:5px;">
									<div class="columnhead">
										Startup Business Hosting
									</div>
									<div class="column-item">
										<ins><b>Ideal For</b></ins><br>
										Small-scale Business Sites<br>
										Larger scale Personal Projects<br>
										Small E-Commerce<br>
										<br>
									</div>
									<div class="column-item">1.5 Gb Space</div>
									<div class="column-item">5 Mailbox</div>
									<div class="column-item">3 MySql Databases</div>
									<div class="column-item">Daily Backup</div>
									<div class="column-item">Free Support</div>
									<div class="column-item">Migration Assistance</div>
									<div class="column-pricing">Pricing</div>
									<div class="column-item">&pound;10/month</div>
									<div class="column-item">&pound;100/yr</div>
									<div class="column-item">&pound;160/2yr</div>
								</div>
								<div class="col-sm-8" style="margin-top:5px;">
									Words
								</div>
							</div>
						<?php
						break;
					case 'standardbusiness':?>
						<div class="row">
							<div class="col-sm-12 content">
								<div class="col-sm-4" style="margin-top:5px;">
									<div class="columnhead">
										Business Hosting
									</div>
									<div class="column-item">
										<ins><b>Ideal For</b></ins><br>
										Established Businesses<br>
										Medium Sized E-Commerce<br>
										Large Websites<br>
										<br>
									</div>
									<div class="column-item">5 Gb Space</div>
									<div class="column-item">10 Mailbox</div>
									<div class="column-item">10 MySql Databases</div>
									<div class="column-item">Daily Backup</div>
									<div class="column-item">Free Support</div>
									<div class="column-item">Migration Assistance</div>
									<div class="column-pricing">Pricing</div>
									<div class="column-item">&pound;30/month</div>
									<div class="column-item">&pound;330/yr</div>
									<div class="column-item">&pound;600/2yr</div>
								</div>
								<div class="col-sm-8" style="margin-top:5px;">
									Words
								</div>
							</div>
						<?php
						break;
					case 'largebusiness':?>
						<div class="row">
							<div class="col-sm-12 content">
								<div class="col-sm-4" style="margin-top:5px;">
									<div class="columnhead">
										Large Hosting
									</div>
									<div class="column-item">
										<ins><b>Ideal For</b></ins><br>
										Established Large Businesses<br>
										Database Driven Sites<br>
										<br>
										<br>
									</div>
									<div class="column-item">10 Gb Space</div>
									<div class="column-item">30 Mailbox</div>
									<div class="column-item">15 MySql Databases</div>
									<div class="column-item">Daily Backup</div>
									<div class="column-item">Free Support</div>
									<div class="column-item">Migration Assistance</div>
									<div class="column-pricing">Pricing</div>
									<div class="column-item">&pound;50/month</div>
									<div class="column-item">&pound;500/yr</div>
									<div class="column-item">&pound;850/2yr</div>						
								</div>
								<div class="col-sm-8" style="margin-top:5px;">
									Words
								</div>
							</div>
						</div>
						<?php
						break;
					case 'custom':?>
						<div class="row">
							<div class="col-sm-12 content">
								<div class="col-sm-4" style="margin-top:5px;">
									<div class="columnhead">
										Custom Hosting
									</div>
									<div class="column-item">
										<ins><b>Ideal For</b></ins><br>
										People who don't know what they want
										<br>
										<br>
									</div>
									<div class="column-item">? Gb Space</div>
									<div class="column-item">? Mailbox</div>
									<div class="column-item">? MySql Databases</div>
									<div class="column-item">Daily Backup</div>
									<div class="column-item">Free Support</div>
									<div class="column-item">Migration Assistance</div>
									<div class="column-pricing">Pricing</div>
									<div class="column-item">&pound;?/month</div>
									<div class="column-item">&pound;?/yr</div>
									<div class="column-item">&pound;?/2yr</div>						
								</div>
								<div class="col-sm-8" style="margin-top:5px;">
									Words
								</div>
							</div>
						</div>
			<?php			
				}
			?>
		</div>
		<div class="row">
			<div class="footer content">
				<?php include ('./includes/footer.php');?>
			</div>
		</div>
	</body>	
</html>