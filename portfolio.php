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
			$site = filter_input(INPUT_GET, 'site', FILTER_SANITIZE_SPECIAL_CHARS);
		?>
		
	</head>
	<body class="container-fluid laserbird">
		<div id="main">
			<div class="row">
				<?php include_once ('./includes/main-nav.php');?>
			</div>
			
			<?php
				$port_set = mysqli_query($dbport,"SELECT * FROM `portfolio` WHERE `pagelink` = '$site'");
				$port = mysqli_fetch_array($port_set);
			?>
			<div class="row">
				<div class="col-sm-12 mainhead">
					<?php echo $port['title'];?>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 content">
					<?php echo $port['description'];?>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 content" style="padding:0;">
				<div class="col-sm-8" style="padding:0;">
					<a href="<?php echo $port['site_url'];?>" target="_blank">
						<img style="border:2px solid black;" class="img-responsive" src="./assets/<?php echo $port['image'];?>" alt="<?php echo $port['title'];?>"/>
					</a>
				</div>
				<div class="col-sm-4">
					<div class="row">
						<div class="col-sm-12 mainhead" style="margin-top:0;">
							Features and Functionality
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12" style="padding:0;">
							<?php 
								$features = explode(";",$port['features']);
								foreach ($features as $part){
									if ($part == true){
										echo '<div class="column-item">';
											echo $part;
										echo '</div>';
									}
								}
							?>
						</div>
					</div>
				</div>
			</div>			
		</div>
		<div class="row">
			<div class="footer content">
				<?php include ('./includes/footer.php');?>
			</div>
		</div>
	</body>	
</html>