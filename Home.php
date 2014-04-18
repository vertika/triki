<?php
	session_start();

	//Hi Pauline, you can use the variables here for your profile infomation. Note that these are grabbed from facebook.
	//I have to include some checks in Landing.php to check if the info is available before passing it through the session.
	//Right now just assume that all uses have all the info below.
	//Just in case, you can reference the <div class "roytest"> below for an example on how to access the variables.
	$username = $_SESSION['username'];
	$firstname = $_SESSION['firstname'];
	$lastname = $_SESSION['lastname'];
	$email = $_SESSION['email'];
	$user_about_me = $_SESSION['user_about_me'];
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
		<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/trikiStyles.css">

		<!-- JQuery -->
		<script src="js/jquery-2.1.0.min.js"></script>

		<!-- Custom -->
		<script src="js/js/homePage.js"></script>


		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    	<script type="text/javascript">
      	google.load("visualization", "1", {packages:["corechart"]});
      	google.setOnLoadCallback(drawChart);
      	function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Categories Played', 'Number of Times Played'],
          ['Physics',     11],
          ['American History',      2],
          ['Science',  2],
          ['Music', 2],
          ['Science and Technology',    7]
        ]);

        var options = {
          title: '',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      	}
    	</script>

	</head>
	<body>
		<nav id= "navBar" class="navbar navbar-default" data-toggle="collapse" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="Home.php">
						<img src="img/navbarlogo.png" height="110%" align="middle" alt="Triki">
					</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li  class="active"><a href="Home.php">Home</a></li>
						<li><a href="About.php">About</a></li>
						<li><a href="Category.php">Play</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><?php echo '<a href="logout.php">Logout</a>';?></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		<p></p>


		<!-- Start code here: -->

		<div class="container">
			<?php
			echo "<img src='http://graph.facebook.com/".$username."/picture?type=large'/>";
			?>
		<!-- <img src="User-blue-icon.png"
						title="User name" height="20%" width="20%"/> -->
		</div>
		<div class="container" id="profile">
			<div class="jumbotron">
				<!-- <?php
					$name="Pauline";
					$lname="Low";
					$eadd="triki.@umich.edu";
					$aboutme="Triki wiki is the game to play!";
				?> -->

				<h1><?=$firstname?> <?=$lastname?></h1>
				<p><b>Email: </b> <?=$email?></p>
				<h1>About Me:</h1>
				<p><?=$user_about_me?></p>
				<p></p>
				<!-- Button trigger modal -->
				<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Edit Your Profile</button>
				<p></p>
			</div>
		</div>


		<div class="container">
			<h1>Game Stats:</h1>
		</div>
		<div class="container" id="profile">
			<div class="jumbotron">
			<h3><b>Total Games Played: 50</b> </h3>
			<h3><b>Categories Played: </b> </h3>
			<div id="piechart_3d" style="width: 900px; height: 500px;"></div>
			<p></p>
			</div>
		</div>

		<p></p>



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


		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/bootstrap/bootstrap.js"></script>
	</body>

</html>
