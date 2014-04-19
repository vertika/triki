<?php
	$username = $_POST['username'];
	$password1 = $_POST['password1'];
	$password2 = $_POST['password2'];
	$email = $_POST['email'];
	 
	if($password1 != $password2)
	    header('Location: register.php');
	 
	if(strlen($username) > 30)
	    header('Location: register.php');
	 
	$hash = hash('sha256', $password1);
	 
	function createSalt()
	{
	    $text = md5(uniqid(rand(), true));
	    return substr($text, 0, 3);
	}
	 
	$salt = createSalt();
	$password = hash('sha256', $salt . $hash);				
	 
	$mysqli = new mysqli('localhost', 'roy', 'chou', 'test'); //we change the mysqli_connect to "new mysqli"
	 
	//sanitize username
	$username = $mysqli->real_escape_string($username);
	 
	$query = "INSERT INTO members ( username, email, password, salt ) VALUES 
			( '$username', '$email', '$password', '$salt' )";
	 
	//remove $conn variable in order to connect to our database using OOP.
	$mysqli->query($query);
	
	$query = "INSERT INTO gamestats ( gamesplayed, agriculture, arts, business, chronology, culture, education) VALUES 
			( 0, 0, 0, 0, 0, 0, 0)";

	$mysqli->query($query);

	$mysqli->close();
	 
	header('Location: Landing.php');
?>