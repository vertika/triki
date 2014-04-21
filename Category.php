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
		<script src="js/jquery-ui-1.10.4.custom.js"></script>

		<!-- Triki -->
		<link rel="stylesheet" type="text/css" href="css/trikiStyles.css" media="screen"/>
		<link type="text/css" rel="stylesheet" href="css/Category.css"/>
		<script src="js/Category.js"></script>


		<script>
			var occupiedBins = 0;
			var chosenCats = ['none', 'none','none','none','none','none'];
			var cats = ['Agriculture', 'Arts', 'Business', 'Chronology', 'Culture','Education', 'Environment', 'Entertainment', 'Geography', 'Health', 'History', 'Humanities', 'Humans', 'Language', 'Law', 'Life', 'Mathematics', 'Medicine', 'Nature', 'People', 'Politics', 'Science', 'Society', 'Sports', 'Technology', 'Musicians', 'Psychology',  'Fashion', 'Countries', 'Animals', 'Astrology','Music', 'Film', 'Television', 'Books'];

			$( init );

			function init()
			{
				// reset
				occupiedBins = 0;
				$('#categoryBox').html( '' );
  				$('#binBox').html( '' );

  				var myCatBox = $('#categoryBox').droppable({
					accept: '#categoryBox div',
					hoverClass: 'hovered',
					drop: function(ev,ui){
						console.log('dropping into categoryBox');

						var fromBinNum = ui.draggable.data('inBin');

						if(fromBinNum == 7)
						{
							// do nothing because already in catBox
						}
						else
						{
							ui.draggable.removeClass( 'correct' );
							var fromBin = '#bin' + ui.draggable.data('inBin');
							$(fromBin).droppable('enable');

							occupiedBins--;
							ui.draggable.data('inBin', 7);
						}



						console.log(occupiedBins);
					}
				});

				$('#categoryBox').sortable();

				// create clump categories
				for ( var i=0; i<35; i++ ) {
					$('<div class="well ui-draggable">' + cats[i] + '</div>').data('category', cats[i]).data('inBin',7).attr('id', 'cat'+i).appendTo('#categoryBox').draggable( {
				      containment: 'window',
				      stack: '#categoryBox div',
				      snap: '#categoryBox',
				      cursor: 'move',
				      revert: true,
				    } );
				}

				// create the bin slots
				for ( var i=0; i<6; i++ ) {
				    $('<div class="well ui-droppable">Drop category here </div>').data( 'number', i ).data('occupied',0).attr('id', 'bin'+i).appendTo( '#binBox' ).droppable( {
				      accept: '#categoryBox div',
				      hoverClass: 'hovered',
				      drop: handleCatDrop
				    } );
			 	}
			}

			function handleCatDrop( event, ui )
			{

				console.log('droppping into bins');

				var binNum = $(this).data('number');
				var binOccupied = $(this).data('occupied');
				var catName = ui.draggable.data('category');

				// occupying a new bin
				if(ui.draggable.data('inBin') == 7)
				{
					occupiedBins++;
					ui.draggable.addClass( 'correct' );
				}
				// coming from old bin
				else
				{
					//reenabled
					var fromBin = '#bin' + ui.draggable.data('inBin');
					$(fromBin).droppable('enable');
				}

				// occupy new bin
				//$(this).data( 'occupied', 1);

				// update to new bin
				ui.draggable.data('inBin',binNum);
				chosenCats[binNum] = catName;

				console.log(occupiedBins);


				$(this).droppable( 'disable' );
				ui.draggable.position( { of: $(this), my: 'left top', at: 'left top' } );
				ui.draggable.draggable( 'option', 'revert', false );


			}

		</script>


	</head>

	<body  id="pageBody" style="cursor: default;">
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


		<div id="panel" class="panel panel-default">

			<div id="panelHeading" class="panel-heading">Choose Your Categories </div>
			<div class="panel-body">
				<table align="center" id="bigTable">
					<tr>
						<td>
							<div class="well ui-droppable" id="categoryBox"></div>
						</td>

						<td>
							<div id="binBox" align="center"></div>

							<button class="btn .btn-large btn-success" id="playButton" align="center">Start game!</button>

						</td>
					</tr>
				</table>
			</div>
		</div>


	  	<script>
	  		$('#playButton').click(function(){
	  				if(occupiedBins != 6)
	  				{
	  					alert("Must choose 6 categories before starting game.");
	  				}
	  				else
	  				{

	  					for(var i = 0; i < 6; i++)
	  					{
	  						console.log(chosenCats[i] + '');
	  					}

	  					// categories contained in array chosenCats (from chosenCats[0] to chosenCats[5])
	  					window.location.href ='Game.php?Category1=' + chosenCats[0] +
	  					'&Category2=' + chosenCats[1] +
	  					'&Category3=' + chosenCats[2] +

	  					'&Category4=' + chosenCats[3] +

	  					'&Category5=' + chosenCats[4] +

	  					'&Category6=' + chosenCats[5]
	  					;
	  				}
					/*
					The categories in the link are called query strings.
					The hardcoded strings should be replaced by user selections but in the
					same format as shown.
					*/

					/*
					Also something to keep in mind: putting %20 anywhere there is a space.
					May have to write a separate function for this.
					*/


	      });
	    </script>





	</body>

</html>
