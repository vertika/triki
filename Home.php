<?php
	session_start();

	//Hi Pauline, you can use the variables here for your profile infomation. Note that these are grabbed from facebook.
	//I have to include some checks in Landing.php to check if the info is available before passing it through the session.
	//Right now just assume that all uses have all the info below.
	//Just in case, you can reference the <div class "roytest"> below for an example on how to access the variables.

	//$firstname = $_SESSION['firstname'];
	//$lastname = $_SESSION['lastname'];
	//$email = $_SESSION['email'];
	//$user_about_me = $_SESSION['user_about_me'];
	//$user_photos = $_SESSION['user_photos']; //Still not too sure how to access the photos variables.

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title> Triki </title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta  name="viewport" content="width=device-width,initial-scale=1.0">
		
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
		<link href="css/home.css" rel="stylesheet">
		
		<link rel="stylesheet" type="text/css" href="trikiStyles.css" media="screen" />
		
		<!-- Custom -->
		<script src="js/js/homePage.js"></script>

	</head>
	<body>
		<div class="container" align="center">
			<a href="Home.html"><img src="trikiIcon.jpg"
			title="trikiIcon" height="30%" width="30%"></a>
		</div>
		
		<div class="navbar">
			<div class="navbar-inner">
			<div class="container">
				<ul class="nav">
					<li class="active"><a href="Home.php"><b>Home</b></a></li>
					<li><a href="About.php"><b>About</b></a></li>
					<li><a href="Category.php"><b>Play</b></a></li>
					<li><?php echo '<a href="logout.php">Logout</a>';?></li>
				</ul>
			</div>
			</div>
		</div>
		<p></p>
		
		
		<!-- Start code here: -->
		<!--
		<div class="roytest">
			<?php
				 echo $firstname;
				 echo $lastname;
				 echo $user_about_me;
				 echo $email;
				 echo $user_photos;

			?>
			 example code 
			-->
		
		</div>
		<div class="container">
		<img src="User-blue-icon.png"
						title="User name" height="20%" width="20%"/>
		</div>
		<div class="container" id="profile">
			<div class="jumbotron">
				<?php
					$name="Pauline";
					$lname="Low";
					$eadd="triki.@umich.edu";
					$aboutme="Triki wiki is the game to play!";
				?>
				
				<h1><?=$name?> <?=$lname?></h1>
				<p><b>Email: </b> <?=$eadd?></p>
				<h1>About Me:</h1>
				<p><?=$aboutme?></p>
		
			</div>
		</div>
		
		<p></p>
		
		<div class="container">
		<!-- Button trigger modal -->
	    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Edit Your Profile</button>
		</div>
		
		<p></p>
		<!-- Modal --->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Edit Your Profile</h4>
			  </div>
			<div class="modal-body" align="center">
				<div class="fileupload fileupload-new" data-provides="fileupload">
					<div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
						<div>
							<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" /></span>
							<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
						 </div>
				</div>
					
				<form role="form">
					<div class="form-group">
						<label for="userFirstName"> <b>First Name</b> </label>
						<input type="userFirstName" class="form-control" id="userFirstName" placeholder="Enter first name">
						<label for="userLastName"> <b>Last Name</b> </label>
						<input type="userLastName" class="form-control" id="userLastName" placeholder="Enter last name">
						<label for="email"> <b>Email address</b> </label>
						<input type="email" class="form-control" id="email" placeholder="Enter email">
						<label for="about"> <b>About</b> </label>
						<input type="about" class="form-control" id="about" placeholder="Describe yourself here...">
					</div>
				</form>
					
			</div>
				
			</div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			  </div>
			</div>
		</div>

	
		<!-- End code here! -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>
	
</html>
