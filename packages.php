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
			$package = $_GET['type'];
		?>
	</head>
	<body class="laserbird">
		<?php include_once ('./includes/main-nav.php');?>
		<?php
			switch ($package){
				case 'minisite':?>
					<div class="contenthead">
						Minisite Building
					</div>
					<div class="content">
						<ul>
							<li>Base Items
								<ul>
									<li>Frontpage</li>							
									<li>Contact Page</li>
								</ul>
							</li>							
							<li>Additional Modules
								<ul>
									<li>Responsive</li>
									<li>Slideshow</li>
									<li>Gallery</li>
									<li>Social Media</li>
									<li>Forum</li>
									<li>E-Commerce</li>
									<li>Frequently Asked Questions</li>
									<li>Order Form</li>
									<li>Blog</li>
									<li>Guest Book</li>
									<li>Wiki</li>
									<li>Calendar</li>
									<li>Content Management</li>
								</ul>
							</li>						
						</ul>
						<a class="btn btn-default" href="./demo1.php?scheme=neutral">Demo Schemes</a>
					</div>
					<?php
					break;
				case 'smallhost':?>
					<div class="contenthead">
						Hosting Plans
					</div>	
					<div class="content-column">
						<div class="columnhead">
							Personal Hosting
						</div>
						<div class="column-item">Ideal For: stuff</div>
						<div class="column-item">200 Mb Space</div>
						<div class="column-item">1 Mailbox</div>
						<div class="column-item">0 MySql Databases</div>
						<div class="column-item">Daily Backup</div>
						<div class="column-item">Free Support</div>
						<div class="column-item">Migration Assistance</div>
						<div class="column-item">Pricing</div>
						<div class="column-item">£5/month</div>
						<div class="column-item">£50/yr</div>
						<div class="column-item">£80/2yr</div>
					</div>
					<div class="content-column">
						<div class="columnhead">
							Startup Business Hosting
						</div>
						<div class="column-item">Ideal For: stuff</div>
						<div class="column-item">800 Mb Space</div>
						<div class="column-item">5 Mailbox</div>
						<div class="column-item">3 MySql Databases</div>
						<div class="column-item">Daily Backup</div>
						<div class="column-item">Free Support</div>
						<div class="column-item">Migration Assistance</div>
						<div class="column-item">Pricing</div>
						<div class="column-item">£10/month</div>
						<div class="column-item">£100/yr</div>
						<div class="column-item">£160/2yr</div>
					</div>
					<div class="content-column">
						<div class="columnhead">
							Business Hosting
						</div>
						<div class="column-item">Ideal For: stuff</div>
						<div class="column-item">1.5 Gb Space</div>
						<div class="column-item">10 Mailbox</div>
						<div class="column-item">10 MySql Databases</div>
						<div class="column-item">Daily Backup</div>
						<div class="column-item">Free Support</div>
						<div class="column-item">Migration Assistance</div>
						<div class="column-item">Pricing</div>
						<div class="column-item">£30/month</div>
						<div class="column-item">£330/yr</div>
						<div class="column-item">£600/2yr</div>
					</div>
					<div class="content-column">
						<div class="columnhead">
							Large Hosting
						</div>
						<div class="column-item">Ideal For: stuff</div>
						<div class="column-item">2 Gb Space</div>
						<div class="column-item">20 Mailbox</div>
						<div class="column-item">15 MySql Databases</div>
						<div class="column-item">Daily Backup</div>
						<div class="column-item">Free Support</div>
						<div class="column-item">Migration Assistance</div>
						<div class="column-item">Pricing</div>
						<div class="column-item">£40/month</div>
						<div class="column-item">£400/yr</div>
						<div class="column-item">£750/2yr</div>						
					</div>
					<?php
					break;
				case 'prebuilt':?>
					<div class="contenthead">
						Website Upgrades and Repairs
					</div>
					<div class="content">
						Content
					</div>
					<?php
					break;
				case 'custom':?>
					<div class="contenthead">
						Custom Built Site Solutions
					</div>
					<div class="content">
						Content
					</div>
					<?php
					break;
			}
		?>
		<div class="footer content">
			<?php include ('./includes/footer.php');?>
		</div>
	</body>	
</html>