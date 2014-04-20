<?php
	require_once('connection.php');

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
	 	 
	//sanitize username
	$username = mysqli_real_escape_string($db, $username);
	 
	$query = "INSERT INTO members ( username, email, password, salt ) VALUES 
			( '$username', '$email', '$password', '$salt' ); ";
	$query .= "INSERT INTO gamestats ( username ) VALUES 
			( '$username');";
	 
	//remove $conn variable in order to connect to our database using OOP.
	// $mysqli_multi_query($query);
	mysqli_query($db, $query);

	mysqli_close($db);
	 
	header('Location: /');
?>