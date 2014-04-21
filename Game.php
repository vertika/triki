<?php
	session_start();
	$loggedin = $_SESSION['loggedin'];
	if ($loggedin) {
		$username = $_SESSION['username'];
	}
	else {
		echo "not logged in";
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

	<!-- Custom Scripts -->
	<script src="js/WikiTravScript.js"></script>
	<script src="js/gamePage.js"></script>

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
				<a class="navbar-brand" href="Home.php">
					<img src="img/navbarlogo.png" height="110%" align="middle" alt="Triki">
				</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="Home.php">Home</a></li>
					<li><a href="About.php">About</a></li>
					<li class="active"><a href="Category.php">Play</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><?php echo '<a href="logout.php">Logout</a>';?></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<script>
		$('#navBar').hide();
	</script>

	<!-- Game -->

	<!-- Modal Loading Window -->
	<div id="countdown-modal" class="modal fade">
		<div class="modal-dialog">
			<div id="countdown-modal-content" class="modal-content">
				<div id= "countdown-modal-body" class="modal-body">
					<!-- put countdown script -->
					<div id="gameCountdown">5</div>
				</div>
				<div id="countdown-modal-footer" class="modal-footer">
					<div id="numQuestionsGenerated"></div>
					<button onclick="togglePause()" type="button" data-toggle="button" class="btn btn-primary">pause</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

	<!-- Modal Question Window -->
	<div id="question-modal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<p id="questionText"></p>
				</div>
				<div class="modal-body">

					<div class="btn-group-vertical">
						<button onclick= "selectedOption(id)" id= "option1" type="button" class="btn btn-primary"></button>
						<button onclick= "selectedOption(id)" id= "option2" type="button" class="btn btn-primary"></button>
						<button onclick= "selectedOption(id)" id= "option3" type="button" class="btn btn-primary"></button>
						<button onclick= "selectedOption(id)" id= "option4" type="button" class="btn btn-primary"></button>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Pass</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

	<!-- Game board -->

	<div id="gamePanel" class="panel panel-default" data-toggle="collapse" id="accordion">
		<div id="gamePanelHeading" class="panel-heading">
			<div class="container">
				<div id="gamePanelHeaderLabels">
					<span>Score</span>
					<span class="pull-right">Time Remaining</span>
				</div>
				<div>
					<span id="scoreLabel">0/30</span>
					<span id="timeRemainingLabel" class="pull-right">4:00</span>
				</div>
			</div>
		</div>

		<div class="panel-body">
			<div class="container">
				<div id= "questionColumn" class="btn-group btn-group-vertical">
					<span id="categoryLabel1" class="label label-warning"> </span>
					<button id="questionButton0" onclick="questionSelected(0, id)" type="button" class="btn btn-primary pull">Q</button>
					<button id="questionButton1" onclick="questionSelected(1, id)" type="button" class="btn btn-primary pull">Q</button>
					<button id="questionButton2" onclick="questionSelected(2, id)" type="button" class="btn btn-primary pull">Q</button>
					<button id="questionButton3" onclick="questionSelected(3, id)" type="button" class="btn btn-primary pull">Q</button>
					<button id="questionButton4" onclick="questionSelected(4, id)" type="button" class="btn btn-primary pull">Q</button>
				</div>

				<div id= "questionColumn" class="btn-group btn-group-vertical">
					<span id="categoryLabel2" class="label label-warning"> </span>
					<button id="questionButton5" onclick="questionSelected(5, id)" type="button" class="btn btn-primary pull">Q</button>
					<button id="questionButton6" onclick="questionSelected(6, id)" type="button" class="btn btn-primary pull">Q</button>
					<button id="questionButton7" onclick="questionSelected(7, id)" type="button" class="btn btn-primary pull">Q</button>
					<button id="questionButton8" onclick="questionSelected(8, id)" type="button" class="btn btn-primary pull">Q</button>
					<button id="questionButton9" onclick="questionSelected(9, id)" type="button" class="btn btn-primary pull">Q</button>
				</div>
				<div id= "questionColumn" class="btn-group btn-group-vertical">
					<span id="categoryLabel3" class="label label-warning"> </span>
					<button id="questionButton10" onclick="questionSelected(10, id)" type="button" class="btn btn-primary pull">Q</button>
					<button id="questionButton11" onclick="questionSelected(11, id)" type="button" class="btn btn-primary pull">Q</button>
					<button id="questionButton12" onclick="questionSelected(12, id)" type="button" class="btn btn-primary pull">Q</button>
					<button id="questionButton13" onclick="questionSelected(13, id)" type="button" class="btn btn-primary pull">Q</button>
					<button id="questionButton14" onclick="questionSelected(14, id)" type="button" class="btn btn-primary pull">Q</button>
				</div>
				<div id= "questionColumn" class="btn-group btn-group-vertical">
					<span id="categoryLabel4" class="label label-warning"> </span>
					<button id="questionButton15" onclick="questionSelected(15, id)" type="button" class="btn btn-primary pull">Q</button>
					<button id="questionButton16" onclick="questionSelected(16, id)" type="button" class="btn btn-primary pull">Q</button>
					<button id="questionButton17" onclick="questionSelected(17, id)" type="button" class="btn btn-primary pull">Q</button>
					<button id="questionButton18" onclick="questionSelected(18, id)" type="button" class="btn btn-primary pull">Q</button>
					<button id="questionButton19" onclick="questionSelected(19, id)" type="button" class="btn btn-primary pull">Q</button>
				</div>
				<div id= "questionColumn" class="btn-group btn-group-vertical">
					<span id="categoryLabel5" class="label label-warning"> </span>
					<button id="questionButton20" onclick="questionSelected(20, id)" type="button" class="btn btn-primary pull">Q</button>
					<button id="questionButton21" onclick="questionSelected(21, id)" type="button" class="btn btn-primary pull">Q</button>
					<button id="questionButton22" onclick="questionSelected(22, id)" type="button" class="btn btn-primary pull">Q</button>
					<button id="questionButton23" onclick="questionSelected(23, id)" type="button" class="btn btn-primary pull">Q</button>
					<button id="questionButton24" onclick="questionSelected(24, id)" type="button" class="btn btn-primary pull">Q</button>
				</div>
				<div id= "questionColumn" class="btn-group btn-group-vertical">
					<span id="categoryLabel6" class="label label-warning"> </span>
					<button id="questionButton25" onclick="questionSelected(25, id)" type="button" class="btn btn-primary pull">Q</button>
					<button id="questionButton26" onclick="questionSelected(26, id)" type="button" class="btn btn-primary pull">Q</button>
					<button id="questionButton27" onclick="questionSelected(27, id)" type="button" class="btn btn-primary pull">Q</button>
					<button id="questionButton28" onclick="questionSelected(28, id)" type="button" class="btn btn-primary pull">Q</button>
					<button id="questionButton29" onclick="questionSelected(29, id)" type="button" class="btn btn-primary pull">Q</button>
				</div>
			</div>
		</div>

		<div class="panel-footer">
			<div class="container">
				<button id="giveUpButton" onclick="giveUpPressed()" type="button" class="btn btn-danger pull-right">Give Up.. Man</button>
			</div>
		</div>
	</div>

	<!-- Results -->
	<div id="resultsPanel" class="panel panel-info" data-toggle="collapse">
		<div class="panel-heading">
			<h3 id="resultsPanelHeader" class="panel-title">Congratulations,  you got [score] correct!</h3>
		</div>

		<div class="panel-group panel-body" id="accordion">
			<div class="panel panel-default" id="resultPanel-title-color-category0">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a id="resultPanel-title-category0" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
							Category, [5/5]
						</a>
					</h4>
				</div>
				<div id="collapseOne" class="panel-collapse collapse in">
					<div id="resultPanel-body-category0" class="panel-body">
					</div>
				</div>
			</div>
			<div class="panel panel-default" id="resultPanel-title-color-category1">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a id="resultPanel-title-category1" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
							Category, [2/5]
						</a>
					</h4>
				</div>
				<div id="collapseTwo" class="panel-collapse collapse">
					<div id="resultPanel-body-category1" class="panel-body">
					</div>
				</div>
			</div>
			<div class="panel panel-default" id="resultPanel-title-color-category2">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a id="resultPanel-title-category2" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
							Category, [4/5]
						</a>
					</h4>
				</div>
				<div id="collapseThree" class="panel-collapse collapse">
					<div id="resultPanel-body-category2" class="panel-body">
					</div>
				</div>
			</div>
			<div class="panel panel-default" id="resultPanel-title-color-category3">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a id="resultPanel-title-category3" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
							Category, [5/5]
						</a>
					</h4>
				</div>
				<div id="collapseFour" class="panel-collapse collapse">
					<div id="resultPanel-body-category3" class="panel-body">
					</div>
				</div>
			</div>
			<div class="panel panel-default" id="resultPanel-title-color-category4">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a id="resultPanel-title-category4" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
							Category, [4/5]
						</a>
					</h4>
				</div>
				<div id="collapseFive" class="panel-collapse collapse">
					<div id="resultPanel-body-category4" class="panel-body">
					</div>
				</div>
			</div>
			<div class="panel panel-default" id="resultPanel-title-color-category5">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a id="resultPanel-title-category5" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
							Category, [4/5]
						</a>
					</h4>
				</div>
				<div id="collapseSix" class="panel-collapse collapse">
					<div id="resultPanel-body-category5" class="panel-body">
					</div>
				</div>
			</div>
		</div>

		<div id="resultsFooter" class="panel-footer">
			<button id="playAgainButton" onclick="rePlayPressed()" type="button" class="btn btn-success pull-right">Play Again</button>
<!--			<button id="newCategoriesButton" type="button" class="btn btn-success pull-right">New Categories</button> -->
		</div>
	</div>

	<script>
  	$('#resultsPanel').hide();
	</script>

	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/bootstrap/bootstrap.js"></script>
</body>

</html>
