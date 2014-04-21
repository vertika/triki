<?php
	session_start();

	require_once('connection.php');

	$userName = $_POST['username'];
	$passWord = $_POST['password'];
	// $_SESSION['username'] = $username;
	$userName = mysqli_real_escape_string($db, $userName);
	 	 
	$query = "SELECT *
	        FROM members
	        WHERE username = '$userName';";
	 
	$result = mysqli_query($db, $query);
	 
	if(mysqli_num_rows($result) == 0) // User not found. So, redirect to login_form again.
	{
	    header('Location: Landing.php');
	}
	 
	$userData = mysqli_fetch_array($result, MYSQL_ASSOC);

	$hash = hash('sha256', $userData['salt'] . hash('sha256', $passWord) );
	 
	if ($hash != $userData['password']) // Incorrect password. So, redirect to login_form again.
	{
		$_SESSION['loggedin'] = 0;
	    header('Location: /');
	}
	else { // Redirect to home page after successful login.
		$_SESSION['loggedin'] = 1;
		$_SESSION['firstname'] = $userData["firstname"];
		$_SESSION['lastname'] = $userData["lastname"];
		$_SESSION['username'] = $userData["username"];
		$_SESSION['email'] = $userData["email"];
		
		header('Location: Home.php');
	}

	mysqli_close($db);
?>