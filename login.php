<?php
	session_start();

	require_once('connection.php');

	$username = $_POST['username'];
	$password = $_POST['password'];
	// $_SESSION['username'] = $username;	
	$username = mysqli_real_escape_string($db, $username);
	 	 
	$query = "SELECT password, salt
	        FROM members
	        WHERE username = '$username';";
	 
	$result = mysqli_query($db, $query);
	 
	if(mysqli_num_rows($result) == 0) // User not found. So, redirect to login_form again.
	{
	    header('Location: Landing.php');
	}
	 
	$userData = mysqli_fetch_array($result, MYSQL_ASSOC);
	$hash = hash('sha256', $userData['salt'] . hash('sha256', $password) );
	 
	if ($hash != $userData['password']) // Incorrect password. So, redirect to login_form again.
	{
		$_SESSION['loggedin'] = 0;
	    header('Location: /');
	}
	else { // Redirect to home page after successful login.
		$_SESSION['loggedin'] = 1;
		$_SESSION['username'] = $username;		
		// $_SESSION['username'] = $userData['username'];

		header('Location: Home.php');
	}

	mysqli_close($db);
?>