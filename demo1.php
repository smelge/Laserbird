<!DOCTYPE html>
<html>
	<head>
		<!-- Demo for Layout 1 -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Laserbird Media - Tavy Fraser">
		<link rel="icon" href="">
		
		<title>Laserbird Media/Ready Salted</title>	
		<?php $scheme = $_GET['scheme'];?>		
		<link rel="stylesheet" href="./css/bootstrap.min.css">
		<link rel="stylesheet" href="./css/base1.css" type="text/css">
		<?php
			switch ($scheme){
				case 'neutral':
					echo '<link rel="stylesheet" href="./css/schemes/neutral.css" type="text/css">';
					break;
				case 'green':
					echo '<link rel="stylesheet" href="./css/schemes/green.css" type="text/css">';
					break;
				case 'blue':
					echo '<link rel="stylesheet" href="./css/schemes/blue.css" type="text/css">';
					break;
				case 'brown':
					echo '<link rel="stylesheet" href="./css/schemes/brown.css" type="text/css">';
					break;
				case 'violet':
					echo '<link rel="stylesheet" href="./css/schemes/violet.css" type="text/css">';
					break;
				case 'pink':
					echo '<link rel="stylesheet" href="./css/schemes/pink.css" type="text/css">';
					break;
				case 'yellow':
					echo '<link rel="stylesheet" href="./css/schemes/yellow.css" type="text/css">';
					break;
				case 'sandy':
					echo '<link rel="stylesheet" href="./css/schemes/sandy.css" type="text/css">';
					break;
			}
		?>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./js/bootstrap.min.js"></script>		
	</head>
	<body>
		<div class="topbar">
			<div class="schema">
				<div class="btn-group" role="group">
					<a class="btn btn-info" <?php if ($scheme == 'neutral'){echo 'disabled="disabled"';}?> href="./demo1.php?scheme=neutral">Neutral</a>
					<a class="btn btn-info" <?php if ($scheme == 'pink'){echo 'disabled="disabled"';}?> href="./demo1.php?scheme=pink">Pink</a>
					<a class="btn btn-info" <?php if ($scheme == 'brown'){echo 'disabled="disabled"';}?> href="./demo1.php?scheme=brown">Brown</a>
					<a class="btn btn-info" <?php if ($scheme == 'sandy'){echo 'disabled="disabled"';}?> href="./demo1.php?scheme=sandy">Sandy</a>
					<a class="btn btn-info" <?php if ($scheme == 'yellow'){echo 'disabled="disabled"';}?> href="./demo1.php?scheme=yellow">Yellow</a>
					<a class="btn btn-info" <?php if ($scheme == 'green'){echo 'disabled="disabled"';}?> href="./demo1.php?scheme=green">Green</a>
					<a class="btn btn-info" <?php if ($scheme == 'blue'){echo 'disabled="disabled"';}?> href="./demo1.php?scheme=blue">Blue</a>
					<a class="btn btn-info" <?php if ($scheme == 'violet'){echo 'disabled="disabled"';}?> href="./demo1.php?scheme=violet">Violet</a>
				</div>
			</div>
			<div class="layout">
				<div class="btn-group" role="group">
					<a class="btn btn-info" disabled="disabled" href="./demo1.php?scheme=<?php echo $scheme;?>">Layout 1</a>
					<a class="btn btn-info" disabled="disabled" href="./demo2.php?layout=layout2">Layout 2</a>
					<a class="btn btn-info" disabled="disabled" href="./demo3.php?layout=layout3">Layout 3</a>
					<a class="btn btn-danger" href="./packages.php?type=minisite">Leave Demo</a>
				</div>
			</div>
			<br style="clear:both;">
		</div>
		<div id="main">			
			<div class="banner">
				<img src="./assets/demobanner.jpg" alt="Demo Banner"/>
			</div>
			<div class="navbar">
				<ul>
					<li>Home</li>
					<li>Gallery</li>
					<li>FAQ</li>
					<li>Order</li>
					<li>Contact</li>
				</ul>
			</div>
			<div class="content twothird">
				<div class="contenthead">
					Some Lorem Ipsum
				</div>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dapibus lacus scelerisque velit mollis, eu vestibulum 
				ante auctor. Suspendisse vitae diam orci. Cras pellentesque lacinia nulla. Praesent tortor sapien, posuere ut augue eget, 
				vestibulum iaculis ligula. Aliquam egestas augue ut laoreet bibendum. Nam elementum ornare egestas. Donec ultricies est 
				turpis, ut ornare ex vehicula eget. Vivamus pretium lorem in justo malesuada, eget efficitur ligula ullamcorper. 
				<img src="./assets/imgdemo.jpg" alt="Demo Image"/>
				Phasellus tincidunt commodo quam, at fermentum sapien. Nam elementum venenatis felis, sit amet aliquet justo rhoncus id.
				<br><br>
				Nullam placerat euismod felis non volutpat. Donec sollicitudin mattis lectus, non lobortis leo egestas ut. Donec dictum 
				dapibus nunc at ullamcorper. Praesent magna purus, hendrerit at scelerisque id, varius quis enim. Maecenas at interdum 
				tellus. Ut facilisis quam nulla, quis vulputate sapien luctus a. Proin commodo velit quis tempus vulputate. Nulla nec 
				quam id dolor pretium luctus eget ac lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per 
				inceptos himenaeos. Ut pellentesque id neque at sagittis. Vivamus lacinia mattis auctor. Integer est velit, congue ac 
				vehicula id, consequat eu justo. Nam ac hendrerit mi, sit amet ultrices tellus. Donec et ligula at mauris rhoncus 
				elementum nec non ex. Donec venenatis felis sit amet dictum dapibus.
				<br><br>
				Phasellus semper semper augue quis accumsan. Phasellus eu cursus metus. Praesent auctor, mauris quis finibus dictum, 
				sem lacus fermentum nisl, hendrerit ultricies nisi orci id lorem. Mauris dignissim, tellus eu vestibulum malesuada, 
				odio nibh condimentum massa, ultricies facilisis leo orci vel sem. Quisque nisi ligula, fringilla ac leo non, mollis 
				sodales ligula. Nunc quis leo posuere, porta lorem sit amet, viverra quam. Nunc tempus mattis eros ut aliquam. Cras 
				non erat luctus purus condimentum molestie. Curabitur ultrices pulvinar urna sit amet tempor. Vestibulum egestas neque 
				quis sagittis suscipit. Nullam quis semper augue. Curabitur vestibulum, ligula ac luctus commodo, mauris dolor 
				consectetur eros, eu pharetra nisi est et nisl. Integer laoreet erat leo. Duis eu scelerisque lacus. Phasellus dui 
				nisi, congue et lorem quis, facilisis rutrum eros. Integer in porttitor libero.
				<br><br>
				Proin blandit tortor at orci maximus, eget tristique eros condimentum. Nullam accumsan, nibh id mollis convallis, mauris 
				erat iaculis risus, vel bibendum erat enim accumsan nibh. Proin leo felis, tempor a metus sit amet, tincidunt varius 
				eros. Quisque malesuada sapien eget libero venenatis gravida. Vestibulum ante ipsum primis in faucibus orci luctus et 
				ultrices posuere cubilia Curae; Pellentesque fermentum sem turpis, et consequat dolor pulvinar vitae. Duis mattis 
				malesuada justo et ultricies. Phasellus volutpat fermentum lacinia. Cras tristique vitae felis et tincidunt. Vivamus 
				sed urna ex. Vivamus aliquet enim et diam fringilla, et mollis lorem tempus.
				<br><br>
				Mauris sagittis ultricies dignissim. Aenean interdum mi vitae dui sagittis, vitae condimentum ipsum rhoncus. Suspendisse 
				tincidunt augue justo, vel luctus tellus euismod vel. Nam quis diam dolor. Sed ut lobortis ipsum, et tincidunt neque. 
				Aenean id ipsum egestas, mattis lectus vitae, ullamcorper tellus. Donec dignissim lacinia dui, id porttitor mauris. Duis 
				scelerisque scelerisque enim, eu mattis odio condimentum ut. Pellentesque sit amet nibh tempus ante ultrices laoreet ac 
				sit amet lectus. Quisque convallis magna a fermentum feugiat. Donec non dignissim magna. Maecenas augue felis, ornare 
				iaculis venenatis vitae, egestas sit amet quam. Vestibulum blandit orci pharetra maximus euismod. In volutpat lacinia 
				massa, eu placerat libero. Sed bibendum sem a ligula lacinia egestas. Sed ante nibh, pulvinar at libero sit amet, 
				suscipit viverra odio. 
			</div>
			<div class="content third">
				Content area
			</div>
			<br style="clear:both;">
			<div class="footer">
				Content &copy; Your Company <?php echo date("Y");?> <br>
				Site Designed and Built by <a href="http://www.laserbirdmedia.com">Laserbird Media</a> 2015
			</div>
		</div>
	</body>	
</html>