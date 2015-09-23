<?php
	$hostname = "";
	$username = "";
	$password = "";
	$table ="";

	$dbport = mysqli_connect($hostname, $username, $password);
	mysqli_select_db($dbport, $table) or die ("Could not connect to Portfolio");
?>
