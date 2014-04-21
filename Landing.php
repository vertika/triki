<?php

session_start();
$_SESSION['loggedin'] = 0;
// require "fb-sdk/facebook.php";
// //include "connection.php";
// $facebook = new Facebook(array(
// 	'appId'		=> '578241305624655',
// 	'secret' 	=> '163708fdec7503fe860750419670152a',
// 	));
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title> Triki </title>

	<meta  name="viewport" content="width=device-width,initial-scale=1.0">
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/LandingStyleSheet.css">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">

</head>
<body>

	<div id="wrapper">
		<div align="center"><img id="blah" src="img/logo.png"></div>

		<br>
		<br>

		<div id="landingPanel"class="panel panel-info">
			<div class="panel-body">
				<div id="signin" class="col-xs-6">
					<form id="form1" name="form1" method="post" action="login.php" align="center">
						<table width="510" border="0" align="center">
							<tr>
								<td colspan="2"><h4>Are you a registered user?</h4></td>
							</tr>
							<tr>
								<!-- <td><b>Username:</b></td> -->
								<td colspan="2">Username: <input type="text" name="username" id="username" /></td>
							</tr>
							<tr>
								<!-- <td><b>Password:</b></td> -->
								<td colspan="2">Password: <input type="password" name="password" id="password" /></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<!--<td><input type="submit" name="button" id="button" value="Submit" /></td>-->
							</tr>
						</table>
						<!--<label>-->
						<!-- </label> -->
						<input type="submit" value="Sign In" class="btn btn-success">
						<!-- <button type="button" class="btn btn-success" input type="submit" name="button" id="button" value="Submit">Sign in</button> -->
					</form>
				</div>

				<div id="signup" class="col-xs-6">
					<h4>Why Sign Up? </h4>
					<p>1. You will be able to keep track of your scores</p>
					<p>2. You can view your most played categories</p>
					<form action="register.php" >
						<input type="submit" value="Sign Up!" class="btn btn-success">
					</form>
					<!-- <button type="button" class="btn btn-success">Sign up<a href="register.php"></a></button> -->
				</div>

			</div>
		</div>


	</body>
	</html>
