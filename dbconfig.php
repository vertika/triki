<?php
	// define ("DB_HOST", "www.rzchou.com");
	// define ("DB_USER", "roy");
	// define ("DB_PASSWD", "chou");
	// define ("DB_NAME", "test");

	$mysql_hostname = "www.rzchou.com";
	$mysql_user = "roy";
	$mysql_password = "chou";
	$mysql_database = "test";
	$link = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");

	// $link = mysql_connect (DB_HOST, DB_USER, DB_PASSWD) or die ("Couldn't make connection.");
	mysql_select_db (mysql_database, $link) or die ("Could not select database");
?>