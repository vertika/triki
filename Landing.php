<?php

	require "fb-sdk/facebook.php";

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
						if ($user) {
							echo 'UserID: ' .$user;
							echo '<a href="logout.php">Logout</a>'; 
						}
						else {
							$loginUrl = $facebook->getLoginUrl(array(
									'redirect_uri' => 'http://www.rzchou.com/Home.php'
								));
							echo '<div class="fbimage"><a href="' . $loginUrl . '" target="_top"><img src="img/active_404.png"></a></div>';
						}
						
					?>
					
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