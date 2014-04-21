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
		<link rel="stylesheet" type="text/css" href="trikiStyles.css" media="screen" />
		<link href="css/About.css" rel="stylesheet">

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
					<li class="active"><a href="About.php">About</a></li>
					<li><a href="Category.php">Play!</a></li>
					<li><?php echo '<a href="logout.php">Logout</a>'</li>
				</ul>
			</div>
			</div>
		</div>
		<p></p>
		
		
		<!-- Start code here: -->
		<!--
		<details open>
			<summary><b>How to Play?</b></summary>
			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
		</details>
		
		<details>
			<summary><b>How it all Started?</b></summary>
			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
		</details>
		
		-->
		<div class="container">
		<h2>
		What is Triki?
		</h2>
		
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
			Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
			when an unknown printer took a galley of type and scrambled it to make a type specimen book.
			It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
			It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
			and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		</p>
		
		<h2>How to Play? 
			<button class="btn btn-primary collapsed" data-toggle="collapse" data-target="#intro1"></button>
		</h2>
		<div id="intro1" class="collapse"> 
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
				Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
				when an unknown printer took a galley of type and scrambled it to make a type specimen book.
				It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
				It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
				and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			</p>
				
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
				Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
				when an unknown printer took a galley of type and scrambled it to make a type specimen book.
				It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
				It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
				and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			</p>
				
		</div>
		
		
		<h2>Learn more about us
			<button class="btn btn-primary collapsed" data-toggle="collapse" data-target="#intro2"></button>
		</h2>
		<div id="intro2" class="collapse"> 
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
				Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
				when an unknown printer took a galley of type and scrambled it to make a type specimen book.
				It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
				It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
				and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
		</div>
		
		</div>
		
		
		<!-- End code here! -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>
	
</html>
