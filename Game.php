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
						<button onclick= "selectedOption(id)" id= "option1" type="button" class="btn btn-default"></button>
						<button onclick= "selectedOption(id)" id= "option2" type="button" class="btn btn-default"></button>
						<button onclick= "selectedOption(id)" id= "option3" type="button" class="btn btn-default"></button>
						<button onclick= "selectedOption(id)" id= "option4" type="button" class="btn btn-default"></button>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Pass</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->


	<!-- Game board -->

	<div id="gamePanel" class="panel panel-default">

		<div id="gamePanelHeading" class="panel-heading">
			<div class="container">
				<div id="gamePanelHeaderLabels">
					<span>Score</span>
					<span class="pull-right">Time Remaining</span>
				</div>
				<div>
					<span id="scoreLabel">0/30</span>
					<span id="timeRemainingLabel" class="pull-right">3:00</span>
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
				<a href="Home.html" id="giveUpButton" class="btn btn-danger pull-right">Give Up.. Man</a>
			</div>
		</div>

	</div>


	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/bootstrap/bootstrap.js"></script>
</body>

</html>
