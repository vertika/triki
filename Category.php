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
		<link rel="stylesheet" type="text/css" href="css/trikiStyles.css" media="screen" />

		<!-- JQuery -->
		<script src="js/jquery-2.1.0.min.js"></script>
		
		<!-- Vertika's stuff -->
		<link type="text/css" rel="stylesheet" href="css/Category.css"/>
		<script type="text/javascript">
			function dragStart(ev) {
			    ev.dataTransfer.effectAllowed='move';
			    //ev.dataTransfer.dropEffect='move';
			    ev.dataTransfer.setData("Text", ev.target.getAttribute('id'));
			    ev.dataTransfer.setDragImage(ev.target,0,0);
			    return true;
			}
	
			function dragEnd(ev) {
			    ev.dataTransfer.clearData("Text");
			    return true;
			}
	
			function dragEnter(ev) {
			    var idelt = ev.dataTransfer.getData("Text");
			    return true;
			}
	
			function dragOver(ev) {
			    var idelt = ev.dataTransfer.getData("Text");
			    var id = ev.target.getAttribute('id');
			    
	
			    return false;
			}
	
			function dragDrop(ev) {
			 	console.log('drop');
			    var idelt = ev.dataTransfer.getData("Text");
			    ev.target.appendChild(document.getElementById(idelt));
			    ev.stopPropagation();
			    return false; // return false so the event will not be propagated to the browser
			}
			
		</script>
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
					<li><a href="About.php">About</a></li>
					<li class="active"><a href="Category.php">Play!</a></li>
					<li><?php echo '<a href="logout.php">Logout</a>';?></li>
				</ul>
			</div>
			</div>
		</div>
		<p></p>


		<h1 align="center" style="height:50px"> Choose your categories </h1>

		<table align="center">
			<tr>	
				<td>
					<div class="well" id="categoryBox">
						<table 
							ondragenter="return dragEnter(event)"
							ondrop="return dragDrop(event)"
							ondragover="return dragOver(event)">
							<tr>
								<td>
									<button class="btn" id="cat0"
											draggable="true"
											ondragstart="return dragStart(event)"
											ondragend="return dragEnd(event)">Category0
									</button> 
								</td>
								<td>
									<button class="btn" id="cat1"
											draggable="true"
											ondragstart="return dragStart(event)"
											ondragend="return dragEnd(event)">Category1
									</button> 
								</td>
								<td>
									<button class="btn" id="cat2"
											draggable="true"
											ondragstart="return dragStart(event)"
											ondragend="return dragEnd(event)">Category2
									</button> 
								</td>
							</tr>
							<tr>
								<td>
									<button class="btn" id="cat3"
											draggable="true"
											ondragstart="return dragStart(event)"
											ondragend="return dragEnd(event)">Category3
									</button> 
								</td>
								<td>
									<button class="btn" id="cat4"
											draggable="true"
											ondragstart="return dragStart(event)"
											ondragend="return dragEnd(event)">Category4
									</button> 
								</td>
								<td>
									<button class="btn" id="cat5"
											draggable="true"
											ondragstart="return dragStart(event)"
											ondragend="return dragEnd(event)">Category5
									</button> 
								</td>
							</tr>
						</table>
					</div>
				</td>
				<td>
					<div class="well" id="bin0" 
							ondragenter="return dragEnter(event)"
							ondrop="return dragDrop(event)"
							ondragover="return dragOver(event)"></div>
					<div class="well" id="bin1" 
							ondragenter="return dragEnter(event)"
							ondrop="return dragDrop(event)"
							ondragover="return dragOver(event)"></div>
					<div class="well" id="bin2" 
							ondragenter="return dragEnter(event)"
							ondrop="return dragDrop(event)"
							ondragover="return dragOver(event)"></div>
					<div class="well" id="bin3" 
							ondragenter="return dragEnter(event)"
							ondrop="return dragDrop(event)"
							ondragover="return dragOver(event)"></div>
					<div class="well" id="bin4" 
							ondragenter="return dragEnter(event)"
							ondrop="return dragDrop(event)"
							ondragover="return dragOver(event)"></div>
					<div class="well" id="bin5" 
							ondragenter="return dragEnter(event)"
							ondrop="return dragDrop(event)"
							ondragover="return dragOver(event)"></div>
							
					<div style="height: 300px" align="center">
						<button class="btn .btn-large btn-success" id="playButton">Start game!
						</button>
					</div>
				</td>
			</tr>
		</table>
		
		
	
		<!--<div class="well" align="center" id="categoryBox"
			ondragenter="return dragEnter(event)"
		        ondrop="return dragDrop(event)"
		        ondragover="return dragOver(event)">
	
			<div class="btn-toolbar" align="center" id="spaceBelow">
			  	<button class="btn" id="cat0"
			  		draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category0
	        	</button> 
			  	<button class="btn" id="cat1"
			  		draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category1
			        </button> 
	            		<button class="btn" id="cat2"
			  		draggable="true"
	            			ondragstart="return dragStart(event)"
	            			ondragend="return dragEnd(event)">Category2
	        		</button> 
	        		<button class="btn" id="cat3"
			  		draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category3
			        </button> 
			</div>
			<div class="btn-toolbar" align="center" id="spaceBelow">
			  	<button class="btn" id="cat4"
			  		draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category4
			        </button> 
			  	<button class="btn" id="cat5"
			  		draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category5
			        </button> 
			        <button class="btn" id="cat6"
					draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category6
			        </button> 
			</div>
			<div class="btn-toolbar" align="center" id="spaceBelow">
			  	<button class="btn" id="cat7"
			  		draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category7
	            		</button> 
			  	<button class="btn" id="cat8"
			  		draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category8
	            		</button> 
	        		 <button class="btn" id="cat9"
			  		draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category9
	        		</button> 
	        		 <button class="btn" id="cat10"
			  		draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category10
	        		</button> 
			</div>
			<div class="btn-toolbar" align="center" id="spaceBelow">
			  	<button class="btn" id="cat11"
			  		draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category11
	            		</button> 
			  	<button class="btn" id="cat12"
			  		draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category12
			        </button> 
			      	<button class="btn" id="cat13"
					draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category13
	            		</button> 
			</div>
			<div class="btn-toolbar" align="center" id="spaceBelow">
			  	<button class="btn" id="cat14"
				  	draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category14
		            	</button> 
			  	<button class="btn" id="cat15"
			  		draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category15
	            		</button> 
		        	<button class="btn" id="cat16"
				  	draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category16
		            	</button> 
	            		<button class="btn" id="cat17"
			  		draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category17
	            		</button> 
			</div>
			<div class="btn-toolbar" align="center" id="spaceBelow">
			  	<button class="btn" id="cat18"
			  		draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category18
	            		</button> 
			  	<button class="btn" id="cat19"
			  		draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category19
	            		</button> 
	            		<button class="btn" id="cat20"
			  		draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category20
			        </button> 
			</div>
			<div class="btn-toolbar" align="center" id="spaceBelow">
			  	<button class="btn" id="cat21"
			  		draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category21
			        </button> 
			  	<button class="btn" id="cat22"
			  		draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category22
			        </button> 
	            		<button class="btn" id="cat23"
			  		draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category23
	            		</button> 
	        		<button class="btn" id="cat24"
			  		draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category24
			        </button> 
			</div>
			<div class="btn-toolbar" align="center" id="spaceBelow">
			  	<button class="btn" id="cat25"
			  		draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category25
			        </button> 
			  	<button class="btn" id="cat26"
			  		draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category26
			        </button> 
	        		<button class="btn" id="cat27"
			  		draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category27
	            		</button> 
			</div>
			<div class="btn-toolbar" align="center" id="spaceBelow">
			  	<button class="btn" id="cat28"
			  		draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category28
			        </button> 
			  	<button class="btn" id="cat29"
			  		draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category29
	        		</button> 
		            	<button class="btn" id="cat30"
				  	draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category30
			        </button> 
		            	<button class="btn" id="cat31"
				  	draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category31
		            	</button> 
			</div>
			<div class="btn-toolbar" align="center" id="spaceBelow">
			  	<button class="btn" id="cat32"
			  		draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category32
	        		</button> 
			  	<button class="btn" id="cat33"
			  		draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category33
	            		</button> 
	        		<button class="btn" id="cat34"
			  		draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category34
	        		</button> 
			</div>
			<div class="btn-toolbar" align="center" id="spaceBelow">
			  	<button class="btn" id="cat35"
			  		draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category35
	            		</button> 
			  	<button class="btn" id="cat36"
			  		draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category36
			        </button> 
		           	<button class="btn" id="cat37"
			  		draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category37
	            		</button> 
	            		<button class="btn" id="cat38"
			  		draggable="true"
			            	ondragstart="return dragStart(event)"
			            	ondragend="return dragEnd(event)">Category38
	            		</button> 
			</div>
		</div> -->
	

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
