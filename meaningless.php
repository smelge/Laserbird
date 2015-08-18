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
		<link rel="stylesheet" href="./css/crap.css" type="text/css">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./js/bootstrap.min.js"></script>
		<script>
			jQuery(document).ready(function(){
				jQuery('.skillbar').each(function(){
					jQuery(this).find('.skillbar-bar').animate({
						width:jQuery(this).attr('data-percent')
					},6000);
				});
			});
		</script>
	</head>
	<body class="laserbird">
		<?php include_once ('./includes/main-nav.php');?>
		<div id="main" class="content">
			<h1>Here are some meaningless amounts</h1>
			
			<div class="skillbar clearfix " data-percent="110%">
				<div class="skillbar-title" style="background: #d35400;"><span>HTML5</span></div>
				<div class="skillbar-bar" style="background: #e67e22;"></div>
				<div class="skill-bar-percent">110%</div>
			</div>
			<!-- End Skill Bar -->
			
			<div class="skillbar clearfix " data-percent="63%">
				<div class="skillbar-title" style="background: #2980b9;"><span>XP</span></div>
				<div class="skillbar-bar" style="background: #3498db;"></div>
				<div class="skill-bar-percent">Lvl.23 (13874/28643)</div>
			</div>
			<!-- End Skill Bar -->
			
			<div class="skillbar clearfix " data-percent="13%">
				<div class="skillbar-title" style="background: #2c3e50;"><span>Jam</span></div>
				<div class="skillbar-bar" style="background: #2c3e50;"></div>
				<div class="skill-bar-percent">13%</div>
			</div>
			<!-- End Skill Bar -->
			
			<div class="skillbar clearfix " data-percent="81%">
				<div class="skillbar-title" style="background: #46465e;"><span>PHP</span></div>
				<div class="skillbar-bar" style="background: #5a68a5;"></div>
				<div class="skill-bar-percent">I LIKE TURTLES</div>
			</div>
			<!-- End Skill Bar -->
			
			<div class="skillbar clearfix " data-percent="100%">
				<div class="skillbar-title" style="background: #333333;"><span>Eating</span></div>
				<div class="skillbar-bar" style="background: #525252;"></div>
				<div class="skill-bar-percent">All the things</div>
			</div>
			<!-- End Skill Bar -->
			
			<div class="skillbar clearfix " data-percent="69%">
				<div class="skillbar-title" style="background: #27ae60;"><span>Ladies</span></div>
				<div class="skillbar-bar" style="background: #2ecc71;"></div>
				<div class="skill-bar-percent">69%</div>
			</div>
			<!-- End Skill Bar -->
			
			<div class="skillbar clearfix " data-percent="70%">
				<div class="skillbar-title" style="background: #124e8c;"><span>Photoshop</span></div>
				<div class="skillbar-bar" style="background: #4288d0;"></div>
				<div class="skill-bar-percent">Never heard of it</div>
			</div>
			<!-- End Skill Bar -->
			
			<p><strong>SOURCE :</strong> ORIGINAL WORK DO NOT STEAL</p>
		</div>
		<div class="footer content">
			<?php include ('./includes/footer.php');?>
		</div>
	</body>	
</html>