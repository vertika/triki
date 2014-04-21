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
			<div id="content">
				<div align="center"><img id="blah" src="img/logo.png"></div>
				
				<div class="container-fluid">
				<!--</div>-->
					<!--<div id="signin" class="container" width="50%">-->
					<div class="row-fluid">
      					<div class="col-md-7">
							<form id="form1" name="form1" method="post" action="login.php" align="center">
								<table width="510" border="0" align="center">
									<tr>
										<td colspan="2"><h4>Are you a registered user?</h4></td>
									</tr>
									<tr>
										<!-- <td><b>Username:</b></td> -->
										<td><b>Username:</b><input type="text" name="username" id="username" /></td>
									</tr>
									<tr>
										<td><b>Password:</b></td>
										<td><input type="password" name="password" id="password" /></td>
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
						<!-- <h4 align="center">OR</h4>
								<?php
									// $user = $facebook->getUser();
									// //Check if use is logged in to FB
									// if ($user) {
									// 	//echo '$UserID: ', $user, '</p>';
									// 	$user_graph = $facebook->api('/me');
									// 	//echo '<pre>', print_r($user_graph),'</pre>';

									// 	//echo '<pre>', print_r($user_graph['first_name']),'</pre>';
									// 	//$_SESSION['uid'] = $user_graph['id'];
									// 	$_SESSION['firstname'] = $user_graph['first_name'];
									// 	$_SESSION['lastname'] = $user_graph['last_name'];
									// 	$_SESSION['email'] = $user_graph['email'];
									// 	$_SESSION['user_about_me'] = $user_graph['user_about_me'];
									// 	$_SESSION['username'] = $user_graph['username'];
									// 	$_SESSION['loggedin'] = 1;
									// 	header ('Location: Home.php');
									// 	//echo '<a href="logout.php">Logout</a>';
									// }
									// else {
									// 	$_SESSION['loggedin'] = 0;
									// 	$loginUrl = $facebook->getLoginUrl(array(
									// 		'scope' => 'user_about_me, email, user_photos',
									// 		'redirect_uri' => 'http://www.rzchou.com/Landing.php'
									// 		));
									// 	echo '<div class="fbimage"><a href="' . $loginUrl . '" target="_top"><img src="img/active_404.png"></a></div>';
									// }
								?> -->
								
					
					</div>
					
				<div class="col-md-5">
					<h4>Why Sign Up? </h4>
					<p>1. You will be able to keep track of your scores</p>
					<p>2. You can view your most played categories</p>
					<form action="register.php" >
						<input type="submit" value="Sign Up!" class="btn btn-success">
					</form>
					<!-- <button type="button" class="btn btn-success">Sign up<a href="register.php"></a></button> -->
				</div>
				
			</div> <!--container-->

			<footer id="footer">
				<li>
					<a href="">About</a>
				</li>
				<li>
					<a href="">FAQ</a>
				</li>
				<li>
					<a href="">Blog</a>
				</li>
				<li>
					<a href="">Terms of Use</a>
				</li>
			</footer>
		</div>

		
	</body>
</html>