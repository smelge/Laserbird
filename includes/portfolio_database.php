<?php
	$hostname = "10.169.0.48";
	$username = "laserbir_site";
	$password = ",m%:8@o07?{WZ[U";

	$dbport = mysqli_connect($hostname, $username, $password);
	mysqli_select_db($dbport, "laserbir_site") or die ("Could not connect to Portfolio");
?>