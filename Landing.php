<?php

	session_start();

	require "fb-sdk/facebook.php";
	include "connection.php";
	$facebook = new Facebook(array(
		'appId'		=> '578241305624655',
		'secret' 	=> '163708fdec7503fe860750419670152a',
		));
?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<title> Triki </title>

		<meta  name="viewport" content="width=device-width,initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/LandingStyleSheet.css">

	</head>
	<body>

		<div id="wrapper">
			<div id="content">
				<img id="blah" src="img/logo.png">
				<br>
				<br>
				<div id="loginContainer" align="center">
					<?php
						$user = $facebook->getUser();
						//Check if use is logged in to FB
						if ($user) {
							//echo '$UserID: ', $user, '</p>';
							$user_graph = $facebook->api('/me');
							//echo '<pre>', print_r($user_graph),'</pre>';

							//echo '<pre>', print_r($user_graph['first_name']),'</pre>';
							//$_SESSION['uid'] = $user_graph['id'];
							$_SESSION['firstname'] = $user_graph['first_name'];
							$_SESSION['lastname'] = $user_graph['last_name'];
							$_SESSION['email'] = $user_graph['email'];
							$_SESSION['user_about_me'] = $user_graph['user_about_me'];
							//$_SESSION['user_photos'] = $user_graph['user_photos'];
							$_SESSION['username'] = $user_graph['username'];
							
							header ('Location: Home.php');
							//echo '<a href="logout.php">Logout</a>';
						}
						else {
							$loginUrl = $facebook->getLoginUrl(array(
									'scope' => 'user_about_me, email, user_photos',
									'redirect_uri' => 'http://www.rzchou.com/Landing.php'
								));
							echo '<div class="fbimage"><a href="' . $loginUrl . '" target="_top"><img src="img/active_404.png"></a></div>';
						}
						
					?>
					
				</div>
				<br />
				<form id="form1" name="form1" method="post" action="login.php" align="center">
					<table width="510" border="0" align="center">
						<tr>
							<td colspan="2">Login without Facebook</td>
						</tr>
						<tr>
							<td>Username:</td>
							<td><input type="text" name="username" id="username" /></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="password" name="password" id="password" /></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><input type="submit" name="button" id="button" value="Submit" /></td>
						</tr>
					</table>
				</form>


				<div style="text-align:center">
					<a href="register.php">Register Here</a>
				</div>

				
			</div>

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