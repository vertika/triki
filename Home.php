<!-- 
Accessing the DB.
within php braces

	require_once('connection.php');

	$username = $_SESSION['username'];
	 	 
	$username = mysqli_real_escape_string($db, $username); //this is the key we use to query the database.
	 
	$query = "SELECT * 
	        FROM gamestats
	        WHERE username = '$username';";
	 
	$result = mysqli_query($db, $query);
	 
	if(mysqli_num_rows($result) == 0){
		die ("Database query failed.");
	}
	else {
	    $gameData = mysqli_fetch_array($result, MYSQL_ASSOC);
	    $_SESSION['<categoryname>'] = $gameData['<categoryname>'] //this will return you the number of times this category was played as an integer
	    //and assigned to a session variable or any other variable if you prefer.
	}

	mysqli_close($db);
	 
end of php braces

-->


<?php
	session_start();
	$loggedin = $_SESSION['loggedin'];
	
	if ($loggedin) {
		require_once ('connection.php');
		$username = $_SESSION['username'];
		$firstname = $_SESSION['firstname'];
		$lastname = $_SESSION['lastname'];
		$email = $_SESSION['email'];
		$user_about_me = $_SESSION['user_about_me'];
		
		//User game history variables
	}
	else {
		header('Location: Landing.php');
	}

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
				 <?php
					$name="Pauline";
					$lname="Low";
					$eadd="triki.@umich.edu";
					$aboutme="Triki wiki is the game to play!";
				?>

				<h2><b><?=$name?> <?=$lname?></b></h2>
				<p><b>Email: </b> <?=$eadd?></p>
				<h3>About Me:</h3>
				<p><?=$aboutme?></p>
				<p></p>
				<!-- Button trigger modal -->
				<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Edit Your Profile</button>
				<p></p>
			</div>
		</div>


		<div class="container">
			<h3>Game Stats:</h3>
		</div>
		<div class="container" id="profile">
			<div class="jumbotron">
			<h4>Total Games Played: 50 </h4>
			<h4>Categories Played:  </h4>
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

<?php
	mysqli_close($db);
?>
