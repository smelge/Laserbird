<!DOCTYPE html>
<html>
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
			$site = $_GET['site'];
		?>
	</head>
	<body class="laserbird">
		<?php include_once ('./includes/main-nav.php');?>
		<div id="main">
			<?php
				switch ($site){
					case 'barnton':
						echo '<div class="content">';
							echo '<span class="porthead">Barnton Quarry Restoration Project</span><hr>';
							echo "Barnton Quarry Restoration Project is awaiting upload to it's host.<br><br>";
							echo "The site features a custom Content Management System to allow editing of all content areas, and a working Volunteer Application system.";
							echo "This site is built in HTML, with a PHP framework. The CMS is made using PHP, with some AJAX for the Gallery category system.";
						echo '</div>';
						echo '<div class="portfolio">';
							echo '<a href="http://www.laserbirdmedia.com/workspace/barnton" target="_blank">';
								echo '<img src="./assets/barnton.jpg" alt="Barnton Quarry Restoration Project"/>';
							echo '</a>';
						echo '</div>';
						break;
					case 'swt':
						echo '<div class="content">';
							echo '<span class="porthead">Simply Wasting Time</span><hr>';
							echo "Simply Wasting Time is a gaming website. A custom CMS allows the posting of articles and videos, as well as statistic tracking.<br><br>";
							echo "It is primarily PHP based and all content is stored and generated from a database.";
						echo '</div>';
						echo '<div class="portfolio">';
							echo '<a href="http://www.simplywastingtime.com" target="_blank">';
								echo '<img src="./assets/swt.jpg" alt="Simply Wasting Time"/>';
							echo '</a>';
						echo '</div>';
						break;
					case 'traildog':
						echo '<div class="content">';
							echo '<span class="porthead">TrailDog</span><hr>';
							echo "Traildog is a Mountain Bike trail mapping site. It allows users to upload GPS tracks, view them on a map and add them to the database, as well as generate height Profiles.<br><br>";
							echo "The main function of the site is to provide a comprehensive database of riding locations and trails across the UK. It is still under development.";
							echo "<br><br>It is database driven, and uses PHP for all functions.";
						echo '</div>';
						echo '<div class="portfolio">';
							echo '<a href="http://www.traildog.co.uk" target="_blank">';
								echo '<img src="./assets/traildog.jpg" alt="TrailDog"/>';
							echo '</a>';
						echo '</div>';
						break;
					case 'scotski':
						echo '<div class="content">';
							echo '<span class="porthead">Scotski</span><hr>';
							echo "Scotski was built as part of a College project. It is a simple static site using PHP and HTML.";
						echo '</div>';
						echo '<div class="portfolio">';
							echo '<a href="http://www.laserbirdmedia.com/workspace/scotski/" target="_blank">';
								echo '<img src="./assets/scotski.jpg" alt="Scotski"/>';
							echo '</a>';
						echo '</div>';
						break;
					default:
				}
			?>
		</div>
		<div class="footer content">
			<?php include ('./includes/footer.php');?>
		</div>
	</body>	
</html>