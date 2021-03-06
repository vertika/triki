<?php
	session_start();
	$loggedin = $_SESSION['loggedin'];
	if (!$loggedin){
		header ('Location: /');
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
		<link href="css/About.css" rel="stylesheet">

		<!-- JQuery -->
		<script src="js/jquery-2.1.0.min.js"></script>

	</head>
	<body id="gamePageBody">
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
						<li class="active"><a id="aboutNav" href="#About">About</a></li>
						<li><a id="playNav" href="#Play">Play</a></li>
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
		<div class="panel panel-default" id="aboutPanel" >
			<div class="panel-body" id="aboutPanelBody">
					<h3> What is Triki?
						<button class="btn btn-primary collapsed" data-toggle="collapse" data-target="#whatIs"></button>
					</h3>
					<div id="whatIs" class="well collapse">
						<p style="font-size:18px;"> Triki is an educational online trivia game that uses <i>Wikipedia</i> as the source of its questions. Users are given the opportunity to be quizzed on selected categories and learn more about those questions answered incorrectly.</p>
					</div>

					<h3>How to Play?
						<button class="btn btn-primary collapsed" data-toggle="collapse" data-target="#intro1"></button>
					</h3>
					<div id="intro1" class="well collapse">
						<p style="font-size:18px;">Click on the <i>Play</i>
						tab to choose six categories that you want to be quized on. Click <i>Start Game</i> and experience four minutes of intense concentration to clear the game board. Green indicates a correct answer and red indicates an incorrect answer. After four minutes have passed or you have clicked <i>Give Up</i>, view your results on the <i>Results</i> page and find <i>Wikipedia</i> links related to the questions you answered incorrectly. Furthmore, navigate to the <i>Home</i> page to view your game stats and favorite categories!</p>
					</div>

					<h3>Makers
						<button class="btn btn-primary collapsed" data-toggle="collapse" data-target="#intro2"></button>
					</h3>
					<div id="intro2" class="well collapse">
			  				<div class="row">
			   					<div class="col-md-3">
			    					<img src="img/mark.jpg" height="70%" width="70%" class="img-rounded" align="center">
			    					<h5>Mark Mevorah</h5>
			    				</div>
			   					<div class="col-md-3">
			    					<img src="img/vertika.jpg" height="70%" width="70%" class="img-rounded" align="center">
			    					<h5>Vertika Srivastava</h5>
			    				</div>
			    				<div class="col-md-3">
			    					<img src="img/roy.jpg" height="70%" width="70%" class="img-rounded" align="center">
			    					<h5>Roy Chou</h5>
			    				</div>
			    				<div class="col-md-3">
			    					<img src="img/pauline.jpg" height="70%" width="70%" class="img-rounded" align="center">
			    					<h5>Pauline Low</h5>
			    				</div>
							</div>
					</div>
			</div>
		</div>




		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/bootstrap/bootstrap.js"></script>
	</body>

</html>
