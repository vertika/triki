<?php
	include "dbconfig.php";

	if ($_POST[ 'name' ]!="") {
		$name = mysql_real_escape_string($_POST["name"]);
		$email = mysql_real_escape_string($_POST["email"]);
		$password = mysql_real_escape_string($_POST["password"]);
		 
		$sql = "insert into members set name='".$name."', email='".$email."', password='".md5($password)."' ";
		$sql = mysql_query($sql);
		 
		 
		 
		$msg = '<p class = "tanx"---->Thank you for completing your online registration form!.';
	}
	else {
		$msg = "Your enquiry sending failed";
	}
?>
