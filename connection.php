<?php
	$mysql_hostname = "localhost";
	$mysql_user = "roy";
	$mysql_password = "chou";
	$mysql_database = "test";
	$db = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);

	if (mysqli_connect_errno()){
		die ("Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
	}
?>