<!DOCTYPE html>
<html lang="en">
	<head>
		<title> Triki </title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta  name="viewport" content="width=device-width,initial-scale=1.0">

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/trikiStyles.css">

		<!-- JQuery -->
		<script src="js/jquery-2.1.0.min.js"></script>

		<!-- Custom Scripts -->
		<script src="js/WikiTravScript.js"></script>
		<script src="js/gamePage.js"></script>

	</head>
	<body>

		<!-- Navigation Header -->
		<div class="container" align="center">
			<a href="Home.html"><img src="trikiIcon.jpg"
			title="trikiIcon" height="30%" width="30%"></a>
		</div>

		<div class="navbar">
			<div class="navbar-inner">
			<div class="container">
				<ul class="nav">
<<<<<<< HEAD
					<li><a href="Home.php">Home</a></li>
					<li><a href="About.html">About</a></li>
					<li><a href="Rules.html">Rules</a></li>
					<li><a href="Challenges.html">Challenges</a></li>
					<li><a href="Category.html">Play!</a></li>
=======
					<li><a href="Home.html"><b>Home</b></a></li>
					<li><a href="About.html"><b>About</b></a></li>
					<li><a href="Category.html"><b>Play</b></a></li>
					<li><a href="Landing.html"><b>Log Out</b></a></li>

>>>>>>> b96131c1440685a1145cd5cae8b82081d51b4ac7
				</ul>
			</div>
			</div>
		</div>
		<p></p>

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
        <button onclick="togglePause()" type="button" class="btn btn-primary">pause</button>
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

				<p id="option1"></p>
				<p id="option2"></p>
				<p id="option3"></p>
				<p id="option4"></p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Pass</button>
        <button type="button" class="btn btn-primary">Lock-In</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- Game board -->


<div class="hero-unit" style="margin:0px auto; width:80%">
	<div class="container">
		<div id="column1" style="float:left; margin:0px auto; width:33%;">
			<img src="User-blue-icon.png"
						title="User name" height="20%" width="20%"/>

					</div>

					<div id="column2" style="float:left;margin:0px auto;width:33%;">
						<p>User Name</p>
						<p>Current Score:</p>
					</div>

					<div id="column3" style="float:left;margin:0px auto;width:33%">
						<p>Time Left:
					</div>
			</div>
		</div>

		<p>
		</p>

			<div class="container">

				<div class="btn-group btn-group-vertical" style="float:left;margin:0px auto; width:16%">
					<p id="category1-label"></p>
					<button onclick="questionSelected(1)" type="button" class="btn btn-primary pull">1</button>
					<button onclick="questionSelected(2)" type="button" class="btn btn-primary pull">2</button>
					<button onclick="questionSelected(3)" type="button" class="btn btn-primary pull">3</button>
					<button onclick="questionSelected(4)" type="button" class="btn btn-primary pull">4</button>
					<button onclick="questionSelected(5)" type="button" class="btn btn-primary pull">5</button>
				</div>

				<div class="btn-group btn-group-vertical" style="float:left;margin:0px auto; width:16%">

					<button onclick="questionSelected(6)" type="button" class="btn btn-primary pull">1</button>
					<button onclick="questionSelected(7)" type="button" class="btn btn-primary pull">2</button>
					<button onclick="questionSelected(8)" type="button" class="btn btn-primary pull">3</button>
					<button onclick="questionSelected(9)" type="button" class="btn btn-primary pull">4</button>
					<button onclick="questionSelected(10)" type="button" class="btn btn-primary pull">5</button>
				</div>

				<div class="btn-group btn-group-vertical" style="float:left;margin:0px auto; width:16%">
					<button onclick="questionSelected(11)" type="button" class="btn btn-primary pull">1</button>
					<button onclick="questionSelected(12)" type="button" class="btn btn-primary pull">2</button>
					<button onclick="questionSelected(13)" type="button" class="btn btn-primary pull">3</button>
					<button onclick="questionSelected(14)" type="button" class="btn btn-primary pull">4</button>
					<button onclick="questionSelected(15)" type="button" class="btn btn-primary pull">5</button>
				</div>

				<div class="btn-group btn-group-vertical" style="float:left;margin:0px auto; width:16%">
					<button onclick="questionSelected(16)" type="button" class="btn btn-primary pull">1</button>
					<button onclick="questionSelected(17)" type="button" class="btn btn-primary pull">2</button>
					<button onclick="questionSelected(18)" type="button" class="btn btn-primary pull">3</button>
					<button onclick="questionSelected(19)" type="button" class="btn btn-primary pull">4</button>
					<button onclick="questionSelected(20)" type="button" class="btn btn-primary pull">5</button>
				</div>

				<div class="btn-group btn-group-vertical" style="float:left;margin:0px auto; width:16%">
					<button onclick="questionSelected(21)" type="button" class="btn btn-primary pull">1</button>
					<button onclick="questionSelected(22)" type="button" class="btn btn-primary pull">2</button>
					<button onclick="questionSelected(23)" type="button" class="btn btn-primary pull">3</button>
					<button onclick="questionSelected(24)" type="button" class="btn btn-primary pull">4</button>
					<button onclick="questionSelected(25)" type="button" class="btn btn-primary pull">5</button>
				</div>

				<div class="btn-group btn-group-vertical" style="float:left;margin:0px auto; width:16%">
					<button onclick="questionSelected(26)" type="button" class="btn btn-primary pull">1</button>
					<button onclick="questionSelected(27)" type="button" class="btn btn-primary pull">2</button>
					<button onclick="questionSelected(28)" type="button" class="btn btn-primary pull">3</button>
					<button onclick="questionSelected(29)" type="button" class="btn btn-primary pull">4</button>
					<button onclick="questionSelected(30)" type="button" class="btn btn-primary pull">5</button>
				</div>

			</div>


		<p></p>

		<div class="hero-unit" style="margin:0px auto; width:80%">
			<div class="container">
				<a href="Home.html" class="btn btn-larde btn-danger" style="float:right;margin:0px auto;width:10%"> Quit Game </a>
			</div>
		</div>
		<p></p>


		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>

</html>
