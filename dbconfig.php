<?php
	define ("DB_HOST", "www.rzchou.com");
	define ("DB_USER", "roy");
	define ("DB_PASSWD", "chou");
	define ("DB_NAME", "test");

	$link = mysql_connect (DB_HOST, DB_USER, DB_PASS) or die ("Couldn't make connection.");
	$db = mysql_select_db (DB_NAME, $link) or die ("Couldn't select database");
?>