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
		<script src="jquery.bcSwipe.js"></script>
	</head>
	<body class="laserbird">
		<?php include_once ('./includes/main-nav.php');?>
		<div id="main">
			<div class="leftcontent content slider">
				<?php include ('./includes/frontpage_carousel.php');?>
			</div>			
			<div class="rightcontent content">
				 <a class="twitter-timeline" href="https://twitter.com/laserbirdmedia" data-widget-id="601018053103644672">
					Tweets by @laserbirdmedia
				</a> 
				<script>
					!function(d,s,id){
						var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
						if(!d.getElementById(id)){
							js=d.createElement(s);
							js.id=id;
							js.src=p+"://platform.twitter.com/widgets.js";
							fjs.parentNode.insertBefore(js,fjs);
						}
					}
					(document,"script","twitter-wjs");
				</script> 
			</div>
			<div class="lowerleftcontent content">
				<span class="headbit">Why Laserbird Media?</span><br>
				It may have started out as a joke name, but it's also unique and memorable, which is just what we need!<br>
				<span class="headbit">What are you?</span><br>
				We're a company. We make websites and do other web-related stuff. We can also do video, animation, and all that sort of fanciness.
				If you can describe what you want on your site, we can probably create, produce or throw it together.<br><br>
				Already got a website but there's something wrong with it? We can diagnose and fix most problems. Nothing wrong with the site?
				Well, we also do hosting with free support and migrations. Sorted.
			</div>
			<br style="clear: both;">
			<div class="mainhead" style="margin-top:5px;">
				Start-up Business Sites
			</div>
			<div class="content">
				Are you starting a small business? A website is one of the best ways to increase awareness of it, provide information on what 
				you sell or do, or tell people where to find you.<br><br>
				We have a range of the most popular website components, functions and styles to get the most suitable and cost-effective
				design and layout from your site. Any function you can think of for your site, we can add in! Need a booking form? Easy! Calendar 
				displaying availability of a service? Done!<br><br>
				If you can tell us what you need, we can absolutely create it for you rapidly, efficiently, then provide ongoing support, 
				hosting and any upkeep required.
			</div>
			<div class="mainhead">
				Hosting
			</div>
			<div class="mainhead">
				Bespoke Websites of all sizes
			</div>
			<div class="content">
				We can build small, large or ridiculously sized websites. Check out our portfolio for samples. We can do static, responsive,
				database-driven, php, html, most stuff. Give us a shout for what you need and we can tailor a package especially for you.
			</div>
			<div class="mainhead">
				Support for Existing Websites & Migrations
			</div>
			<div class="content">
				Already own a website? Need fixes done to it? Updates? Advice? Revamps? How about migrating to new hosting? 
				We can do all that!		
			</div>
			<div class="mainhead">
				We have an Alex
			</div>
			<div class="content">
				He can make videos and do design work and other multimedia products.
			</div>
			<div class="mainhead">
				Social Mediarisation
			</div>
			<div class="content">
				Facebook? Twitter? LinkedIn? Bebo?<br><br>
				We can make that stuff for you if you can't be bothered.
			</div>
		</div>
		<div class="footer content">
			<?php include ('./includes/footer.php');?>
		</div>
	</body>	
</html>