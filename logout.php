<?php

/*
	require 'fb-sdk/facebook.php';

	$facebook = new Facebook(array(
  		'appId'  => '578241305624655',
  		'secret' => '163708fdec7503fe860750419670152a',
	));*/

 	// echo "BLA";
	//on logout page
	// $params = array('next' => $logout.php');
	// $logoutUrl = $facebook->getLogoutUrl($params); // $params is optional.

	setcookie('fbs_'.$facebook->getAppId(), '', time()-100, '/', 'rzchou.com');
	session_destroy();
//	$facebook->destroySession();
	header('Location: /');

?>
