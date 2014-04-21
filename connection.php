<?php
	$mysql_hostname = "localhost";
	$mysql_user = "trikiadmin";
	$mysql_password = "uaf";
	$mysql_database = "triki";
	$db = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);

	if (mysqli_connect_errno()){
		die ("Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
	}
?>