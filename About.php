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

		<div class="container">
		<h2>
		What is Triki?
		</h2>
		<div class="container">
			<div class="jumbotron">
				<p style="font-size:20px;">Triki is an educational online trivia game and it is different from other trivia games as it utilizes
				<i>Wikipedia</i> as a source to generate questions for players.</p>
			</div>
		</div>
		<h2>How to Play?
			<button class="btn btn-primary collapsed" data-toggle="collapse" data-target="#intro1"></button>
		</h2>
		<div id="intro1" class="collapse">
			<div class="container">
				<div class="jumbotron">
					<p style="font-size:20px;">You can play Triki by logging in with either Facebook or as a registered user. After log in, you can proceed
					by clicking on the <i>Play</i>
					tab on top of the page. Before starting the game, you will need to choose the categories that you want to play.
					When you have successfully picked the categories, you can proceed to the game by clicking on <i>Start Game!</i>
					You will be given 5 minutes to answer as many questions as you can correctly. If your answer is correct, you will
					see a green mark on the question and if your answer is incorrect, you will see a red mark instead. The game ends
					when the timer goes off. After the game has ended, you will see the <i>Results</i> page whereby you can see the
					links for the questions that are incorrect.</p>
				</div>
			</div>
		</div>


		<h2>Learn more about us
			<button class="btn btn-primary collapsed" data-toggle="collapse" data-target="#intro2"></button>
		</h2>
		<div id="intro2" class="collapse">
  				<div class="row">
   					<div class="col-md-3"><h4 align="center">Mark</h4></div>
   					<div class="col-md-3"><h4 align="center">Vertika</h4></div>
    				<div class="col-md-3"><h4 align="center">Roy</h4></div>

    				<div class="col-md-3">
    				<img src="img/pauline.jpg" height="50%" width="50%" class="img-rounded" align="center">
    				<h4><i>Pauline Low</i></h4>
    				<p><i>"Triki wiki is the game to play!"</i></p>
    				</div>
				</div>
		</div>

		</div>

		<p></p>

		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/bootstrap/bootstrap.js"></script>
	</body>

</html>
