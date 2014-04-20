<?php
	session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];
	 
	$mysqli = new mysqli('localhost', 'roy', 'chou', 'test');
	 
	$username = $mysqli->real_escape_string($username);
	 
	$query = "SELECT password, salt
	        FROM members
	        WHERE username = '$username';";
	 
	$result = $mysqli->query($query);
	 
	if($result->num_rows == 0) // User not found. So, redirect to login_form again.
	{
	    header('Location: Landing.php');
	}
	 
	$userData = mysqli_fetch_array($result, MYSQL_ASSOC);
	$hash = hash('sha256', $userData['salt'] . hash('sha256', $password) );
	 
	if ($hash != $userData['password']) // Incorrect password. So, redirect to login_form again.
	{
		$_SESSION['loggedin'] = 0;
	    header('Location: Landing.php');
	}else { // Redirect to home page after successful login.
		$_SESSION['loggedin'] = 1;
		$_SESSION['username'] = $userData['username'];
		header('Location: Home.php');
	}

	$mysqli->close();
?>