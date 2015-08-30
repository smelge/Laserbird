<?php
	include ('./includes/portfolio_database.php');
	// $dbport
?>
<div class="col-sm-12 banner">
	<a href="./index.php">
		<!-- Banner Image 1200 x 150 -->
		<img class="img-responsive" src="./assets/logo.jpg" alt="Laserbird Logo" style="margin:0;"/>
	</a>
</div>
<div class="col-sm-12 navbar">
	<ul>
		<a href="./index.php"><li>Home</li></a>

		<li>Hosting Packages
			<ul>
				<a href="./packages.php?type=personal"><li>Personal Hosting</li></a>
				<a href="./packages.php?type=smallbusiness"><li>Small Business Hosting</li></a>
				<a href="./packages.php?type=standardbusiness"><li>Standard Business Hosting</li></a>
				<a href="./packages.php?type=largebusiness"><li>Large Business Hosting</li></a>	
				<a href="./packages.php?type=custom"><li>Custom Hosting</li></a>
			</ul>
		</li>
		<a href="./quotation.php"><li>Get a Quote</li></a>

		<li>Portfolio
			<ul>
				<?php
					$port_set = mysqli_query($dbport,"SELECT * FROM `portfolio` WHERE `display` = 1 ORDER BY `title` ASC");
					while ($port = mysqli_fetch_array($port_set)){
						echo '<a href="./portfolio.php?site='.$port['pagelink'].'"><li>'.$port['title'].'</li></a>';
					}
				?>
			</ul>
		</li>
		<!--
		<a href="./contact.php"><li>Contact Us</li></a>
		<a href="./support.php"><li>Support</li></a>
		<a href="./client.php"><li>Client Login</li></a>		
		-->
	</ul>
</div>