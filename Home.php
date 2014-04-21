<?php
	session_start();
	$loggedin = $_SESSION['loggedin'];
	if ($loggedin) {
		require_once ('connection.php');
		$username = $_SESSION['username'];
		$firstname = $_SESSION['firstname'];
		$lastname = $_SESSION['lastname'];
		$email = $_SESSION['email'];

		//User game history variables
		$query = "SELECT *
				FROM gamestats
				WHERE username = '$username';";
		$result = mysqli_query($db, $query);
		$gameData = mysqli_fetch_array($result, MYSQL_ASSOC);

	}
	else {
		header('Location: /');
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
          	['Agriculture‎', <?php if ($gameData["agriculture"]) echo $gameData["agriculture"]; else echo 0;?>],
			['Arts', <?=$gameData["arts"]?>],
			['Business‎', <?php if ($gameData["business"]) echo $gameData["business"]; else echo 0;?>] ,
			['Chronology‎', <?php if ($gameData["chronology"]) echo $gameData["chronology"]; else echo 0;?>],
			['Culture‎', <?php if ($gameData["culture"]) echo $gameData["culture"]; else echo 0;?>],
			['Education‎', <?php if ($gameData["education"]) echo $gameData["education"]; else echo 0;?>],
			['Environment‎', <?php if ($gameData["environment"]) echo $gameData["environment"]; else echo 0;?>],
			['Entertainment', <?php if ($gameData["entertainment"]) echo $gameData["entertainment"]; else echo 0;?>],
			['Geography', <?php if ($gameData["geography"]) echo $gameData["geography"]; else echo 0;?>],
			['Health', <?php if ($gameData["health"]) echo $gameData["health"]; else echo 0;?>],
			['History', <?php if ($gameData["history"]) echo $gameData["history"]; else echo 0;?>],
			['Humanities', <?php if ($gameData["humanities"]) echo $gameData["humanities"]; else echo 0;?>],
			['Humans', <?php if ($gameData["humans"]) echo $gameData["humans"]; else echo 0;?>],
			['Language', <?php if ($gameData["language"]) echo $gameData["language"]; else echo 0;?>],
			['Law', <?php if ($gameData["law"]) echo $gameData["law"]; else echo 0;?>],
			['Life', <?php if ($gameData["life"]) echo $gameData["life"]; else echo 0;?>],
			['Mathematics', <?php if ($gameData["mathematics"]) echo $gameData["mathematics"]; else echo 0;?>],
			['Medicine', <?php if ($gameData["medicine"]) echo $gameData["medicine"]; else echo 0;?>],
			['Nature', <?php if ($gameData["nature"]) echo $gameData["nature"]; else echo 0;?>],
			['People', <?php if ($gameData["people"]) echo $gameData["people"]; else echo 0;?>],
			['Politics', <?php if ($gameData["politics"]) echo $gameData["politics"]; else echo 0;?>],
			['Science', <?php if ($gameData["science"]) echo $gameData["science"]; else echo 0;?>],
			['Society', <?php if ($gameData["society"]) echo $gameData["society"]; else echo 0;?>],
			['Sports', <?php if ($gameData["sports"]) echo $gameData["sports"]; else echo 0;?>],
			['Technology', <?php if ($gameData["technology"]) echo $gameData["technology"]; else echo 0;?>],
			['Musicians', <?php if ($gameData["musicians"]) echo $gameData["musicians"]; else echo 0;?>],
			['Psychology', <?php if ($gameData["psychology"]) echo $gameData["psychology"]; else echo 0;?>],
			['Fashion', <?php if ($gameData["fashion"]) echo $gameData["fashion"]; else echo 0;?>],
			['Countries', <?php if ($gameData["countries"]) echo $gameData["countries"]; else echo 0;?>],
			['Animals', <?php if ($gameData["animals"]) echo $gameData["animals"]; else echo 0;?>],
			['Astrology', <?php if ($gameData["astrology"]) echo $gameData["astrology"]; else echo 0;?>],
			['Music', <?php if ($gameData["music"]) echo $gameData["music"]; else echo 0;?>],
			['Film', <?php if ($gameData["film"]) echo $gameData["film"]; else echo 0;?>],
			['Television', <?php if ($gameData["television"]) echo $gameData["television"]; else echo 0;?>],
			['Books', <?php if ($gameData["books"]) echo $gameData["books"]; else echo 0;?>]
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
	<body id="gamePageBody">
	<!-- navbar -->
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
				<a id="brandNav" class="navbar-brand" href="#Home">
					<img src="img/navbarlogo.png" height="110%" align="middle" alt="Triki">
				</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a id="homeNav" href="#Home">Home</a></li>
					<li><a id="aboutNav" href="#About">About</a></li>
					<li class="active"><a id="playNav" href="#Play">Play</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><?php echo '<a id="logoutNav" href="#Logout">Logout</a>';?></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<p></p>
<script>
	$("#brandNav").on('click', function(){
		window.location.href = 'Home.php';
	});
	$("#homeNav").on('click', function(){
		window.location.href = 'Home.php';
	});
	$("#aboutNav").on('click', function(){
		window.location.href = 'About.php';
	});
	$("#playNav").on('click', function(){
		window.location.href = 'Category.php';
	});
	$("#logoutNav").on('click', function(){
		window.location.href = 'logout.php';
	});
</script>


		<!-- Start code here: -->

		<div id="gamePanel" class="panel panel-default">

			<div class="panel-heading" id="homePanelHeading">
				<h1>Game Stats</h1>
				<h4><?php echo $firstname?></h4>
			</div>
			<div class="panel-body" id="homePanelBody">
				<div class="well" id="homeMain">

						Total games played: <p></p>
						Categories played:
						<div id="piechart_3d" style="width: 900px; height: 500px;"></div>
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
