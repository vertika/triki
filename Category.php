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
		<link rel="stylesheet" type="text/css" href="css/trikiStyles.css" media="screen"/>

		<!-- JQuery -->
		<script src="js/jquery-2.1.0.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>
 

		<!-- Vertika's stuff -->
		<link type="text/css" rel="stylesheet" href="css/Category.css"/>

		<!-- Drag and Drop -->
		<!-- <title>jQuery UI Sortable - Display as grid</title>
	  	<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
	  	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	  	<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	  	<link rel="stylesheet" href="/resources/demos/style.css">

		<style>
			  #sortable { list-style-type: none; margin: 0; padding: 0; width: 450px; }
			  #sortable li { margin: 3px 3px 3px 0; padding: 1px; float: left; width: 100px; height: 90px; font-size: 4em; text-align: center; }
		  </style>

		<script type="text/javascript">
			$(function() {
		    	$( "#sortable" ).sortable();
		    	$( "#sortable" ).disableSelection();
		  	});
		</script> -->

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
					<li><a href="Home.php">Home</a></li>
					<li><a href="About.html">About</a></li>
					<li><a href="Rules.html">Rules</a></li>
					<li><a href="Challenges.html">Challenges</a></li>
					<li class="active"><a href="Category.html">Play!</a></li>
				</ul>
			</div>
			</div>
		</div>
		<p></p>


		<!--<ul id="sortable">
		  <li class="ui-state-default">1</li>
		  <li class="ui-state-default">2</li>
		  <li class="ui-state-default">3</li>
		  <li class="ui-state-default">4</li>
		  <li class="ui-state-default">5</li>
		  <li class="ui-state-default">6</li>
		  <li class="ui-state-default">7</li>
		  <li class="ui-state-default">8</li>
		  <li class="ui-state-default">9</li>
		  <li class="ui-state-default">10</li>
		  <li class="ui-state-default">11</li>
		  <li class="ui-state-default">12</li>
		</ul> -->

		<h1 align="center" style="height:50px"> Choose your categories </h1>

		<table align="center">
			<tr>	
				<td>
					<div class="well" id="categoryBox">
						<table>
							<tr>
								<td>
									<button class="btn" id="cat0">Category0</button>
								</td>
								<td>
									<button class="btn" id="cat1">Category1</button> 
								</td>
								<td>
									<button class="btn" id="cat2">Category2</button> 
								</td>
							</tr>
							<tr>
								<td>
									<button class="btn" id="cat3">Category3
									</button> 
								</td>
								<td>
									<button class="btn" id="cat4">Category4</button> 
								</td>
								<td>
									<button class="btn" id="cat5">Category5</button> 
								</td>
							</tr>
							<tr>
								<td>
									<button class="btn" id="cat6">Category6 </button> 
								</td>
								<td>
									<button class="btn" id="cat7">Category7</button> 
								</td>
								<td>
									<button class="btn" id="cat8">Category8</button> 
								</td>
							</tr>
							<tr>
								<td>
									<button class="btn" id="cat9">Category9
									</button> 
								</td>
								<td>
									<button class="btn" id="cat10">Category10</button> 
								</td>
								<td>
									<button class="btn" id="cat11">Category11</button> 
								</td>
							</tr>
							<tr>
								<td>
									<button class="btn" id="cat12">Category12
									</button> 
								</td>
								<td>
									<button class="btn" id="cat13">Category13</button> 
								</td>
								<td>
									<button class="btn" id="cat14">Category14</button> 
								</td>
							</tr>
							<tr>
								<td>
									<button class="btn" id="cat15">Category15
									</button> 
								</td>
								<td>
									<button class="btn" id="cat7">Category7</button> 
								</td>
								<td>
									<button class="btn" id="cat16">Category16</button> 
								</td>
							</tr>
							<tr>
								<td>
									<button class="btn" id="cat17">Category17
									</button> 
								</td>
								<td>
									<button class="btn" id="cat18">Category18</button> 
								</td>
								<td>
									<button class="btn" id="cat19">Category19</button> 
								</td>
							</tr>
							<tr>
								<td>
									<button class="btn" id="cat20">Category20
									</button> 
								</td>
								<td>
									<button class="btn" id="cat21">Category21</button> 
								</td>
								<td>
									<button class="btn" id="cat22">Category22</button> 
								</td>
							</tr>
							<tr>
								<td>
									<button class="btn" id="cat23">Category23
									</button> 
								</td>
								<td>
									<button class="btn" id="cat24">Category24</button> 
								</td>
								<td>
									<button class="btn" id="cat25">Category25</button> 
								</td>
							</tr>
							<tr>
								<td>
									<button class="btn" id="cat26">Category26
									</button> 
								</td>
								<td>
									<button class="btn" id="cat27">Category27</button> 
								</td>
								<td>
									<button class="btn" id="cat28">Category28</button> 
								</td>
							</tr>
							<tr>
								<td>
									<button class="btn" id="cat29">Category29
									</button> 
								</td>
								<td>
									<button class="btn" id="cat30">Category30</button> 
								</td>
								<td>
									<button class="btn" id="cat31">Category31</button> 
								</td>
							</tr>
							<tr>
								<td>
									<button class="btn" id="cat32">Category32
									</button> 
								</td>
								<td>
									<button class="btn" id="cat33">Category33</button> 
								</td>
								<td>
									<button class="btn" id="cat34">Category34</button> 
								</td>
							</tr>
							<tr>
								<td>
									<button class="btn" id="cat35">Category35
									</button> 
								</td>
								<td>
									<button class="btn" id="cat36">Category36</button> 
								</td>
								<td>
									<button class="btn" id="cat37">Category37</button> 
								</td>
							</tr>
							<tr>
								<td>
									<button class="btn" id="cat38">Category38
									</button> 
								</td>
								<td>
									<button class="btn" id="cat39">Category39</button> 
								</td>
								<td>
									<button class="btn" id="cat40">Category41</button> 
								</td>
							</tr>
							<tr>
								<td>
									<button class="btn" id="cat41">Category41
									</button> 
								</td>
								<td>
									<button class="btn" id="cat42">Category42</button> 
								</td>
								<td>
									<button class="btn" id="cat43">Category43</button> 
								</td>
							</tr>
						</table>
					</div>
				</td>
				<td>
					<div class="well" id="bin0"></div>
					<div class="well" id="bin1"></div>
					<div class="well" id="bin2"></div>
					<div class="well" id="bin3"></div>
					<div class="well" id="bin4"></div>
					<div class="well" id="bin5"></div>
							
					<div style="height: 300px" align="center">
						<button class="btn .btn-large btn-success" id="playButton">Start game!
						</button>
					</div>
				</td>
			</tr>
		</table>
		
		
	  	<script>
	  		$('#playButton').click(function(){
	
	
					/*
					The categories in the link are called query strings.
					The hardcoded strings should be replaced by user selections but in the
					same format as shown.
					*/
	
					/*
					Also something to keep in mind: putting %20 anywhere there is a space.
					May have to write a separate function for this.
					*/
					
	    		window.location.href ='Game.html?Category1=History&'+
																					'Category2=Physics&'+
																					'Category3=Music&'+
																					'Category4=Health&'+
																					'Category5=Life&'+
																					'Category6=Culture';
	      });
	    </script>




		<!-- End code here! -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>

</html>
